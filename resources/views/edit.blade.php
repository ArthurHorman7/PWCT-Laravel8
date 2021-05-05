@extends('layouts.main')

@section('title', 'Editar cursos')

@section('content')

<h1 class="text-center py-2 my-5 h3 quem bg-primary">Editando {{$cursos->nome}}</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/update/{{$cursos->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do curso</label>
            <input type="file" name="image" id="image" class="form-control-file"><br>
            <img src="/img/{{$cursos->image}}" alt="{{$cursos->nome}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="nome">Curso</label>
            <input type="text" name="nome" id="nome" class="form-control" placehold="Nome do Curso" value="{{$cursos->nome}}">
        </div>
        <div class="form-group">
            <label for="sobre">Sobre o Curso</label>
            <input type="text" name="sobre" id="sobre" class="form-control" placehold="Sobre o Curso" value="{{$cursos->sobre}}">
        </div>
        <div class="form-group">
            <label for="dataCurso">Data do Curso</label>
            <input type="text" name="dataCurso" id="dataCurso" class="form-control" placehold="xx/xx/xxxx" value="{{$cursos->dataCurso}}">
        </div>
        <div class="form-group">
            <label for="tempoCurso">Tempo do Curso</label>
            <input type="text" name="tempoCurso" id="tempoCurso" class="form-control" placehold="xx:xx" value="{{$cursos->tempoCurso}}">
        </div>
        <div class="form-group">
            <label for="apostilas">Número de apostilas</label>
            <input type="number" name="apostilas" id="apostilas" class="form-control" placehold="Nº de apostilas" value="{{$cursos->apostilas}}">
        </div>
        <div class="form-group">
            <label for="status">Status do curso</label>
            <input type="text" name="status" id="status" class="form-control" placehold="" value="{{$cursos->status}}">
        </div>
        <div class="form-group">
            <label for="valor">Valor do curso</label>
            R$<input type="number" name="valor" id="valor" class="form-control" placehold="0,00" value="{{$cursos->valor}}">
        </div>
        <div class="form-group">
            <label for="link">Link do curso</label>
            R$<input type="text" name="link" id="link" class="form-control" placehold="Link do curso" value="{{$cursos->link}}">
        </div>
        <input type="submit" value="Editar curso" class="btn btn-outline-primary">
    </form>
</div>


@endsection