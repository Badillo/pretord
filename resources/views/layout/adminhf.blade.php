@extends('layout.main')

@section('header')
<!--Header-->
<div class="header-top">
    <div class="logo">
        <img width="260" src="{{ URL::to("img/page/logo.png") }}" alt="Logo Pretord">
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <ul class="megamenu skyblue">
        <li class="active"><a href="{{ URL::to('admin/index') }}">Empresa</a></li>
        <li><a href="{{ URL::to('admin/products/index') }}">Productos</a></li>
        <li><a href="{{ URL::to('admin/categories/index') }}">Categorias</a></li>
        <li><a href="{{ URL::to('admin/collections/index') }}">Colecciones</a></li>
        <li><a href="{{ URL::to('admin/sliders/index') }}">Visor de imagenes</a></li>
        <!--<li><a href="{{ URL::to('admin/customers/index') }}">Clientes</a></li>-->
        <!--<li><a href="{{ URL::to('admin/types/index') }}">Tipos</a></li>-->
        <!--<li><a href="{{ URL::to('admin/users/index') }}">Usuarios</a></li>-->
        <li><a href="{{ URL::to('auth/logout') }}">Cerrar sesión</a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="page">
    <h6><a href="#">{{ $company->name }}</a><b>|</b>{{ $company->description }}</span></h6>
</div>
<!--End Header-->
@stop

@section('footer')

@stop

@section('styles')
{!! Html::style('css/megamenu.css') !!}
@stop

@section('scripts')
    
@stop
