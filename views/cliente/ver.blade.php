@extends('layouts.home')
@section('estilo')
<header class="a">
    <a href="cliente">
        <h1><img src="img/logo.png" class="logo" width="80" height="80">Imobiliária Imotec</h1>
    </a>
    <p>Bem-vindo à nossa imobiliária</p>
    <nav>
        <ul>
            <!-- Botões de login e cadastro -->
            <li><a href="reservas">Listar Resevas</a></li>
            <li><a href="visita">Listar Visitas</a></li>
            <li><a href="login">Login</a></li>
            <li><a href="alugadosC">Imóveis Alugados</a></li>
            <li><a href="comprados">Imóveis Comprados</a></li>
        </ul>
    </nav>
</header>
<div class="b">
    <img src="img/imotec.jpg" alt="Descrição da imagem" width="1263" height="500">
</div>
<div class="c">
    <h2 class="text-center"> Propriedades</h2>
    <div class="property-list">
        <div class="property">
            <img src="img/casa1.jpg" alt="Propriedade 1">
            <div class="details">
                <h2>Propriedade 1</h2>
                <p>5.800.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list">+ Alugar</a>
                </ul>
            </div>
        </div>
        <div class="property">
            <img src="img/casa2.jpg" alt="Propriedade 2">
            <div class="details">
                <h2>Propriedade 2</h2>
                <p>10.000.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list">+ Alugar</a>
                </ul>
            </div>
        </div>
        <div class="property">
            <img src="img/casa3.jpg" alt="Propriedade 3">
            <div class="details">
                <h2>Propriedade 3</h2>
                <p>4.600.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list">+ Alugar</a>
                </ul>
            </div>
        </div>
        <!-- Três propriedades adicionais -->
        <div class="property">
            <img src="img/casa3.jpg" alt="Propriedade 4">
            <div class="details">
                <h2>Propriedade 4</h2>
                <p>6.200.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list">+ Alugar</a>
                </ul>
            </div>
        </div>
        <div class="property">
            <img src="img/casa2.jpg" alt="Propriedade 5">
            <div class="details">
                <h2>Propriedade 5</h2>
                <p>8.500.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list">+ Alugar</a>
                </ul>
            </div>
        </div>
        <div class="property">
            <img src="img/casa1.jpg" alt="Propriedade 6">
            <div class="details">
                <h2>Propriedade 6</h2>
                <p>3.900.000 Kz</p>
                <ul>
                    <a href="info" class="botao-laranja">Ver Mais</a>
                    <br>
                    <a href="info" class="link-list a">+ Comprar</a>
                    <br>
                    <a href="info" class="link-list a">+ Reservar</a>
                    <br>
                    <a href="info" class="link-list a">+ Agendar Visita</a>
                    <br>
                    <a href="info" class="link-list a">+ Alugar</a>
                </ul>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection

</html>