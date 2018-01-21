


<!DOCTYPE html>
<html>
  <head>
  @include('head')
  </head>
  <body class="body">
  <header>
      @include('barra_admin')
      
    
  </header>
      <hr>
      <div class="container">
      @if(count($errors) > 0)

      <ul>
      <div class="alert alert-danger">
        
          @foreach($errors->all() as $error)
          <li> {{ $error }} </li>

          @endforeach

          </ul>
      </div>

  @endif
      <section>
      <div class="jumbotron">
       @include('flash::message')

      <form action="{{route('registro.store') }}" " method="POST" > {{ csrf_field() }}
        <tr>
          <h4 class="text-uppercase text-center">Representante</h4>
          <td>
          <div class="form-group">
            
            
             <input type="number" name="cedula" placeholder="Cedula" size="20" maxlength="10" required title="Ingrese solo Numeros" maxlength="9">

            

             <input type="text" name="nombre1"  placeholder="Primer Nombre" size="20"    maxlength="30" required  title="Ingrese solo Letras">

              <input type="text" name="nombre2"  placeholder="Segundo Nombre" size="20"   maxlength="30" required  title="Ingrese solo letras">

              <input type="text" name="apellido1"  placeholder="Primer Apellido" size="20"  maxlength="30" required  title="Ingrese solo Letras">

              <input type="text" name="apellido2"  placeholder="Segundo Apellido" size="20" maxlength="30" required  title="Ingrese solo Letras">

              
          </div>

          <div class="form-group">

            <input type="text" name="profesion"  size="20" maxlength="20" title="Ingrese cual es su Profesion de empleo" placeholder="Profesion">

            <input type="text" name="cargo"  size="20" maxlength="20" title="Ingrese su cargo de trabajo" placeholder="Cargo que desempeña">

            <input type="tel" name="telefono_1"  size="20" maxlength="15" title="Ingrese su telefono" placeholder="Telefono de trabajo" pattern="[0-9]{11}">

            <input type="tel" name="telefono_2" size="20" maxlength="15" title="Ingrese su telefono de trabajo" placeholder="Telefono celular" pattern="[0-9]{11}" >

             <input type="email" name="correo"  size="20" maxlength="60" title="Ingrese su correo" placeholder="example@gmail.com" required>

            


          </div>

          <div class="form-group">
            
              <input type="text" name="nro_cuenta"  size="28" maxlength="20" title="Ingrese solo Numeros XXXX-XXXX-XX-XXXXXXXXXX" placeholder="Indrese su ceunta de Venezuela" pattern="[0-9]{20}" >

             <input type="text" name="tipo_cuenta" size="20" maxlength="30" title="Ingrese solo numeros" placeholder="Ingrese el tipo de Cuenta" > 

              <label>Fecha
              <input type="date" name="fecha_n" placeholder="Año de nacimiento" title="Ingrese su Año de Nacimineto">

              <label>Genero:
              <select name="genero" required >
              <option>M</option>
              <option>F</option>
            </select>
              <label>Nacionalidad:
             <select name="nacionalidad" required value="Nacionalidad">
              <option>seleccione</option>
              <option>V</option>
              <option>E</option>
            </select>
 
          </div>


         <h4 class="text-uppercase text-center" >Becado</h4>
           <td>
             <div class="form-group">

             <input type="number" name="cedulab" placeholder="Cedula" size="20" maxlength="10" required title="Ingrese solo Numeros" maxlength="9">

             <input type="text" name="nombre1b"  placeholder="Primer Nombre" size="20"    maxlength="30" required  title="Ingrese solo Letras">

              <input type="text" name="nombre2b"  placeholder="Segundo Nombre" size="20"   maxlength="30" required  title="Ingrese solo letras">

              <input type="text" name="apellido1b"  placeholder="Primer Apellido" size="20"  maxlength="30" required  title="Ingrese solo Letras">

              <input type="text" name="apellido2b"  placeholder="Segundo Apellido" size="20" maxlength="30" required  title="Ingrese solo Letras">

              
          </div>

          <div class="form-group">
            <input type="text" name="facebook" id="face" size="20" maxlength="20" title="Ingrese Su faccebook" placeholder="Ingresar su Fecebook">

            <input type="text" name="instagram" id="ins" size="20" maxlength="20" title="Ingrese Su instagram" placeholder="Ingresar su instagram">

            <input type="text" name="twitter" id="twi" size="20" maxlength="20" title="Ingrese Su twitter" placeholder="Ingresar su twitter">

            <label> Discapacidad:
            <select name="discapacidad" id="dis">
              <option>Seleccione</option>
              <option>NO</option>
              <option>SI</option>
             

              </select>

              <label> Tipo:
            <select name="tipo_discapacidad" id="dis">
              <option>Motora</option>
              <option>Auditiva</option>
              <option>Fisica</option>
              <option>Ninguna</option>

              </select>


          </div>

          <div class="form-group">
               <label> Becas:
            <select name="posee_beca" id="beca">
              <option>NO</option>
              <option>SI</option>
              </select>


              <label>Tipo:
            <select name="tipo_beca" id="be">
              <option>Cultural</option>
              <option>Deportiva</option>
              <option>Socio_Economica</option>
              <option>Estudiante</option>
             </select>    
             </label> 
              <label>Fecha</label>
              <input type="date" name="fecha" placeholder="Año de nacimiento" title="Ingrese su Año de Nacimineto">

             <label>Municipio:</label>
             <select name="municipio" required >
              <option>Municipio</option> 
              
            </select>
              <label>Estado:</label>
             <select name="estado" required value="Estado">
              <option>Guarico</option> 
              <option>Apure</option>
              <option>Barinas</option>
               <option>Monagas</option> 
              <option>Tachira</option>
              <option>Zulia</option>
               <option>Trujillo</option> 
              <option>Sucre</option>
              <option>Amazonas</option>
               <option>Anzuategui</option> 
              <option>Aragua</option>
              <option>Miranda</option>
               <option>Portuguesa</option> 
              <option>Bolivar</option>
              <option>Distrito Capital</option>
            </select>




           

          </div>  

          <div class="form-group">


          <input type="text" name="parroquia"  size="20" maxlength="60" title="Ingrese Su parroquia" placeholder="parroquia">


           <input type="text" name="ciudad"  size="20" maxlength="60" title="Ingrese Su Ciudad" placeholder="Ciudad">

           <label>Genero:</label>
            <select name="generob" required >
              <option>M</option>
              <option>F</option>
            </select>

            
          <input type="text" name="nombre_institucion"  size="20" maxlength="60" title="Institucion de estudio" placeholder="Institucion de estudio">

          <input type="text" name="direccion" id="viv" size="30" maxlength="300" required title="Ingrese vivienda" placeholder="Direccion de vivienda"><br><br>

          </div>

        
            <input type="submit"  class="btn btn-success" name="registar" value="Registar">
          </td>

          </div>
    
            
       
      </form>
      </div>
      <div class="modal fade bs-example-modal-sm" name='reusu' id="reusu" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="container">
              <form method="POST" action="../controlador/guardar2.php">
                <tr>
                  <td>
                  <tbody><h4 class="text-uppercase">Registrar Usuario</h4></tbody>
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="input-group">
                              <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                              <input type="text" required class="form-control" name="usu" id="usu" placeholder="Usuario" aria-describedby="basic-addon1">
                          </div><br><!-- /input-group -->
                          <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
                              <input type="password" required id="clave" class="form-control" placeholder="Contraseña" name="clave" aria-describedby="basic-addon1">
                          </div><br><br>
                          <div class="input-group">
                            <select class="form-control input-sm" name="estatus" id="estatus">
                              <option>Administrador</option>
                              <option>Privilejiado</option>
                              <option>Comun</option>
                            </select>
                          </div>
                          <br>
                          <input type="submit" id="myButton" data-loading-text="Loading..." autocomplete="off" class="btn btn-success btn-lg btn-block" name="registar2" value="Enviar">
                        </div><!-- /.col-lg-3 -->
                      </div>
                  </td>
                </tr>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    <hr>
    @include('footer')
  </body>
</html>