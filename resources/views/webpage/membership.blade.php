@extends('layout.webpagehf')

@section('content')
<div class="content">
    <div class="account-in">
        <div class="col-md-12 account-top">
        <h2>Vuélvete SOCIO {{ $company->name }}!</h2>
        <h4>Una vez que hiciste tu primer compra de 10 piezas mixtas obtienes:</h4>
        <p class="lead">
            <ul>
                <li>PRECIO EXCLUSIVO</li>
                <li>ACTUALIZACIONES </li>
                <li>DESCUENTOS </li>
                <li>PREMIOS ANUALES</li>
            </ul>    
        </p>
        </div>
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