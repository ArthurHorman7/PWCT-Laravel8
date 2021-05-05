@extends('layouts.main')

@section('title', 'Início')


@section('content')

@foreach($users as $user)
    <!-- <img style="border-radius: 100%; width: 100px; height: 100px; margin: auto;" src="img/users/{{ $user->image }}" alt="foto de {{ $user->name }}">
    <p>Bem vindo {{ $user->name }} seu e-mail é {{ $user->email }} e a senha é {{ $user->password }}</p><br> -->
@endforeach

    <!-- INÍCIO DO QUEM SOMOS -->
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Quem Somos nós?</h1>

    <section class="container my-5">
        <p>&rarr; Somos uma Consultoria Empresarial dedicada ao mercado de estratégia, gestão da produção e qualidade. Possuímos nosso escritório em João Pessoa/PB, com atuação em todo o estado e em Pernambuco.
            Assessoramos nossos clientes em processos de avaliação de empresas, mapeamento de procedimentos, criação de indicadores de desempenho, monitoramento da produção, elaboração de cursos e eventos. 
            Temos uma área específica para micro e pequenas empresas (PME), independente do faturamento. Trabalhamos com metodologias e processos modernos que poderão ser aplicados à qualquer tipo de empresa.
            Criamos, organizamos, coordenamos eventos dando enfoque às áreas educacional, cultural e coorporativo.  Prestamos consultoria na elaboração de projetos de eventos.
            Estamos felizes de nossos resultados até aqui. Procuramos, cada vez mais, ajudar a viabilizar o seu negócio, trazendo nosso conhecimento e metodologia de trabalho para aumentar a rentabilidade de nossos clientes.
        </p>
    </section>


    <section class="container my-4 text-white bg-primary">
        <div class="row d-flex justify-content-between py-2">
            <div class="col-md-4">
                <h1 class="text-center">MISSÃO</h1>
                <p>
                    &nbsp;Gerar o desenvolvimento de pessoas e empresas tornando-as mais competitivas, compassivas e produtivas. 
                Transformar  o dado em informação, a informação em conhecimento, o conhecimento em resultados financeiros e 
                benefícios para nossos clientes, parceiros e nossa empresa.
                </p>
            </div>
            <div class="col-md-4">
                <h1 class="text-center">VISÃO</h1>
                <p>
                    &nbsp;Ser uma empresa referência em gestão, estratégia e desenvolvimento organizacional, trabalhando constantemente para 
                cooperar com o negócio de nossos clientes.
                </p>
            </div>
            <div class="col-md-4">
                <h1 class="text-center">VALORES</h1>
                <ul class="pl-5 valores">
                    <li>Trabalho em equipe</li>
                    <li>Geração de Valor</li>
                    <li>Espírito Investigador</li>
                    <li>Confidencialidade</li>
                    <li>Respeito, ética e transparência</li>
                </ul>
            </div>
        </div>
    </section>


    <h1 class="text-center py-2 quem bg-primary mt-5 h3">Sócios Fundadores</h1>

    <section class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 socio fotoresp1">
                <img style="border-radius: 100%; max-width: 200px; margin: auto;" src="img/sf02.jpg" alt="foto de Paulo">
            </div>
            <div class="col-lg-9 col-md-8 col">
                <p>&rarr; Paulo  Henrique de Lima Silva<br>

                    &nbsp;Possui graduação em Engenharia de Produção (UCAM), Mestre e Doutor em Engenharia Mecânica pela PUC - Rio. 
                    Tem mais de 20 anos de experiência nas áreas de Engenharia de Produção, com ênfase em Planejamento, Projeto e 
                    Controle de Sistemas de Produção e Qualidade. Na docência atua nas áreas de administração, logística e engenharia. 
                    Lecionou no Sistema S (Senai  e SENAC – RJ) e na Unicarioca (graduação e pós-graduação), atualmente atua na como 
                    docente na FPB e UERJ (Professor convidado no MBA de Gestão de Projetos). 
                    Possui certificações internacionais: ITIL 3, COBIT 4.1, ISO 20.000.
                </p>
            </div>
            <div class="col-lg-3 col-md-4 col socio fotoresp2">
                <img style="border-radius: 100%; max-width: 200px; margin: auto;" src="img/sf02.jpg" alt="foto de Paulo">
            </div>
        </div>
    </section>
    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 socio">
                <img style="border-radius: 100%; max-width: 200px; margin: auto;" src="img/sf01.jpg" alt="Foto de Wanden">
            </div>
            <div class="col-lg-9 col-md-8 col">
                <p>&rarr; Wanden de Lima Silva<br>

                    &nbsp;Formado em Analises de Sistemas pela Universidade Católica de Pernambuco, fez Marketing na ESPM/RJ e Elaboração 
                    e Gestão de Projetos pela IBMEC/RJ. Trabalhou Na Fundação Cultural Monsenhor Chaves na cidade de Teresina/PI 
                    dirigindo o Complexo Cultural Ciarte Matadouro, ficando a frente de Grandes Eventos como o Festival de Bumba meu 
                    Boi de Teresina. Exerceu no Instituto Dom Barreto o cargo de Coordenador de eventos culturais. No Grupo Educacional 
                    CEV Ltda, trabalhou na função de Coordenador de Eventos ficando responsável pelos eventos culturais, educacionais e 
                    corporativos do grupo. Possui diversos projetos Culturais aprovados em editais (Lei Rouanet, Funarte, Banco do 
                    Nordeste - BNB Cultural, SIEC/PI, Lei A. Tito Filho da Prefeitura Municipal de Teresina) acumulando mais de 
                    15 anos de experiência nas áreas de marketing e eventos, elaboração e coordenação de projetos culturais.
                </p>
            </div>
        </div>
    </section>
    <!-- FIM DO QUEM SOMOS -->
@endsection

