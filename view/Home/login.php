<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/css/normalize.css">
  <title>Login</title>
</head>
<body>
   <div class="conte">
      <div class="login">
        <h1> Login</h1>
        <p>ingrese su correo y contraseña</p>
        <div class="alert alert-danger" role="alert" id="lblmensaje">
        <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios.
        </div>

        <div class="alert alert-warning" role="alert" id="lblerror">
        <strong class="d-block d-sm-inline-block-force">Advertencia!</strong> Verificar Credenciales.
        </div>

        <div class="alert alert-warning" role="alert" id="lblregistro">
        <strong class="d-block d-sm-inline-block-force">Error!</strong> No Registrado.
        </div>
        <input type="text" id="txtcorreo" name="txtcorreo" placeholder="Correo">
        <input type="password" id="txtpass" name="txtpass" placeholder="Contraseña">
        <input class="bnt" id="btningresar" type="submit" value="ingresar">
        <a class="btn1" id="btlingre" href="#"><img src="https://image.flaticon.com/icons/png/512/300/300221.png" height="15px" alt="icon google"> |   ingrese con Google</a>


        <p>¿No estas registrado ? <a class="ref " href="register.php">Registrarse</a></p>
      
      
      </div>
   </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
<script src="../../public/js/index.js"></script>





</body>
</html>