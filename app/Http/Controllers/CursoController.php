<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;

class CursoController extends Controller
{
   

    // public function store(Request $request){
    //     $users = new User;
    //     $cursos = new Curso;

    //     $users->name = $request->name;
    //     $users->email = $request->email;
    //     $users->password = $request->password;

    //     // image upload
    //     if($request->hasFile('image') && $request->file('image')->isValid()) {
    //         $requestImage = $request->image;

    //         $extension = $requestImage->extension();

    //         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));

    //         $requestImage->move(public_path('img/users'), $imageName);

    //         $users->image = $imageName;
    //     }

    //     $user = auth()->user();
    //     $cursos->user_id = $user->id;

    //     $users->save();

    //     return redirect('index')->with('msg', 'Cadastro feito com sucesso! Faça o Login.');
    // }

    
    public function Index(){
        $users = User::all();
        return view('index', ['users' => $users]); 
    }
    public function Contato(){
        $users = User::all();
        return view('contato', ['users' => $users]);
    }
    public function consultoria(){
        $users = User::all();
        return view('consultoria', ['users' => $users]);
    }
    public function cadastro(){
        $users = User::all();
        return view('cadastro', ['users' => $users]);
    }
    public function create(){
        $cursos = Curso::all();
        return view('create', ['cursos' => $cursos])->with('msg', 'Curso criado com sucesso!');
    }

    public function cursos(){

        $search = request('search');
        // $cursos = new Curso;
        $cursos = new Curso;

        if($search){
            $cursos = Curso::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else {
            $cursos = Curso::all();
        }

        return view('cursos', ['cursos' => $cursos,'search' => $search]);
    }


    public function dashboard() {
        
        $user = auth()->user();
        $cursos = $user->cursos;
        $cursosAsParticipant = $user->cursosAsParticipant;

        return view('dashboard', ['cursos' => $cursos, 'users' => $user, 'cursosAsParticipant' => $cursosAsParticipant]);
    }

    public function destroy($id) {
        Curso::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Curso excluído com sucesso!');

    }

    public function edit($id) {
        $user = auth()->user();

        $cursos = Curso::findOrFail($id);

        if($user->id != $curso->user->id) {
            return redirect('/dashboard');
        }

        return view('edit', ['cursos' => $cursos]);
    }

    public function criar() {
        return view('create');
    }

    public function update(Request $request) {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));

            $requestImage->move(public_path('img/cursos'), $imageName);

