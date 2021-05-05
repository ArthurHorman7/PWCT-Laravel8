@extends('layouts.main')

@section('title', 'Cursos')

@section('content')


    <!-- INÍCIO DOS CURSOS -->
    @if($search)
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Buscando por: {{$search}}</h1>
    @else
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Nossos Cursos</h1>
    @endif

    <div class="col-md-12 mt-3" id="search-container">
      <!-- <h1 class="h5 text-white">Busque um Curso</h1> -->
      <form action="/cursos" method="GET">
        <h1 class="h5 text-white">Busque um Curso</h1>
        <input type="text" name="search" id="search" class="form-control" placeholder="🔍">
      </form>
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mx-auto">
    @foreach($cursos as $curso)
        <div class="col mb-3">
          <div class="card h-100 cursoss">
            <a href="/aula/{{$curso->id}}">
            <img src="img/{{$curso->image}}" class="card-img-top img-curso" alt="Imagem do curso de {{$curso->nome}}">
            <div class="card-body">
              <h5 class="card-title">{{$curso->nome}}</h5>
              <h6 class="card-title">Valor R${{$curso->valor}}</h6>
              <p class="card-text text-primary"> &rarr; {{$curso->sobre}}</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">{{$curso->status}}</small>
            </div>
            </a>
          </div>
        </div>
        <!-- <div class="col">
          <div class="card h-100 cursoss">
            <a href="/aula/1">
            <img src="img/Nutricao.jpg" class="card-img-top img-curso" alt="Imagem do curso de nutrição">
            <div class="card-body">
              <h5 class="card-title">Curso de Nutrição</h5>
              <h6 class="card-title">Valor R$100.00</h6>
              <p class="card-text text-primary"> &rarr; Para ser um nutricionista de sucesso, algumas características são essenciais para se diferenciar no mercado, como facilidade para lidar com as pessoas, preocupação com a saúde e com o bem-estar da população, além de um olhar diferenciado para os alimentos.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em produção</small>
            </div>
            </a>
          </div>
        </div>
        <div class="col card-meio">
          <div class="card h-100 cursoss">
            <a href="/aula/2">
            <img src="img/prog.jpg" class="card-img-top img-curso" alt="Imagem do curso de Programação">
            <div class="card-body">
              <h5 class="card-title">Curso de programação para iniciantes</h5>
              <h6 class="card-title">Valor R$0.00</h6>
              <p class="card-text text-primary"> &rarr; A programação consiste na criação de um conjunto de instruções, um programa, de modo a possibilitar que o computador execute uma determinada tarefa ou atinja algum objetivo específico. O programa deve, portanto, ser escrito em uma linguagem de programação.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em breve</small>
            </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cursoss">
            <a href="/aula/3">
            <img src="img/photoshop.png" class="card-img-top img-curso" alt="Imagem do curso de Photoshop">
            <div class="card-body">
              <h5 class="card-title">Curso de Photoshop básico</h5>
              <h6 class="card-title">Valor R$0.00</h6>
              <p class="card-text text-primary"> &rarr; O Photoshop segue sendo como um dos softwares mais utilizados do mundo quando o 
                assunto é edição de imagens do tipo bidimensionais. Este software acabou se tornando praticamente uma referência quando 
                o assunto é modificações em fotos.<br>.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em breve</small>
            </div>
            </a>
          </div>
        </div> -->
      @endforeach
    </div>


    <!-- <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mx-auto">
        <div class="col">
          <div class="card h-100 cursoss">
            <a href="/aula/4">
            <img src="img/financeira.png" class="card-img-top img-curso" alt="Imagem do curso de nutrição">
            <div class="card-body">
              <h5 class="card-title">Curso de Educação financeira</h5>
              <h6 class="card-title">Valor R$0.00</h6>
              <p class="card-text text-primary"> &rarr; Educação financeira é o processo em que um indivíduo busca conhecimento para lidar com o dinheiro de forma mais 
                consciente e inteligente. A ideia é que o aprendizado seja convertido em ações e em um comportamento prático. ... A partir dela, a pessoa tem melhores 
                condições de saber o que fazer com seu dinheiro.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em breve</small>
            </div>
            </a>
          </div>
        </div>
        <div class="col card-meio">
          <div class="card h-100 cursoss">
            <a href="/aula/5">
            <img src="img/ILLUSTRATOR.jpg" class="card-img-top img-curso" alt="Imagem do curso de Programação">
            <div class="card-body">
              <h5 class="card-title">Curso de Adobe Illustration</h5>
              <h6 class="card-title">Valor R$0.00</h6>
              <p class="card-text text-primary"> &rarr; Este é um curso para aprender a usar o Adobe Illustrator do zero! Você aprenderá das ferramentas mais básicas às 
                mais avançadas do programa. Você realizará diferentes exercícios criativos para desenvolver seu olhar de designer e aprender a integrar suas ilustrações em
                 seus projetos de design gráfico.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em breve</small>
            </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cursoss">
            <a href="/aula/6">
            <img src="img/elétrica.jpg" class="card-img-top img-curso" alt="Imagem do curso de Photoshop">
            <div class="card-body">
              <h5 class="card-title">Curso de Comandos elétricos</h5>
              <h6 class="card-title">Valor R$0.00</h6>
              <p class="card-text text-primary"> &rarr; Comandos elétricos foi o princípio da automação, devido as suas lógicas de comandos e acionamentos, sendo que a sua 
                principal função é realizar o acionamento de máquinas elétricas e equipamentos elétricos, como os motores trifásicos por exemplo, que são comuns de serem 
                encontrados dentro das indústrias.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Em breve</small>
            </div>
            </a>
          </div>
        </div>
      </div> -->
      @if(count($cursos) ==0 && $search)
        <p>Não foi possivel encontrar nenhum curso com {{$search}}!  <a href="\cursos">Ver todos</a></p>
      @elseif(count($cursos) == 0)
        <p>Não há cursos disponíveis</p>
      @endif
    <!-- FIM DOS CURSOS -->
    @endsection
