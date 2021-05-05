@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<!-- INÍCIO DO FORMULÁRIO -->
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Fale Conosco</h1>

    <div class="mt-5 p-4 formulario">
        <form method="POST" id="fContato" action="mailto:arthur.yeshua@hotmail.com" oninput="calc_total();">
            <fieldset id="usuario">
                <div class="form-group">
                    <legend class="h3">Nos envie uma mensagem</legend><br>
                    <p><label for="cNome">Nome:</label><br>
                    <input type="text" class="form-control" name="tNome" id="cNome" size="20" maxlength="40"
                            placeholder="Nome Completo"></p>
                </div>

                <div class="form-group">
                    <p><label for="cMail">E-mail:</label><br>
                    <input type="email" class="form-control" name="tMail" id="cMail" size="20" maxlength="30" placeholder="ex: maria@gmail.com" /></p>
                </div>    

                <div class="form-group">
                    <p><label for="cNasc">Data de Nascimento:</label><br>
                    <input type="date" class="form-control" name="tNasc" id="cNasc"/></p>
                </div>    

                <div class="form-group">
                    <p><label for="tel">Celular/Whatssapp:</label><br>
                    <input type="tel" class="form-control" id="tel" name="tel" maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}" required>
                    </p>
                </div>

                <div class="form-group">
                    <p><label for="cMsg">Mensagem:</label><br>
                        <textarea class="form-control" name="tMsg" id="cMsg"
                        placeholder="Deixe aqui a sua Mensagem"></textarea>
                    </p>
                </div>
            </fieldset>
        </form>
    </div>
<!-- FIM DO FORMULÁRIO -->

<script>
    const tel = document.getElementById('tel') // Seletor do campo de telefone

tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
tel.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

const mascaraTelefone = (valor) => {
    valor = valor.replace(/\D/g, "")
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
    valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
    tel.value = valor // Insere o(s) valor(es) no campo
}
</script>


@endsection