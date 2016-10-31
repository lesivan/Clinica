<?php

class MySQL{ 
private $conexion;  


public function MySQL(){
	
 $this->conexion= new mysqli("localhost","root",'root',"clinicasj");
if ($this->conexion -> connect_errno) {
die( "Fallo la conexión a MySQL: (" . $this->conexion -> mysqli_connect_errno() 
. ") " . $this->conexion-> mysqli_connect_error());

}

mysqli_set_charset($this->conexion, "utf8");
}

public function consulta($consulta){  //EJECUTA UNA CONSULTA Y RETORNA LOS REGISTROS 
     $resultado = $this->conexion->query($consulta);  
     
	 if(!$resultado){  
		 echo 'ERROR EN CONSULTA MYSQL: ' . mysqli_connect_error();  
		 exit;  
		 }  
		 return $resultado;   
     }  

public function fetch_now($consulta){   //ALMACENA EN ARREGLOS LOS REGISTROS ENCONTRADOS EN LA CONSULTA.
     return $consulta->fetch_row();  
     }  
	 
	 
public function num_rows($consulta){   //DEVUELVE EL TOTAL DE FILAS ENCONTRADAS.
    return $consulta->num_rows;  
     }  
	 


public function cerrarcon(){  //CIERRA CUALQUIER CONEXION ABIERTA DE MYSQL
		if($this->conexion){ 
			$this->conexion->close();
		}
		return true;
	}

}
?>