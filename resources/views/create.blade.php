@extends('layouts.main')

@section('title', 'Criar cursos')

@section('content')

    <h1 class="text-center py-2 my-5 h3 quem bg-primary">Criando curso novo</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="\curso" id="store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do curso</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <!-- <label for="image">Imagem do curso</label>
            <input type="text" name="image" id="image" class="form-control" placehold="Nome do Curso"> -->
        </div>
        <div class="form-group">
            <label for="nome">Curso</label>
            <input type="text" name="nome" id="nome" class="form-control" placehold="Nome do Curso">
        </div>
        <div class="form-group">
            <!-- <label for="sobre">Sobre o Curso</label>
            <input type="mensage" name="sobre" id="sobre" class="form-control" placehold="Sobre o Curso"> -->
            <label for="sobre">Sobre o Curso</label><br>
            <textarea class="form-control" name="sobre" id="sobre"></textarea>
        </div>
        
        <div class="form-group">
            <label for="dataCurso">Data do Curso</label>
            <input type="text" name="dataCurso" id="dataCurso" class="form-control" placehold="xx/xx/xxxx">
        </div>
        <div class="form-group">
            <label for="tempoCurso">Tempo do Curso</label>
            <input type="text" name="tempoCurso" id="tempoCurso" class="form-control" placehold="xx:xx">
        </div>
        <div class="form-group">
            <label for="apostilas">Número de apostilas</label>
            <input type="number" name="apostilas" id="apostilas" class="form-control" placehold="Nº de apostilas">
        </div>
        <div class="form-group">
            <label for="status">Status do curso</label>
            <input type="text" name="status" id="status" class="form-control" placehold="">
        </div>
        <div class="form-group">
            <label for="valor">Valor do curso</label>
            R$<input type="number" name="valor" id="valor" class="form-control" placehold="0,00">
        </div>
        <div class="form-group">
            <label for="link">Link do curso</label>
            R$<input type="text" name="link" id="link" class="form-control" placehold="Link do curso">
        </div>
        <input type="submit" value="Criar curso" class="btn btn-outline-primary">
    </form>
</div>


@endsection