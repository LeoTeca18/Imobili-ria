@extends('layouts.main')
@section('estilo')

<!-- Top container -->
<div class="therichpost-bar therichpost-top therichpost-black therichpost-large" style="z-index:4">
    <button
        class="therichpost-bar-item therichpost-button therichpost-hide-large therichpost-hover-none therichpost-hover-text-light-grey"
        onclick="therichpost_open()"><i class="fa fa-bars"></i> Menu</button>
    <span class="therichpost-bar-item therichpost-right">Imotec</span>
</div>
<!-- Sidebar/menu -->
<nav class="therichpost-sidebar therichpost-collapse therichpost-white therichpost-animate-left"
    style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="therichpost-container therichpost-row">
        <div class="therichpost-col s4">
            <img src="{{ asset('img/p.jpeg') }}" class="therichpost-circle therichpost-margin-right" style="width:46px">
        </div>
        <div class="therichpost-col s8 therichpost-bar">
            <span>Bem Vindo</span><br>
        </div>
    </div>
    <hr>
    <div class="therichpost-container">
        <h5><a href="proprietario">Dashboard</h5>
    </div>
    <div class="therichpost-bar-block">
        <a href="adicionar" class="therichpost-bar-item therichpost-button therichpost-padding"><i
                class="fa fa-home fa-fw"></i>Adicionar Imóvel</a>
        <a href="vendidosP" class="therichpost-bar-item therichpost-button therichpost-padding"><i
                class="fa fa-home fa-fw"></i>Imóveis Vendidos</a>
        <a href="alugadosP" class="therichpost-bar-item therichpost-button therichpost-padding"><i
                class="fa fa-home fa-fw"></i>Imóveis Alugados</a>
        <a href="login" class="therichpost-bar-item therichpost-button therichpost-padding">
            <i class="fa fa-times fa-fw"></i>
            Logout
        </a><br><br>
    </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="therichpost-overlay therichpost-hide-large therichpost-animate-opacity" onclick="therichpost_close()"
    style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="therichpost-main" style="margin-left:300px;margin-top:43px;">
    <!-- Header -->
    <header class="therichpost-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
    </header>
    <div class="therichpost-row-padding therichpost-margin-bottom">
        <div class="therichpost-quarter">
            <div class="therichpost-container therichpost-red therichpost-padding-16">
                <div class="therichpost-left"><i class="fa fa-home therichpost-xxxlarge"></i></div>
                <div class="therichpost-right">
                    <h3>52</h3>
                </div>
                <div class="therichpost-clear"></div>
                <h4><a href="vendidosP">Imóveis Vendidos</h4>
            </div>
        </div>
        <div class="therichpost-quarter">
            <div class="therichpost-container therichpost-blue therichpost-padding-16">
                <div class="therichpost-left"><i class="fa fa-home therichpost-xxxlarge"></i></div>
                <div class="therichpost-right">
                    <h3>99</h3>
                </div>
                <div class="therichpost-clear"></div>
                <h4><a href="alugadosP">Imóveis Alugados</h4>
            </div>
        </div>
        <div class="order-section">
            <a href="pedido" class="order-button">Fazer Pedido</a>
        </div>
        <div class="therichpost-panel">
            <div class="therichpost-row-padding" style="margin:0 -16px">
                <div class="therichpost-twothird">
                    <h5>Imóveis</h5>
                    <table class="therichpost-table therichpost-striped therichpost-white">
                        <thead>
                            <tr>
                                <th><i class="fa fa-home therichpost-text-blue therichpost-large"></i></th>
                                <th>Tipo</th>
                                <th>Bairro</th>
                                <th>Área</th>
                                <th>Preço</th>
                                <th>Rua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Apartamento</td>
                                <td>Centro</td>
                                <td>120 m²</td>
                                <td>500.000 Kz</td>
                                <td>Av. Paulista</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Casa</td>
                                <td>Vila Mariana</td>
                                <td>200 m²</td>
                                <td>1.200.000 Kz</td>
                                <td>Rua Domingos</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Comercial</td>
                                <td>Jardins</td>
                                <td>300 m²</td>
                                <td>3.000.000 Kz</td>
                                <td>Rua Augusta</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Apartamento</td>
                                <td>Moema</td>
                                <td>100 m²</td>
                                <td>700.000 Kz</td>
                                <td>Alameda Santos</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Casa</td>
                                <td>Pinheiros</td>
                                <td>150 m²</td>
                                <td>900.000 Kz</td>
                                <td>Rua dos Pinheiros</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home therichpost-text-blue therichpost-large"></i></td>
                                <td>Comercial</td>
                                <td>Bela Vista</td>
                                <td>250 m²</td>
                                <td>2.500.000 Kz</td>
                                <td>Rua da Consolação</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        @endsection