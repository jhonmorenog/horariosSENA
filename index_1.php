<?php
$conection = new mysqli();
$conection->connect("localhost", "root", "", "id12868532_horarios", "3306");
if ($conection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>mostrar datos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>

    <?php
    $sql = "SELECT * FROM bloque";
    $query=$conection->query($sql);
    
    if ($query->num_rows>=1){?>

        <body>
            <div class="container">
                <div class="row text-center ">  



                    <div class="col-md-12 border border-secondary">
                        <div class="row" style=" height: 100px">				
                            <div class="col-md-12 border border-secondary" style="background-color: #239E8D" >
                                <h1>Horarios SENA</h1>
                            </div>
                        </div>
                        <div class="row">								
                            <div class="col-md-4 border border-secondary"><p>Ficha: <?php echo $sql['fichanumero_ficha']; ?> </p></div>
                            <div class="col-md-4 border border-secondary"><p>Programa: </p></div>
                            <div class="col-md-4 border border-secondary"><p>Ingreso: </p></div>			  

                        </div>

                        <div class="row">
                            <div class="col-md-4 border border-secondary"><p>Trimestre: <?php echo $sql['trimestre']; ?> </p></div>
                            <div class="col-md-8 border border-secondary"><p>Instructor: </p></div>  
                        </div>
                        <div class="row row-cols-3">								
                            <div class="col border border-secondary"><p>Documento:  <?php echo $sql['persona_documento']; ?> </p></div>
                            <div class="col border border-secondary"><p>Aula:  <?php echo $sql['aulaid_aula']; ?> </p></div>			  
                            <div class="col border border-secondary"><p>fecha: <?php echo $sql['anio']; ?></p></div>	
                        </div>

                        <div class="row row-cols-7">
                            <div class="col border border-secondary">
                                <p>Rango Horas</p>
                            </div> 

                            <div class="col border border-secondary">
                                <p>Lunes</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Martes</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Miercoles</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Jueves</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Viernes</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Sabado</p>
                            </div>  
                            <div class="col border border-secondary">
                                <p>Domingo</p>
                            </div>  

                        </div>

                        <div class="row row-cols-7">

                            <div class="col border border-secondary">

                                <p>  <?php echo $conection['rango_horas']; ?></p>
                            </div> 

                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div>  
                            <div class="col border border-secondary">
                                <p></p>
                            </div> 

                        </div>



                    </div>
                </div>    
            </div>
            <?php
        }
        ?>

    </body>
</html>




