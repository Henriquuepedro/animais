<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $settings['name_store'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-{{ $settings['ext_logo'] }}" href="{{ $settings['logo'] }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('user/css/style_1.css') }}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
</head>
<body>
<div class="wrap-box"> </div>
<div class="header">
    <div class="wrap">
        <div class="header-top">
            <nav class="navbar navbar-expand-lg navbar-light pt-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="cssmenu collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="{{ Route::currentRouteName() == "user.home" ? 'active' : ''}}">
                            <a href="{{ route('user.home') }}"><span>Início</span></a>
                        </li>
                        <li class="{{ Route::currentRouteName() == "user.account.animals.new" ? 'active' : ''}}">
                            <a href="{{ route('user.account.animals.new') }}"><span>Anunciar</span></a>
                        </li>
                        <li class="{{ Route::currentRouteName() == "user.animals.list" ? 'active' : ''}}">
                            <a href="{{ route('user.animals.list') }}"><span>Localizar</span></a>
                        </li>
                        <li class="{{ Route::currentRouteName() == "user.about" ? 'active' : ''}}">
                            <a href="{{ route('user.about') }}"><span>Sobre</span></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto menu-small">
                        @if(auth()->guard('client')->user())
                            <li><a href="{{ route('user.account') }}"><span>Minha Conta</span></a></li><li><a href="{{ route('user.logout') }}"><span>Sair</span></a></li>
                        @else
                            <li><a href="{{ route('user.login') }}#register" class="mr-2" id="register-account"><span>Criar Conta</span></a></li><li><a href="{{ route('user.login') }}"><span>Entrar</span></a></li>
                        @endif
                    </ul>
                </div>
            </nav>
            <div class="logo">
                <h1><a href="#">LocalizaPet</a></h1>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

@yield('body')

<div class="footer col-md-12">
    <div class="wrap">
        <div class="footer-top">
            <div class="col_1_of_4 span_1_of_4">
                <h3>INFORMAÇÕES</h3>
                <ul class="first">
                    <li><a href="{{ route('user.policy.terms') }}">Termos e condições</a></li>
                    <li><a href="{{ route('user.policy.policy') }}">Política de Privacidade</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>CATEGORIAS</h3>
                <ul class="first">
                    <li><a href="{{ route('user.account.animals.new') }}">Anunciar</a></li>
                    <li><a href="{{ route('user.animals.list') }}">Localizar</a></li>
                    <li><a href="{{ route('user.about') }}">Sobre</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>MINHA CONTA</h3>
                <ul class="first">
                    <li><a href="{{ route('user.account') }}">Conta</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
                <h3>CONTATO</h3>
                <ul class="follow_icon">
                    <li><a href="{{ route('user.contact') }}"><img src="{{ asset('user/images/g.png') }}" alt=""></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="copy">
            <p>Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('user/js/main.js') }}"></script>
@yield('js')
</body>
</html>
