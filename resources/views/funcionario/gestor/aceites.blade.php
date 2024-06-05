@extends('layouts.main')
@extends('layouts.gestor')
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
        <a href="aceites" class="therichpost-bar-item therichpost-button therichpost-padding therichpost-blue"><i
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
        <h5><b><i class="fa fa-dashboard"></i>Pedidos Aceites</b></h5>
    </header>
    <table class="therichpost-table therichpost-striped therichpost-white">
        <tr>
            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
            <td>Ana Costa</td>
            <td><i>925678331</i></td>
            <td><i>anacosta@gmail.com</i></td>
            <td class="button-container">
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
            <td>Diogo Cão</td>
            <td><i>922789012</i></td>
            <td><i>diogocao@gmail.com</i></td>
            <td class="button-container">
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-user therichpost-text-blue therichpost-large"></i></td>
            <td>Maria Santos</td>
            <td><i>925590123</i></td>
            <td><i>mariasantos@gmail.com</i></td>
            <td class="button-container">
            </td>
        </tr>
    </table>
</div>
</div>
</div>
<hr>
@endsection