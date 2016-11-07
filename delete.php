<?php
	
	include_once("conexion.php");
	
	$objeto=new MySQL();
	
	
	$consulta = ("DELETE FROM doctor WHERE IdDoctor='$_GET[id]'");
	$BAND = $objeto->consulta($consulta);  
    
    if ($BAND === true)
    {
        echo "<script type='text/javascript'>window.location='Agregar_Doctor.php?j=1'; </script>";
        exit();
    }
	

	
	
?>