<!DOCTYPE html>
<html>
<head>
	@include('head')
</head>
<body>


<!--Pulling Awesome Font -->
<style > background:img/fondocaracas.jpg;</style>


<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form">
            <fieldset>
                <h2>Bienvenidos</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
                </div>
                <span class="button-checkbox">
                    <button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                    <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                </span>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar sesion">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="{{route('usuarios.create') }}" class="btn btn-lg btn-primary btn-block">Registrar</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

    @include('footer')
</div>
</body>
</html>