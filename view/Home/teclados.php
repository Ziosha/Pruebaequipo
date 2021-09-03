<<<<<<< HEAD
=======
<?php
    require_once("../../config/conexion.php");
    require_once("../../models/GetProducto.php");

    $items = new DevuelveProductos();
?>
>>>>>>> patata
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../public/css/csstarjeta.css" rel="stylesheet" type="text/css" />
<<<<<<< HEAD
<title>MOUSES</title>
=======
<title>TECLADOS</title>
>>>>>>> patata
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
<<<<<<< HEAD
  <a class="animated-border-button" href="http://localhost:8090/Pruebaequipo/">Inicio</a>
=======
  <a class="animated-border-button" href="../../index.php">Inicio</a>
>>>>>>> patata
<br>
<br>
    <h1>Teclados</h1>
    <p>Como en tecno Store sabemos lo que te gusta, decidimos traer lo mejor para su uso continuo con estos teclados</p>

  </div>
  
<<<<<<< HEAD
=======
  <?php
  $infoGra = $items->getTeclado();
  foreach($infoGra as $item):
  ?>

>>>>>>> patata
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
          
<<<<<<< HEAD
         <img src="https://ci5.googleusercontent.com/proxy/HLUJYZxluCXPUjDZWzpBwPUc9gvdYSBS2dJDOerPgW5_0hTdITUtblZGSmc538hEI3u-9_nd9JVZEau_WwdvaFydFBUbEvBlScaZ3Mk3qnsPJAlfInYfZ1rz1tWFc_aIKQmJD1nFoROcGU5H_8UFhsJKo9q5cmAoEOg=s0-d-e1-ft" alt="" />
=======
         <img src="../../imagenes/imgProductos/teclado/<?php echo $item['imagen'];?>" alt="" />
>>>>>>> patata
      </div>
      <figcaption class="item-caption">
        <p>
            
<<<<<<< HEAD
          <strong>Nombre </strong><br>
          <br>
          Mecanico: <br>
          Costo: <br>
          Stock: <br>
          Modelo: 
        </p>
        <p>
          <strong>Lock</strong><br>
          caracteristica <br>
          caracteristica
=======
          <strong><?php echo $item['modelo'];?> </strong><br>
          <br>
          Mecanico: <?php $items->verificaBool($item['mecanico']);?><br>
          Costo: <?php echo $item['costo'];?><br>
          Stock: <?php echo $item['stock'];?><br>
>>>>>>> patata
        </p>
      </figcaption>
    </figure>
  </div>
<<<<<<< HEAD
=======

  <?php endforeach; ?>

>>>>>>> patata
  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Teclados</a></p>
  </footer>
</section>
</body>
</html>