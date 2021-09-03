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
<title>MOTHERBOARDS</title>
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
    <h1>Placas madre</h1>
    <p>Todos sabemos que no estaria completo todo si es que nuestra placa madre no fuera buena y que este para lo que queremos, por ello, aca dejamos distintas placas para que usted pueda verlas</p>

  </div>
  
<<<<<<< HEAD
=======
  <?php
  $infoGra = $items->getMotherboard();
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
         <img src="../../imagenes/imgProductos/motherboard/<?php echo $item['imagen'];?>" alt="" />
>>>>>>> patata
      </div>
      <figcaption class="item-caption">
        <p>
            
<<<<<<< HEAD
          <strong>Nombre </strong><br>
          <br>
          Chipset: <br>
          Marca: <br>
          Zocalo: <br>
          Ranura RAM: <br>
          Num de ranuras RAM: <br>
          Ranuras de expansion: <br>
          Costo: <br>
          Stock:
        </p>
        <p>
          <strong>Lock</strong><br>
          caracteristica <br>
          caracteristica
=======
          <strong><?php echo $item['marca'];?> </strong><br>
          <br>
          Chipset: <?php echo $item['chipset'];?><br>
          Zocalo: <?php echo $item['zocalo'];?><br>
          Ranura RAM: <?php echo $item['ranurasRAM'];?><br>
          Num de ranuras RAM: <?php echo $item['nroRanurasRam'];?><br>
          Ranuras de expansion: <?php echo $item['ranurasExpansion'];?><br>
          Costo: <?php echo $item['costo'];?>Bs.<br>
          Stock: <?php echo $item['stock'];?>
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
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Placas madre</a></p>
  </footer>
</section>
</body>
</html>