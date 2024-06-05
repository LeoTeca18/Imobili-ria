@extends('layouts.home')
@section('estilo')

<body>

    <header class="a">
        <a href="login">
            <h1>Imobiliária Imotec</h1>
        </a>
        <p>Bem-vindo à nossa imobiliária</p>
        <nav>
            <ul>
                <!-- Botões de login e cadastro -->
                <li><a href="login">Listar Resevas</a></li>
                <li><a href="login">Listar Visitas</a></li>
                <li><a href="login">Login</a></li>
                <li><a href="login">Imóveis Alugados</a></li>
                <li><a href="login">Imóveis Comprados</a></li>
            </ul>
        </nav>
    </header>
    <div class="b">
        <img src="img/imotec.jpg" alt="Descrição da imagem" width="1263" height="500">
    </div>
    <!-- Barra de pesquisa -->
    <div class="search-bar">
        <input type="text" placeholder="Pesquisar propriedades...">
        <button type="button">Pesquisar</button>
    </div>
    <div class="container">
        <h2>Propriedades em Destaque</h2>
        <div class="property-list">
            <div class="property">
                <img src="img/casa1.jpg" alt="Propriedade 1">
                <div class="details">
                    <h2>Propriedade 1</h2>
                    <p>5.800.000 Kz</p>
                    <ul>
                        <a href="login" class="botao-laranja">Ver Mais</a>
                        <br>
                        <a href="login" class="link-list">+ Comprar</a>
                        <br>
                        <a href="login" class="link-list">+ Reservar</a>
                        <br>
                        <a href="login" class="link-list">+ Agendar Visita</a>
                        <br>
                        <a href="login" class="link-list">+ Alugar</a>
                    </ul>
                </div>
            </div>
            <div class="property">
                <img src="img/casa2.jpg" alt="Propriedade 2">
                <div class="details">
                    <h2>Propriedade 2</h2>
                    <p>10.000.000 Kz</p>
                    <ul>
                        <a href="login" class="botao-laranja">Ver Mais</a>
                        <br>
                        <a href="login" class="link-list">+ Comprar</a>
                        <br>
                        <a href="login" class="link-list">+ Reservar</a>
                        <br>
                        <a href="login" class="link-list">+ Agendar Visita</a>
                        <br>
                        <a href="login" class="link-list">+ Alugar</a>
                    </ul>
                </div>
            </div>
            <div class="property">
                <img src="img/casa3.jpg" alt="Propriedade 3">
                <div class="details">
                    <h2>Propriedade 3</h2>
                    <p>4.600.000 Kz</p>
                    <ul>
                        <a href="login" class="botao-laranja">Ver Mais</a>
                        <br>
                        <a href="login" class="link-list">+ Comprar</a>
                        <br>
                        <a href="login" class="link-list">+ Reservar</a>
                        <br>
                        <a href="login" class="link-list">+ Agendar Visita</a>
                        <br>
                        <a href="login" class="link-list">+ Alugar</a>
                    </ul>
                </div>
            </div>
            <!-- Adicione mais propriedades conforme necessário -->
        </div>
        <br>
        <div class="main-button text-center">
            <a href="login" class="botao-laranja">Ver Propriedades</a>
        </div>
    </div>
    @endsection