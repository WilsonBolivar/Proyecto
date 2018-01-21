
<!DOCTYPE html>
<html>
<head>
@include('head')
	
</head>
<body class="bodys">

<header>
	
	@include('barra_admin')
</header>

<div class="container">
  @include('flash::message')

  @if(count($errors) > 0)

  		<ul>
  		<div class="alert alert-danger">
  			
  				@foreach($errors->all() as $error)
  				<li> {{ $error }} </li>

  				@endforeach

  				</ul>
  		</div>
  	

  @endif
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Registro de Usuario</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form"   action="{{route('usuarios.store') }}"   method="POST"    >{{ csrf_field() }}
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="form-group">
			    						<label>Tipo</label>
			    						<select name="nivel" required value="Tipo de Usuario">
			    							<option>Seleccione</option>
			    							<option>Comun</option>
			    							<option>Admin</option>
			    						</select>
			    					</div>
			    				
		    			
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="example@gmail.com">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_c" id="password_confirmation" class="form-control input-sm" placeholder="Confirmar Contraseña">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="form-group">
			    				
			    				<input type="submit" value="Registrar" class="btn btn-info" >
			    				<input type="submit" value="LOGIN" class="btn btn-info btn ">
			    			</div>
			    			
			    			
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    	@include('footer')


</body>
</html>