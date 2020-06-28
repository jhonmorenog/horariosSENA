
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php
    require_once './general/header.php';
    ?>
    
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
              <form action="util/Validacion.php" method="post">
              <h1>Inicio de sesión</h1>
              <div>
                  <input type="text" class="form-control" name="email" placeholder="Email" required=""/>
              </div>
              <div>
               <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required=""/>
                	<span class="input-group" onclick="verPass()">
                	<i id="hide1" class="fa fa-eye"></i>
                	<i id="hide2" class="fa fa-eye-slash"></i></span>
               </div> 
              <div>
                  <button style="color:#73879C" class="btn btn-default submit" type="submit">Ingresar</button>
<!--                  <button type="button" style="color:#73879C" class="btn btn-default " onclick="window.open('locas.html','_self')">¿Olvidaste tu contraseña?</button>-->
              </div>
               </form>
              <form action="aprendiz/horarioAprendiz.php" method="post">
              <label>¿Eres Aprendiz? Consulta aquí</label>
              <input type="text" class="form-control" id="ficha_numero" name="ficha_numero" placeholder="Ficha" required=""/>
              <button style="color:#73879C" class="btn btn-default submit" type="submit">Consultar</button>
              </form>
              
              <div class="clearfix"></div>

              <div class="separator">
       

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i></i> SENTIME</h1>
                  <p>©2020</p>
                </div>
              </div>
            
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
