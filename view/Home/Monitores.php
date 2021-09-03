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
<title>MONITORES</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>Monitores</h1>
    <p>Siempre habra una imagen inigualable, busca el monitor que te la ofresca</p>

  </div>
  
  <?php
  $infoGra = $items->getMonitor();
  foreach($infoGra as $item):
  ?>

  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="../../imagenes/imgProductos/monitor/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
      <p>
            
            <strong><?php echo $item['marca'];?> </strong><br>
            <br>
            tamaño: <?php echo $item['tamanio'];?><br>
            Frecuencia: <?php echo $item['frecuencia'];?> MHz<br>
            Costo: <?php echo $item['costo'];?> Bs.<br>
            Stock: <?php echo $item['stock'];?>
          </p>
      </figcaption>
    </figure>
  </div>

  <?php endforeach; ?>

  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Mouses</a></p>
  </footer>
</section>
</body>
</html>