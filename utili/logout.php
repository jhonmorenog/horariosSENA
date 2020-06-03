<?php 
session_start();
        if (!isset($_SESSION['verificar'])) {
            session_destroy();
            print"<script>alert(\"Su sesión ha terminado.\");
        		window.location='../index.php';</script>";
            exit();
        }
        
    	if($_SESSION["expira"]){
    		session_destroy();
    		print"<script>alert(\"Su sesión ha terminado.\");
            window.location='../index.php';</script>";
    	exit();
    	} 
            
       
?>