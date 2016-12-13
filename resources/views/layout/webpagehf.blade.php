@extends('layout.main')

@section('header')
<!--Header-->
<div class="header-top">
    <div class="logo">
        <a href="{{ URL::to('/')}}"><img width="260" src="{{ URL::to("img/page/logo.png") }}" alt="Logo Pretord"></a>
    </div>
    <div class="header-top-on">
        <a href="https://www.facebook.com/Calzado-Pretord-447486148713267" target="_blank">
            <img width="70" src="{{ URL::to('img/bluehartfacebook.gif') }}" alt="">
        </a>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <div class="top-nav">
        <ul class="megamenu skyblue">
            <li><a href="{{ URL::to('/') }}">Inicio</a></li>
            <li><a href="{{ URL::to('membership') }}">Afiliación</a></li>
            <li><a href="{{ URL::to('catalog') }}">Catálogos</a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<div class="page">
    <h6><a href="{{ URL::to('/')}}">{{ $company->name }}</a><b>|</b>{{ $company->description }}</span></h6>
</div>
<!--End Header-->
@stop

@section('styles')
{!! Html::style('css/camera.css') !!}
@stop

@section('footer')

@stop
