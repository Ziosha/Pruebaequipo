<?php
    require_once("../../config/conexion.php");
    require_once("../../models/GetProducto.php");

    $items = new DevuelveProductos();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../public/css/csstarjeta.css" rel="stylesheet" type="text/css" />
<title>RAM</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>Memorias Ram</h1>
    <p>Le falta memoria RAM, no dude en consultar con nostros, encontrara la mejor memoria para su ordenador</p>

  </div>

  <?php
  $infoGra = $items->getRam();
  foreach($infoGra as $item):
  ?>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
          
        <img src="../../imagenes/imgProductos/rams/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
            
          <strong><?php echo $item['marca'];?> </strong><br>
          <br>
          Capacidad: <?php echo $item['capacidad'];?><br>
          Generacion: <?php echo $item['generacion'];?><br>
          Costo: <?php echo $item['costo'];?><br>
          Stock: <?php echo $item['stock'];?>
        </p>
      </figcaption>
    </figure>
  </div> 

  <?php endforeach; ?>

  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Memoria ram</a></p>
  </footer>
</section>
</body>
</html>