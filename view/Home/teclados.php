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
<title>TECLADOS</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>Teclados</h1>
    <p>Como en tecno Store sabemos lo que te gusta, decidimos traer lo mejor para su uso continuo con estos teclados</p>

  </div>
  
  <?php
  $infoGra = $items->getTeclado();
  foreach($infoGra as $item):
  ?>

  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
          
         <img src="../../imagenes/imgProductos/teclado/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
            
          <strong><?php echo $item['modelo'];?> </strong><br>
          <br>
          Mecanico: <?php $items->verificaBool($item['mecanico']);?><br>
          Costo: <?php echo $item['costo'];?><br>
          Stock: <?php echo $item['stock'];?><br>
        </p>
      </figcaption>
    </figure>
  </div>

  <?php endforeach; ?>

  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Teclados</a></p>
  </footer>
</section>
</body>
</html>