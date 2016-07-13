@extends('layout.main')

@section('content')
<div class="content">
	<div class="account-in">
		<h2>Inicio de sesión</h2>
		<div class="col-md-6 account-top">
			<form action="{{ URL::to('auth/login') }}" method="post">
				<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
				<div> 	
					<span>Usuario</span>
					<input type="text" name="user"> 
				</div>
				<div> 
					<span  class="pass">Contraseña</span>
					<input type="password" name="password">
				</div>				
				<input type="submit" value="Iniciar Sesión"> 
			</form>
		</div>
	</div>	
</div>
@stop