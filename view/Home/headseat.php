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
<title>HEADSET</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>HeadSeats</h1>
    <p>siempre es bueno tener un muy buen headseat con el cual no tengas molestias, buscalo aca</p>

  </div>
  
  <?php
  $infoGra = $graficas->getHeadSet();
  foreach($infoGra as $item):
  ?>

  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
          
         <img src="../../imagenes/imgProductos/headset/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
            
          <strong><?php echo $item['marca'];?> </strong><br>
          <br>
          Microfono: <?php $graficas->verificaBool($item['microfono']); ?><br>
          Calidad Sonido: <?php echo $item['calSonido'];?><br>
          Coneccion: <?php echo $item['coneccion'];?><br>
          Stock: <?php echo $item['stock'];?><br>
          Cancelacion de Sonido: <?php $graficas->verificaBool($item['cancelSonido']); ?> <br>
          Costo: <?php echo $item['costo'];?> Bs.<br>
        </p>
        </figcaption>
    </figure>
  </div>

  <?php endforeach; ?>

  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Headset</a></p>
  </footer>
</section>
</body>
</html>