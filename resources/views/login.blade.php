@extends('layout.main')

@section('content')
<div class="content">
	<div class="account-in">
		<h2>Inicio de sesión</h2>
		<div class="col-md-6 account-top">
			<form>
				<div> 	
					<span>Usuario</span>
					<input type="text"> 
				</div>
				<div> 
					<span  class="pass">Contraseña</span>
					<input type="password">
				</div>				
					<input type="submit" value="Iniciar Sesión"> 
			</form>
		</div>
	</div>	
</div>
@stop