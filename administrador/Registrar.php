<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

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
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="GuardarDatos.php" method="post">
              <h1>Formulario de registro</h1>
              <div>
                <input type="text" class="form-control" name="documento" placeholder="Documento" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="" />
              </div>
              <div>
              <label>Rol</label> 
                <select name="rol" class="form-control" class="form-control" required="">
                    <option value="0" >Seleccionar</option>
                    <?php
                    require("conexion/Conexion.php");
                    $query=$mysqli->query("SELECT * FROM rol");
                    while($valores=mysqli_fetch_array($query)){
                        echo '<option value="'.$valores[id_rol].'">'.$valores[rol].'</option>';
                        }
                    ?>
                </select>
            </div>
              <div>
                <button class="btn btn-default submit" type="submit">Registrar</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
