@extends('layout.main')

@section('header')
<!--Header-->
<div class="header-top">
    <div class="logo">
        <img src="{{ URL::to("images/logo2.png") }}" alt="Logo Pretord">
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <ul class="megamenu skyblue">
        <li class="active"><a href="{{ URL::to('admin/index') }}">Empresa</a></li>
        <li><a href="{{ URL::to('admin/products/index') }}">Productos</a></li>
        <li><a href="{{ URL::to('admin/categories/index') }}">Categorias</a></li>
        <li><a href="{{ URL::to('admin/collections/index') }}">Colecciones</a></li>
        <li><a href="{{ URL::to('admin/customers/index') }}">Clientes</a></li>
        <!--<li><a href="{{ URL::to('admin/types/index') }}">Tipos</a></li>-->
        <li><a href="{{ URL::to('admin/users/index') }}">Usuarios</a></li>
        <li><a href="{{ URL::to('auth/logout') }}">Cerrar sesión</a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="page">
    <h6><a href="#">Pretord Fashion</a><b>|</b>MEXICO HACE MODA Únete a nuestro equipo de ventas EN LINEA, y se testigo de las sonrisas que ofrecen nuestros productos en todos territorios...</span></h6>
</div>
<!--End Header-->
@stop

@section('footer')
<!--Footer-->
<div class="footer">
    <p class="footer-class">© 2015 Mihstore All Rights Reserved | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    <a href="#home" class="scroll to-Top">  GO TO TOP!</a>
    <div class="clearfix"> </div>
</div>
<!--End Footer-->
@stop

@section('styles')
{!! Html::style('css/megamenu.css') !!}
@stop

@section('scripts')
    
@stop
