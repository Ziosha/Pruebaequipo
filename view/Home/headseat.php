<<<<<<< HEAD
=======
<?php
    require_once("../../config/conexion.php");
    require_once("../../models/GetProducto.php");

    $graficas = new DevuelveProductos();
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
<title>HEADSET</title>
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
    <h1>HeadSeats</h1>
    <p>siempre es bueno tener un muy buen headseat con el cual no tengas molestias, buscalo aca</p>

  </div>
  
<<<<<<< HEAD
=======
  <?php
  $infoGra = $graficas->getHeadSet();
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
         <img src="../../imagenes/imgProductos/headset/<?php echo $item['imagen'];?>" alt="" />
>>>>>>> patata
      </div>
      <figcaption class="item-caption">
        <p>
            
<<<<<<< HEAD
          <strong>Nombre </strong><br>
          <br>
          Microfono: <br>
          Cal Sonido: <br>
          Coneccion: <br>
          Costo: <br>
          Stock: <br>
          Marca: 
        </p>
        <p>
          <strong>Lock</strong><br>
          caracteristica <br>
          caracteristica
        </p>
      </figcaption>
    </figure>
  </div>
=======
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

>>>>>>> patata
  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Headset</a></p>
  </footer>
</section>
</body>
</html>