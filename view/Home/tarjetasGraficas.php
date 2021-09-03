<?php
    require_once("../../config/conexion.php");
    require_once("../../models/GetProducto.php");

    $graficas = new DevuelveProductos();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../public/css/csstarjeta.css" rel="stylesheet" type="text/css" />
<title>TARJETASGRAFICAS</title>

</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>Tarjetas graficas</h1>
    <p>busque su tarjeta grafica de la mejor manera, con la mejor tienda de perifericos</p>

  </div>
  
  <?php
  $infoGra = $graficas->getGraficas();
  foreach($infoGra as $graphic):
  ?>

  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="../../imagenes/imgProductos/graficas/<?php echo $graphic['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong><?php echo $graphic['modelo'];?><br>
          6 Gb<br>
          Triple ventilador<br>
          <?php echo $graphic['capacidad'];?> MHz <br>
          Costo: <?php echo $graphic['costo'];?> Bs. <br>
        </p>
        <p>
          <strong>Lock</strong><br>
          Sistema Raytraicing <br>
          En stock: <?php echo $graphic['stock'];?>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <?php endforeach; ?>
  
  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Hornebom</a></p>
  </footer>
</section>
</body>
</html>