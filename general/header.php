<?php 

?>
<title>SenTime</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

/**
 * Se verifica si se encuentra en nel index, en dado caso se cambio no no la dirección de los css
 */
if( $_SERVER['PHP_SELF']=="/SenTime/index.php"){
    $dir="";
}else{
    $dir="../";
}

?>
<link href="<?php echo $dir; ?>css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $dir; ?>css/font-awesome/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $dir; ?>css/build/custom.min.css" rel="stylesheet">


<link rel="shortcut icon" type="image/x-icon" href="<?php echo $dir; ?>icon/Horarios.ico" />
