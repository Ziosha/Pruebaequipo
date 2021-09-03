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
<title>MOTHERBOARDS</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
  <a class="animated-border-button" href="../../index.php">Inicio</a>
<br>
<br>
    <h1>Placas madre</h1>
    <p>Todos sabemos que no estaria completo todo si es que nuestra placa madre no fuera buena y que este para lo que queremos, por ello, aca dejamos distintas placas para que usted pueda verlas</p>

  </div>
  
  <?php
  $infoGra = $items->getMotherboard();
  foreach($infoGra as $item):
  ?>

  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
          
         <img src="../../imagenes/imgProductos/motherboard/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
            
          <strong><?php echo $item['marca'];?> </strong><br>
          <br>
          Chipset: <?php echo $item['chipset'];?><br>
          Zocalo: <?php echo $item['zocalo'];?><br>
          Ranura RAM: <?php echo $item['ranurasRAM'];?><br>
          Num de ranuras RAM: <?php echo $item['nroRanurasRam'];?><br>
          Ranuras de expansion: <?php echo $item['ranurasExpansion'];?><br>
          Costo: <?php echo $item['costo'];?>Bs.<br>
          Stock: <?php echo $item['stock'];?>
        </p>
      </figcaption>
    </figure>
  </div>

  <?php endforeach; ?>

  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Placas madre</a></p>
  </footer>
</section>
</body>
</html>