
@extends('layouts.main')

@section('title', 'curso')

@section('content')



    <!-- INÍCIO AULAS -->
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Curso de {{$curso->nome}}</h1>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">Sobre o Curso</h1>
                <p class="imgnutri">{{$curso->sobre}}</p>
                <br>

                <section class="container acesso bg-primary py-3">
                    <div class="row">
                        <div class="col-md">
                            <h1 class="display-4">Apostilas</h1>

                            <!-- APOSTILAS -->
                        
                            
                        @if($num == 1)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 3"><br>Apostila 3</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 4"><br>Apostila 4</li></a>
                            </ul>
                        @elseif($num == 2)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 3"><br>Apostila 3</li></a>
                            </ul>
                        @elseif($num == 3)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 3"><br>Apostila 3</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 4"><br>Apostila 4</li></a>
                            </ul>
                        @elseif($num == 4)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 3"><br>Apostila 3</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 4"><br>Apostila 4</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 5"><br>Apostila 5</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 6"><br>Apostila 6</li></a>
                            </ul>
                        @elseif($num == 5)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 3"><br>Apostila 3</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 4"><br>Apostila 4</li></a>
                            </ul>
                        @elseif($num == 6)
                            <ul class="d-flex" style="flex-wrap: wrap; color: #fff;" type="none">
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 1"><br>Apostila 1</li></a>
                                <a href="#"><li class="m-2" style="color: #fff;"><img src="/img/pdf1.png" alt="apostila 2"><br>Apostila 2</li></a>
                            </ul>
                        @endif
                            <!-- APOSTILAS -->


                        </div>
                        <div class="col-md">
                            <h1 class="display-4">Acesso</h1>
                            <p class="linkaula pl-3">acesse o link da aula apertando o botão abaixo. 
                                Será liberado no dia {{$curso->dataCurso}}. Iremos Entrar em contato 
                                no dia para lembrar a todos nossos alunos.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mx-auto my-2" style="max-width: 200px; border-radius: 10%;">
                            

                            <!-- @if($curso == 'Nutrição' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @elseif($curso == 'Programação' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @elseif($curso == 'Photoshop' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @elseif($curso == 'Educação financeira' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @elseif($curso == 'Adobe Illustration' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @elseif($curso == 'Comandos Elétricos' )
                                <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a>
                            @endif -->

<br>
                            @if(!$hasUserJoined)
                            <!-- <a style="background-color: #4e98b1;" class="p-3 text-center btnAula" href="{{$curso->link}}" target="blank">Acessar a aula</a> -->
                            <form action="/join/{{$curso->id}}" method="POST">
                            @csrf
                                <a style="background-color: #4e98b1;" 
                                href="/join/{{$curso->id}}" 
                                class="p-3 text-center btnAula" id="curso-submit"
                                onclick="curso.preventDefault();
                                this.closest('form').submit();">
                                Comprar Curso</a>
                            </form>
                            @else
                            <p class="already-joined-msg">Você já tem este Curso</p>
                            @endif


                        </div>
                    </div>
                </section>


            </div>
            <div class="col-md-4">
                <div class="card h-100 cursoss card-aula">

                    <img src="/img/{{$curso->image}}" class="card-img-top img-curso" alt="Imagem do curso de {{$curso->nome}}">
                    <div class="card-body">
                      <h5 class="card-title">Informações</h5>
                      <ul class="ml-3" type="none">
                          <li><img src="/img/data-limite.png" alt="icon data">Data do Curso {{$curso->dataCurso}}</li>
                          <li><img src="/img/relogio.png" alt="icon doc">Duração de Curso {{$curso->tempoCurso}}</li>
                          <li><img src="/img/doc.png" alt="icon doc">{{$curso->apostilas}} apostilas</li>
                          <li><img src="/img/youtube.png" alt="icon video">Acesso facil em qualquer dispositivo</li>
                          <li><img src="/img/money.png" alt="icon video">R$ {{$curso->valor}}</li>
                          <li><img src="/img/cerebro.png" alt="icon video">Criador(a) do Curso: {{ $cursosOwner['name'] }}</li>
                      </ul>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">{{$curso->status}}</small>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- FIM AULAS -->
    @endsection
