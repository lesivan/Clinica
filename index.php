<?php
include_once("Conexion.php");
?>

<!Doctype html>
<html>
<head>
  <title>CSJ</title>
  <meta charset="UTF-8">
 
  <LINK href="css/EstiloLogin.css" rel="stylesheet" type="text/css">

  
  </head>
<body>

  <?php 
  
  session_start();
  $b= new MySQL;
  $mensagge = "";
  if(isset($_POST['acceso'])):
    $user=$_POST['usuario'];
    $passw=$_POST['pass'];
    $pass=md5($passw);
    
    
      if (empty($user) or empty($pass)):

   


      $mensagge = 'Usuario y clave vacios';
    else: 
        $query= $b->consulta("select * from usuario where nombre='$user' and contrasena='$pass'");
        if($b->num_rows($query)>0){
        while ($resultado=$b->fetch_now($query)):
          $_SESSION['usuario']= $resultado[1];
           header('Location:Citas.php');
        endwhile;
        }
        else
        $mensagge = 'Usuario y clave incorrectos';
        
        
    endif;    
  endif;
    ?>    
 

  <form method="post" action="" class="login">
    <h1 class="login-title">Clinica San Jose</h1>
     <?php
  echo $mensagge; ?>
    <input name="usuario" type="text" class="login-input" placeholder="Usuario" autofocus>
    <input name="pass" type="password" class="login-input" placeholder="Contrasena">
    <input name="acceso" type="submit" value="Iniciar" class="login-button">
  </form>
</body>





</html>