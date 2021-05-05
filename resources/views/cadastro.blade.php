@extends('layouts.main')

@section('title', 'Formulário')


@section('content')

    <!-- INÍCIO DO FORMULÁRIO -->
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Cadastre-se</h1>
    
    <div class="mt-5 p-4 formulario container" style="background-image: url(img/icone-mensagem.png) no-repeat;">
        <form method="POST" id="cadastro" action="\user" enctype="multipart/form-data">
            @csrf
            <fieldset id="usuario">
                <legend class="h3">Cadastrar Login</legend><br>

                <p><label for="image">Foto do Perfil</label>
                <input type="file" name="image" id="image" class="form-control-file"></p>

                <p><label for="name">Nome:</label> <input type="text" name="name" id="name" size="20" maxlength="40"
                        placeholder="Nome Completo"></p>
                <p><label for="email">E-mail:</label> <input type="email" name="email" id="email" size="20"
                        maxlength="30" placeholder="ex: maria@gmail.com" /></p>

                <p><label for="password">Senha:</label> <input type="password" name="password" id="password" size="20"
                minlength="6" maxlength="20" placeholder="Entre 6 e 20 caracteres" /></p>


                <fieldset id="sexo">
                    <legend>Sexo:</legend>
                    <input type="radio" class="sexo" name="tSexo" value="$mas" id="cMasc" checked /> <label class="sexo" for="cMasc">Masculino</label>
                    <input type="radio" class="sexo" name="tSexo" value="$fem" id="cFem" /> <label class="sexo" for="cFem">Feminino</label>
                </fieldset>
                
            </fieldset>
            <br/>
            <input class="btncadastro" type="submit" name="tbtn" value="Cadastrar">
        </form>
    </div>
    <!-- FIM DO FORMULÁRIO -->
    @endsection
