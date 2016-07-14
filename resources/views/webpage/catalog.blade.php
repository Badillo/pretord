@extends('layout.webpagehf')

@section('content')
<div class="content">
    <div class="account-in">
        <h2>Catálogos</h2>
        <div class="col-md-7 left-account">
            <p class="lead">
                Si quieres ser parte de nuestro equipo de ventas y obtener los catálogos te invitamos a enviar un correo a: pretordfashion@hotmail.com  
                <br><br>
            Agreganos a Whatsapp!
            <ul>
                <li>3311118528</li>
                <li>3322384392</li>
            </ul>
            </p>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 account-top">
            <h3>O dejanos tus datos!</h3>
            <form action="{{ URL::to('register')}}" method="get">
            <div>   
                <span>Nombre</span>
                <input name="name" type="text" required> 
            </div>             
            <div>   
                <span>Correo Electrónico</span>
                <input name="email" type="text" required> 
            </div>
            <div>   
                <span>Telefono</span>
                <input name="telephone" type="text" required> 
            </div>
            <input type="submit" value="Enviar"> 
            </form>
        </div>
    <div class="clearfix"> </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    $(function() {
        $(".megamenu").megamenu();
    });
</script>
@stop