<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWCT @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<!--Modal Login-->
    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="modalLoginTitulo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLoginTitulo">Entre na Sua Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <x-jet-authentication-card-logo />
                            </x-slot> 

                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-jet-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </x-jet-authentication-card>
                    </x-guest-layout>

                </div>
            </div>
        </div>
    </div>
<!--Fecha Modal Login-->


<!--Modal Register-->
<div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="modalRegisterTitulo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegisterTitulo">Entre na Sua Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <x-jet-authentication-card-logo />
                            </x-slot>

                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div>
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-jet-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </x-jet-authentication-card>
                    </x-guest-layout>

                </div>
            </div>
        </div>
    </div>
<!--Fecha Modal Register-->




    <!-- INÍCIO DO MENU RESPONSIVO -->
    <nav style="max-width: 100%;" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-1 pl-0 box-shadow">

        <div class="nav-brand logoimg">
            <img src="../img/logo-pw.png" alt="logo pwct">
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto h5">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="\">Ínicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="\cursos">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="\consultoria">Consultoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="\contato">Fale Conosco</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-primary" href="\dashboard">Meus Cursos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                    @csrf
                        <a class="nav-link text-primary" href="/logout"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#" data-toggle="modal" data-target="#ModalLogin">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#" data-toggle="modal" data-target="#ModalRegister">Register</a>
                </li>
                @endguest
            </ul>
        </div>
        </div>

<br>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif  
            </div>
        </div>
    </main>


    </nav>
    <!-- FIM DO MENU RESPONSIVO -->


    <!-- INÍCIO DA LINHA DOS SLIDESS -->
    <section class="container-fluid slidess">
        <div class="row bg-dark text-white">
            <div class="col-lg-7 p-0">
                <div id="carouselCidades" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators mb-5 mt-1">
                        <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCidades" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/banner01.jpg" class="d-block w-100" alt="California">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/banner02.jpg" class="d-block w-100" alt="Paris">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 align-self-center p-4">
                <h1 class="display-4">Deseja se profissionalizar?</h1>
                <p class="lead">Oferecemos diversos tipos de cursos em diferentes áreas. Insira seu e-mail para receber
                    notificações.</p>
                <form action="">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail"
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">
                                Inscreva-se
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- FIM DA LINHA DOS SLIDESS -->



    
    @yield('content')




    <!-- INÍCIO DO FOOTER -->
    <footer class="bg-dark text-white mt-5 footer">
        <section class="container py-4">
            <div class="row">
                <div class="col-md-2 col-6 footerResp">
                    <h3 class="h6">PÁGINAS</h3>
                    <ul class="list-unstyled">
                        <li><a href="\">Início</a></li>
                        <li><a href="\consultoria">consultoria</a></li>
                        <li><a href="\cursos">Cursos</a></li>
                        <li><a href="\contato">Fale Conosco</a></li>
                        <!-- <li><a href="#" data-toggle="modal" data-target="#ModalLogin">Login</a></li> -->
                    </ul>
                </div>
                <div class="col-md-4 footerResp">
                    <h4 class="h6">DADOS DE CONTATO</h4>
                    <ul class="list-unstyled text-secondary">
                        <li>pwconsutoria@pwct.com</li>
                        <li>83 99999-9999</li>
                    </ul>
                </div>
                <div class="col-md-4 col footerResp">
                    <h3 class="h6">LOCALIZAÇÃO</h3>
                    <ul class="list-unstyled localizacao">
                        <li><a href="#"><img src="img/local.png" alt="localização"></a></li>
                    </ul>
                </div>
                <div class="col-md-2 footerResp">
                    <h3 class="h6">REDES SOCIAS</h3>
                    <ul class="list-unstyled ulResp">
                        <li><a class="btn btn-outline-primary btn-sm btn-block mb-2" href="https://www.linkedin.com/in/pw-consultoria-4bb877202/"
                            target="_blank" style="max-width: 140px;">LinkedIn</a></li>
                        <li><a class="btn btn-outline-primary btn-sm btn-block mb-2" href="#"
                            target="_blank" style="max-width: 140px;">Instagram</a></li>
                        <li><a class="btn btn-outline-primary btn-sm btn-block mb-2" href="#"
                            target="_blank" style="max-width: 140px;">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="text-center bg-primary">
            <p class="mb-0 copy">PWCT &copy; 2021. Alguns direitos reservados.</p>
        </div>
    </footer>
    <!-- FIM DO FOOTER -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>