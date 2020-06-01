
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horarios SENA  </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
    
    <script type="text/javascript">
		
		function verPass(){
			var x =document.getElementById('password');
			var y =document.getElementById('hide1');
			var z =document.getElementById('hide2');

			if (x.type ==='password') {
				x.type = "text";
				y.style.display="block";
				z.style.display="none";
			}else{
				x.type = "password";
				y.style.display="none";
				z.style.display="block";
			}

		}

	</script>

	<style type="text/css">
	#hide1{
		display: none;
		font-size: 26px;
		

	}
	#hide2{
		font-size: 26px;
		
	}
		
	span{
		width: 50px;
		height: 38px;
		margin-left: 310px;
		margin-top:-52px;
	    
	}

</style>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="Validacion.php" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
               <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required="" />
                	<span class="input-group" onclick="verPass()">
                	<i id="hide1" class="fa fa-eye"></i>
                	<i id="hide2" class="fa fa-eye-slash"></i></span>
               </div> 
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <button class="btn btn-default submit" href="#">Olvidaste tu contraseña?</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres nuevo?
                  <a href="#signup" class="to_register"> Crea una cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i></i> Horarios SENA</h1>
                  <p>©2020</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="GuardarDatos.php" method="post">
              <h1>Crear cuenta</h1>
              <div>
                <input type="text" class="form-control" name="documento" placeholder="Documento" pattern="[0-9]+{10,}" title="Este campo es obligatorio y solo admite valores numericos" required=""/>
              </div>
              <div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" pattern="[A-Za-z]+" title="Este campo es obligatorio y solo admite valores de la A a Z" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" pattern="[A-Za-z]+" title="Este campo es obligatorio y solo admite valores de la A a Z" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Este campo es obligatorio" required="" />
              </div>
              <div>
               <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres">
                	<span class="input-group-text" onclick="verPass()">
                	<i id="hide1" class="fa fa-eye"></i>
                	<i id="hide2" class="fa fa-eye-slash"></i></span>
               </div> 
                <button class="btn btn-default" type="submit">Registrar</button>
              
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya eres miembro?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i></i> Horarios SENA</h1>
                  <p>©2020</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