            $data['image'] = $imageName;
        }

        Curso::findOrFail($request->id)->update($data);

        return redirect('dashboard')->with('msg', 'Curso editado com sucesso!');
    }


    public function store(Request $request){
        $cursos = new Curso;
        $cursos->nome = $request->nome;
        $cursos->sobre = $request->sobre;
        $cursos->dataCurso = $request->dataCurso;
        $cursos->tempoCurso = $request->tempoCurso;
        $cursos->apostilas = $request->apostilas;
        $cursos->status = $request->status;
        $cursos->link = $request->link;
        $cursos->valor = $request->valor;

        // image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));

            $requestImage->move(public_path('img/cursos'), $imageName);

            $cursos->image = $imageName;
        }

        $user = auth()->user();
        $cursos->user_id = $user->id;

        $cursos->save();
        return redirect('dashboard')->with('msg', 'Curso criado com sucesso!');
    }


    public function joinCurso($id) {

        $user = auth()->user();
        $user->cursosAsParticipant()->attach($id);
        $curso = Curso::findOrFail($id);

        return redirect('dashboard')->with('msg', 'Você comprou o curso de ' . $curso->nome);
    }
    public function leaveCurso($id) {

        $user = auth()->user();
        $user->cursosAsParticipant()->detach($id);
        $curso = Curso::findOrFail($id);

        return redirect('dashboard')->with('msg', 'Cancelado a compra do curso de ' . $curso->nome);
    }



    public function aula($id){
        
        $cursos = Curso::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;

        if($user) {

            $userCursos = $user->cursosAsParticipant->toArray();

            foreach($userCursos as $userCurso) {
                if($userCurso['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }


        $cursosOwner = User::where('id', $cursos->user_id)->first()->toArray();
        
         if($id==1){ $num = "1"; }
         if($id==2){ $num = "2"; }
         if($id==3){ $num = "3"; }
         if($id==4){ $num = "4"; }
         if($id==5){ $num = "5"; }
         if($id==6){ $num = "6"; }
        return view('aula', [
            'num' => $num, 
            'curso' => $cursos,
            'cursosOwner' => $cursosOwner,
            'hasUserJoined' => $hasUserJoined
        ]);
    }
}

            // id = 1
            // $fotoCard = "Nutricao.jpg";
            // $curso = "Nutrição";
            // $sobre = "&rarr; Para ser um nutricionista de sucesso, algumas características são essenciais para se 
            // diferenciar no mercado, como facilidade para lidar com as pessoas, preocupação com a 
            // saúde e com o bem-estar da população, além de um olhar diferenciado para os alimentos.";
            // $dataCurso = "01/04/2021";
            // $tempoCurso = "12:00";
            // $numApos = "4";
            // $status = "Em produção";
            // $link = "#";
            // $valor = "100,00";

            // id = 2
            // $fotoCard = "prog.jpg";
            // $curso = "Programação";
            // $sobre = "&rarr; A programação consiste na criação de um conjunto de instruções, um programa, de modo 
            // a possibilitar que o computador execute uma determinada tarefa ou atinja algum objetivo específico. 
            // O programa deve, portanto, ser escrito em uma linguagem de programação.";
            // $dataCurso = "xx/xx/xxxx";
            // $tempoCurso = "xx:xx";
            // $numApos = "3";
            // $status = "Em breve";
            // $link = "#";
            // $valor = "100,00";

            // id = 3
            // $fotoCard = "photoshop.png";
            // $curso = "Photoshop";
            // $sobre = "&rarr; O Photoshop segue sendo como um dos softwares mais utilizados do mundo quando o 
            // assunto é edição de imagens do tipo bidimensionais. Este software acabou se tornando praticamente 
            // uma referência quando o assunto é modificações em fotos.";
            // $dataCurso = "xx/xx/xxxx";
            // $tempoCurso = "xx:xx";
            // $numApos = "4";
            // $status = "Em breve";
            // $link = "#";
            // $valor = "100,00";

            // id = 4
            // $fotoCard = "financeira.png";
            // $curso = "Educação financeira";
            // $sobre = "&rarr; Educação financeira é o processo em que um indivíduo busca conhecimento para lidar com o dinheiro de forma mais 
            // consciente e inteligente. A ideia é que o aprendizado seja convertido em ações e em um comportamento prático. ... A partir dela, a pessoa tem melhores 
            // condições de saber o que fazer com seu dinheiro.";
            // $dataCurso = "xx/xx/xxxx";
            // $tempoCurso = "xx:xx";
            // $numApos = "6";
            // $status = "Em breve";
            // $link = "#";
            // $valor = "100,00";

            // id = 5
            // $fotoCard = "ILLUSTRATOR.jpg";
            // $curso = "Adobe Illustration";
            // $sobre = "&rarr; Este é um curso para aprender a usar o Adobe Illustrator do zero! Você aprenderá das ferramentas mais básicas às 
            //  mais avançadas do programa. Você realizará diferentes exercícios criativos para desenvolver seu olhar de designer e aprender a integrar suas ilustrações em
            //  seus projetos de design gráfico.";
            // $dataCurso = "xx/xx/xxxx";
            // $tempoCurso = "xx:xx";
            // $numApos = "4";
            // $status = "Em breve";
            // $link = "#";
            // $valor = "100,00";

            // id = 6
            // $fotoCard = "elétrica.jpg";
            // $curso = "Comandos Elétricos";
            // $sobre = "&rarr; Comandos elétricos foi o princípio da automação, devido as suas lógicas de comandos e acionamentos, sendo que a sua 
            //  principal função é realizar o acionamento de máquinas elétricas e equipamentos elétricos, como os motores trifásicos por exemplo, que são comuns de serem 
            //  encontrados dentro das indústrias.";
            // $dataCurso = "xx/xx/xxxx";
            // $tempoCurso = "xx:xx";
            // $numApos = "2";
            // $status = "Em breve";
            // $link = "#";
            // $valor = "100,00";


            
