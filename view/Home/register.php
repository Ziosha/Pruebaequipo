<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/css/normalize.css">
  <title>Registro</title>
</head>
<body>
<div class="conte">
      <div class="login">
        <h1> Registro</h1>
        <p>ingrese su correo y contraseña</p>
        
        <input type="text" id="nomUsu" name="nomUsu" placeholder="Nombre">
        <input type="email" id="correo" name="correo" placeholder="Correo">
        <input type="password" id="pass" name="pass" placeholder="Contraseña">
        <input type="password" id="pass1" name="pass1" placeholder="Repite Contraseña">
        <input class="bnt" id="btnregistrar" type="submit" value="Registrar">

        <a class="btn1" id="btlregis" href="#"><img src="https://image.flaticon.com/icons/png/512/300/300221.png" height="15px" alt="icon google"> |   Registrar con Google</a>
        <p>¿ya esta registrado ? <a class="ref " href="login.php">Acceso</a></p>
      
      
      </div>
   </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
<script src="../../public/js/register.js"></script>


</body>
</html>