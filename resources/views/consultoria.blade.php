@extends('layouts.consul')

@section('title', 'Consultoria')


@section('content')

    <!-- INÍCIO CONSULTORIA -->
    <h1 class="text-center py-2 mt-5 h3 quem bg-primary">Consultoria</h1>
    
    <ul class="consultoria my-5 pl-5 list-group" type="none">
      <li onclick="consultoria1()" class="list-group-item list-group-item-action"><h2 class="my-4 display-5" >&rarr; Gestão da Qualidade</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens1">
            <br> &nbsp;Apesar de ser um tópico bastante debatido na literatura e nas empresas, a Gestão da Qualidade é, ainda, um grande desafio para muitas empresas. Conseguir traduzir as necessidades dos clientes e conformar um produto ou serviço é uma tarefa complexa, demanda conhecimento técnico e uma visão estratégica.
            <br>
            Entretanto, existem muitas ferramentas e metodologias na área da Gestão da Qualidade que são capazes de traduzir essas informações, transformá-las em especificações e controlar à saída ao cliente. Aqui na PW Consultoria, Treinamentos e Eventos, essas ferramentas são apresentadas de maneira clara e objetiva, possibilitando um desenvolvimento autônomo dos nossos clientes, por meio de cursos específicos: As Sete Ferramentas Básicas da Qualidade, MASP e PDCA, Melhoria Contínua e Kaizen e Lean Seis Sigma.
            <br>
            Após a realização do curso/consultoria, nossos clientes serão capazes de desenvolver estudos na área da Gestão da Qualidade, propor soluções baseadas em fatos, liderar equipes na busca das causas raízes dos problemas, identificar oportunidades de melhorias, entre outros.
            
    </p>

      <li onclick="consultoria2()" class="list-group-item list-group-item-action"><h2 class="my-4 display-5">&rarr; Gestão de Eventos</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens2">
            <br> &nbsp; A criação do conceito do evento, o planejamento, o controle dos fornecedores e da estratégia de marketing são pontos específicos da gestão de eventos. Fazer a mensuração dos resultados, buscando, assim, garantir o sucesso do evento e a satisfação dos participantes também fazem parte desse processo.
            <br>
            Seja qual for a área (corporativa, educacional ou cultural), o trabalho da gestão de eventos é desenvolver estratégias para que o evento possa impactar e atender as expectativas criadas nos clientes. É de grande importância ter a frente de um evento uma empresa que possua domínio completo das técnicas necessárias de organização. A PW conta com profissionais com grande experiência para garantir o total sucesso do seu evento.
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria3('consultoria3')"><h2 class="my-4 display-5">&rarr; Indicadores de Desempenho</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens3">
            <br> &nbsp; Indicadores de Desempenho são instrumentos essências para monitorar, controlar e gerenciar processos e/ou atividades dentro de qualquer empresa. Não se pode gerenciar uma atividade sem controlá-la, e para controlar um atividade precisa-se medi-la. Portanto, o primeiro passo é criar maneiras para o monitoramento dessas atividades. 
            <br>
            Os Indicadores de Desempenho são ferramentas simples, de fácil entendimento, mas muito poderosas nas mãos de um gestor que precisa se basear em fatos e dados para uma tomada de decisão rápida e eficaz. Uma vez criados, os Indicadores de Desempenho,  podem ser disseminados por toda a empresa para que todos tomem conhecimento dos seus objetivos, potencializando os efeitos positivos de uma boa gestão.
            <br>
            A PW Consultoria, Treinamentos e Eventos, possui uma equipe de consultores qualificada, experiente e dinâmica para o pronto atendimento das necessidades do seu negócio, nos procure e teremos o maior prazer em atende-lo! 
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria4('consultoria4')"><h2 class="my-4 display-5">&rarr; Análise do Processo Produtivo</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens4">
            <br> &nbsp; Qualquer empresa tem como finalidade produzir “algo”, seja esse “algo” um bem físico e/ou a prestação de um serviço. Nos dois casos aproveitar bem os fatores de produção é fundamental para que a processo produtivo possa estar alinhado com as estratégias de produção.
            <br>
            Entender e traduzir a estratégia, para poder implementá-la e transformar tudo isso em resultado financeiro/humano é o nosso foco. A partir da definição dos processos, de uma análise do arranjo físico com os objetivos de desempenho, pode-se atingir  níveis de produtividade ainda maiores.
            <br>
            Lembre-se, o nosso negócio e transformar o seu negócio!
            Entre em contato para uma avaliação do seu processo produtivo!
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria5('consultoria5')"><h2 class="my-4 display-5">&rarr; Mapeamento de Processos e criação de Fluxogramas</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens5">
            <br> &nbsp; Quer entender como funciona a sua organização por meio da Gestão de Processos?
            <br>
            Processo, por definição, é uma “sequência contínua de fatos ou operações que apresentam certa unidade ou que se reproduzem com certa regularidade; andamento, desenvolvimento, marcha” (Oxford Languages and Google).
            <br>
            Representar os processos por meio de Fluxogramas, pode dar uma nova perspectiva para análise de um sistema produtivo, de como as vendas estão sendo efetuadas ou os seus produtos entregues, por exemplo. Logo, a possibilidade de encontrar gargalos, pontos de decisão, oportunidades de crescimento, etc. podem surgir mediante essa nova perspectiva.
            <br>
            Nossos consultores poderão auxiliar o seu negócio no mapeamento, na elaboração e na validação dos processos de sua empresa. Pense em crescer junto com a PW Consultoria, Treinamentos e Eventos! 
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria6('consultoria6')"><h2 class="my-4 display-5">&rarr; Softwares dedicados</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens6">
            <br> &nbsp; Precisa de um Sistema de Gestão de Estoques mas não sabe como começar?
            Quer fazer uma análise gráfica dos custos, porém não está conseguindo?
            <br>
            Que tal possuir um software exclusivo que possa atender sua necessidade?
            Desenvolvemos, personalizamos, viabilizamos ideias para facilitar a sua gestão, independentemente do tamanho da sua empresa!
            <br>
            Automatize alguns processos, tenha em mãos relatórios detalhados em segundos, monitore o desempenho de sua equipe! As possibilidades são infinitas, nossas soluções também!
            <br>
            Entre em contato, estamos ansiosos para ouvir suas necessidades! O nosso negócio é fazer o seu negócio prosperar!
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria7('consultoria7')"><h2 class="my-4 display-5">&rarr; Montagem de cursos personalizados</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens7">
            <br> &nbsp; Atualmente a internet oferece uma enormidade de plataformas para montagem de cursos, mas a falta de personalização e os custos envolvidos são dois grandes empecilhos. E se  houvesse a possibilidade de utilizar uma plataforma dinâmica, personalizada, voltada para seus clientes? Melhor, se o custo disso tudo fosse algo que se encaixasse perfeitamente no seu orçamento?
            <br>
            A PW Consultoria, Treinamentos e Eventos pode ser seu parceiro nesse desenvolvimento, temos experiência na montagem de cursos, elaboração e suporte de testes/provas/atividades para seus alunos, tudo conforma a sua necessidade!
            <br>
            Entre em contato e descubra novas possibilidades!
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria8('consultoria8')"><h2 class="my-4 display-5">&rarr; Montagem de cursos in loco</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens8">
            <br> &nbsp; A PW Consultoria, Treinamentos e Eventos é uma empresa especializada na montagem de cursos presenciais, oferecemos a solução completa: espaço físico para o curso, material didático (elaborado e enviado pelo tutor/professor contratante), coffee-break, etc.
            <br>
            O nosso cliente apenas se preocupa em conduzir o curso, toda a logística de preparação, bem como todas as demais necessidades serão plenamente atendidas por nossos profissionais e parceiros. Traga seu curso para nossa empresa e alcance novos patamares!
            <br>
            Entre em contato e solicite uma proposta!
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria9('consultoria9')"><h2 class="my-4 display-5">&rarr; Kaizen e 5´s</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens9">
            <br> &nbsp; O mercado está muito competitivo, bem como os consumidores estão mais informados e exigentes. Assim, apenas as empresas que se adequarem a essa nova realidade conseguirão se manter. A filosofia Kaizen que é uma filosofia que advêm sobre a melhoria contínua dos processos de manufatura, engenharia, gestão de negócios ou qualquer processo, em qualquer área, pode ser uma importante ferramenta.
            <br>
            Do mesmo modo, a filosofia 5´s, muito simples, todavia muito poderosa pode rapidamente ser estabelecida e proporcionar ganhos reais no seu negócio. A PW Consultoria, Treinamentos e Eventos pode ser sua parceira na implementação dessas ferramentas oferecendo cursos, palestras, treinamentos específicos para sua empresa.
            <br>
            Busque se modernizar, conte conosco para atender as suas necessidades, entre em contato e solicite sua proposta!
            
    </p>

      <li class="list-group-item list-group-item-action" onclick="consultoria10('consultoria10')"><h2 class="my-4 display-5">&rarr; Elaboração de projetos culturais</h2></li>
    <p class="text-white px-5 consultoria1" id="consultoria-itens10">
            <br> &nbsp; O Setor Cultural no Brasil vem crescendo a cada ano. Uma das grandes fontes de recursos para as produções e artistas são os editais e as leis de fomento. A boa elaboração de um projeto e o ponto chave de uma aprovação. Para isso é necessário experiência na área e um ótimo conhecimento para entender as nuanças de cada processo. 
            <br>
            Saber avaliar os meandros de um edital, direcionar a visão projeto para atender as exigências impostas são de suma importância. Além disso cada lei, cada edital, possui suas características que devem ser identificas e contempladas, isso é que tornará um projeto vencedor. A PW conta com uma equipe preparada para elaborar projetos culturais, com um currículo de aprovações em todas as esferas (Federal, Regional, Estadual e Municipal), estamos a disposição para atender sua demanda, traga seu projeto para a PW.
            
    </p>
    </ul>

    <!-- FIM DOS CURSOS -->
    @endsection

