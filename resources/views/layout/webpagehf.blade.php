@extends('layout.main')

@section('header')
<!--Header-->
<div class="header-top">
    <div class="logo">
        <a href="index.html"><img src="{{ URL::to("images/logo2.png") }}" alt="Logo Pretord"></a>
    </div>
    <div class="header-top-on">
        <ul class="social-in">
            <li><a href="https://www.facebook.com/Calzado-Pretord-447486148713267" target="_blank"><i class="ic1"> </i></a></li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-bottom">
    <div class="top-nav">
        <ul class="megamenu skyblue">
            <li class="active"><a href="index.html">Afiliación</a></li>
            <li><a href="#">Catálogos</a></li>
        </ul>
    </div>
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
