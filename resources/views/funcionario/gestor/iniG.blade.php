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
        <h5><a href="gestor">Dashboard</h5>
    </div>
    <div class="therichpost-bar-block">
        <a href="aceites" class="therichpost-bar-item therichpost-button therichpost-padding"><i
                class="fa fa-users fa-fw"></i>Pedidos Aceites</a>
        <a href="negados" class="therichpost-bar-item therichpost-button therichpost-padding"><i
                class="fa fa-users fa-fw"></i>Pedidos Negados</a>
        <a href="#" class="therichpost-bar-item therichpost-button therichpost-padding">
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
                <div class="therichpost-left"><i class="fa fa-users therichpost-xxxlarge"></i></div>
                <div class="therichpost-right">
                    <h3>52</h3>
                </div>
                <div class="therichpost-clear"></div>
                <h4><a href="aceites">Pedidos Aceites</a>
                </h4>
            </div>
        </div>
        <div class="therichpost-quarter">
            <div class="therichpost-container therichpost-blue therichpost-padding-16">
                <div class="therichpost-left"><i class="fa fa-users therichpost-xxxlarge"></i></div>
                <div class="therichpost-right">
                    <h3>99</h3>
                </div>
                <div class="therichpost-clear"></div>
                <h4><a href="negados">Pedidos Negados</a>
                </h4>
            </div>
        </div>
        <div class="therichpost-panel">
            <div class="therichpost-row-padding" style="margin:0 -16px">
                <div class="therichpost-twothird">
                    <h5>Pedidos</h5>
                    <table class="therichpost-table therichpost-striped therichpost-white">
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Leonardo Teca</td>
                            <td><i>922245563</i></td>
                            <td><i>leoteca@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Ana Silva</td>
                            <td><i>923456789</i></td>
                            <td><i>silvana@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Carlos Mendes</td>
                            <td><i>924567890</i></td>
                            <td><i>carlos@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Beatriz Costa</td>
                            <td><i>925678901</i></td>
                            <td><i>beacosta@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Diogo Ferreira</td>
                            <td><i>926789012</i></td>
                            <td><i>dioferr@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
                            <td>Mariana Santos</td>
                            <td><i>927890123</i></td>
                            <td><i>santosana@gmail.com</i></td>
                            <td class="button-container">
                                <button class="therichpost-button therichpost-blue">Validar</button>
                                <button class="therichpost-button therichpost-red">Rejeitar</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        @endsection