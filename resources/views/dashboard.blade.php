
@extends('layouts.main')

@section('title', 'Meus Cursos')

@section('content')


    
@if(count($cursos) > 0)
<!-- <h1 class="text-center py-2 my-5 h3 quem bg-primary">Meus Cursos</h1> -->
    <h1 class="text-center py-2 my-5 h3 quem bg-primary">Editar Cursos</h1>

<div class="col-md-10  offset-md-1 dashboard-cursos-container">
    <a href="create" class="btn btn-outline-primary criar-curso rounded-circle mb-3"><img src="/img/criar2.png" alt="icone criar curso" data-toggle="tooltip" data-placement="top" title="Criar curso"></a>
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
                <!-- <th scope="col"><a href="create" class="btn btn-info criar-curso"><img src="/img/criar1.png" alt="icone criar curso"></a></th> -->
            </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/aula/{{$curso->id}}" class="btn btn-outline-primary p-1">{{$curso->nome}}</a></td>
                    <td>{{count($curso->users)}} Participantes</td>
                    <td>
                        <a href="edit/{{$curso->id}}" class="btn btn-info edit-btn" data-toggle="tooltip" data-placement="top" title="Editar curso">Editar</a>
                        <form class="ação-crud" action="/aula/{{$curso->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn" data-toggle="tooltip" data-placement="top" title="Deletar curso">Deletar</button>
                        </form>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif


<h1 class="text-center py-2 my-5 h3 quem bg-primary">Meus Cursos</h1>

<div class="col-md-10  offset-md-1 dashboard-cursos-container">
@if(count($cursosAsParticipant) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                
                    <th scope="col">Ações</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($cursosAsParticipant as $curso)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/aula/{{$curso->id}}" class="btn btn-outline-primary p-1">{{$curso->nome}}</a></td>
                    <td>{{count($curso->users)}} Participantes</td>
                    <td>
                        <form action="leave/{{$curso->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger delete-btn" data-toggle="tooltip" data-placement="top" title="Deletar curso">
                                Sair do Curso
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem nenhum curso disponível. <a href="/cursos" class="btn btn-outline-primary">Veja todos os cursos</a></p>
    @endif
</div>


@endsection
