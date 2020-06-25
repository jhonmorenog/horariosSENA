<?php 
   require_once '../utili/sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
<?php 
   require_once 'head.php';
?>
      <script type="text/javascript">
     function agregaform(datos){
      d=datos.split('||');
      $('#aula option[value='+d[0]+']').attr('selected','selected');
//      $('#rango option[value='+d[1]+']').attr('selected','selected');
      $('#dia').val(d[2]);
      $('#trimestre').val(d[3]);
      $('#anio').val(d[4]); 
      $('#fichanumero_ficha option[value='+d[5]+']').attr('selected','selected'); 
      $('#persona_documento option[value='+d[6]+']').attr('selected','selected'); 
       
      

      }
      </script>
  </head>

  <?php
  
  require_once 'menu.php';

?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CENIGRAF <small>Información para la creación de horarios</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

           
            <div class="row">
    

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bloque</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> 
                  
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once '../utili/Conexion.php';
                            
                            $sql1="SELECT * FROM bloque,aula,persona,ficha where bloque.persona_documento=persona.documento and bloque.aulaid_aula=aula.id_aula and bloque.fichanumero_ficha=ficha.numero_ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Aula</th>    
                              <th>Rango de horas</th> 
                              <th>Día</th>
                              <th>Trimestre</th>
                              <th>Año</th>
                              <th>Ficha</th>
                              <th>Instructor</th>
                              <th>Actualizar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                $datos=$key['id_aula']."||".
                                    $key['rango_horas']."||".
                                    $key['dia']."||".
                                        $key['trimestre']."||".
                                        $key['anio']."||".
                                        $key['numero_ficha']."||".
                                        $key['documento']."||".
                                    $key['estado'];
                                
                     ?>
                             <tr>
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['rango_horas']; ?></td>
                            <td><?php echo mb_strtoupper($key['dia']);?></td>
                            <td><?php echo $key['trimestre']; ?></td>
                            <td><?php echo $key['anio']; ?></td>
                            <td><?php echo $key['numero_ficha']; ?></td>
                            <td><?php echo mb_strtoupper($key['nombre']);?></td>
                             <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                </td>
                            </tr>
                            <?php }
    
                                ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
                              echo "Tabla vacía";
                          }
                          ?>
                    
          </div>
          
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
                <form action="Actualizar/ActualizarBloque.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Bloques</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="dia" id="dia" class="form-control" placeholder="Dia">
                              </div>  
                              <div class="form-group">
                            <input type="number" name="trimestre" id="trimestre" class="form-control" placeholder="Trimestre">
                              </div>  
                              <div class="form-group">
                                <label>Rango de Horas</label> 
                                  <select name="rango" id="rango" class="form-control" type="time">
                                      <option value="0">Seleccionar</option>
                                       <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM bloque");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[rango_horas].'">'.$valores[rango_horas].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                                      <div class="form-group">
                                <label>Persona</label> 
                                  <select name="persona_documento" id="persona_documento" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM persona");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[documento].'">'.$valores[nombre].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Numero de Ficha</label> 
                                <select name="fichanumero_ficha" id="fichanumero_ficha"class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM ficha");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[numero_ficha].'">'.$valores[numero_ficha].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Aula</label> 
                                  <select name="aulaid_aula" id="aula" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM aula");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_aula].'">'.$valores[id_aula].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <label >Año:</label>
                              <input type="number" name="anio" id="anio" class="form-control" placeholder="Año"> 
                              <div class="modal-footer">
                              
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                   </div>
                </form> 
                
                </div>
              </div>
            </div>
              
        <!-- /page content -->

        <!-- footer content -->
<?php 
   require_once 'footer.php';
?>
        <!-- /footer content -->

<?php 
   require_once 'archivos_js.php';
?>
</html>