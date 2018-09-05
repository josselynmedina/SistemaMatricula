<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sistema de Matricula</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  
  
      <link rel="stylesheet" href="login/css/style.css">

  
</head>

<body>

  <form class="login" action="" method="POST">
  <input type="text" name = "usuario" placeholder="Usuario">
  <input type="password" name= "password" placeholder="Contraseña">
  <button name="login">Login</button>
</form>

<?php
        if(isset($_POST['login'])){
          include "conexion.php";
          $cek_data = mysqli_query($conn, "SELECT * FROM tb_usuario WHERE
          usuario = '".$_POST['usuario']."' AND password = '".$_POST['password']."'");
          $data = mysqli_fetch_array($cek_data);
          $level = $data['tipo_usuario'];
          $nama = $data['nombre_usuario'];
          if(mysqli_num_rows($cek_data) > 0){
            session_start();
            $_SESSION['nama'] = $nama;
            if($level == 1){
              header('location:admin.php');
            }elseif($level == 2){
              header('location:alumno.php');
            }elseif($level == 3){
              header('location:maestro.php');
            }
          }else{
            echo 'Error de autenticacion';
          }
        }
      ?>
    
  
  

</body>

</html>