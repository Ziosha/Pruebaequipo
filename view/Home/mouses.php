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
<<<<<<< HEAD
<<<<<<< HEAD
<link href="../../public/css/cssmouses.css" rel="stylesheet" type="text/css" />
=======
<link href="../../public/css/csstarjeta.css" rel="stylesheet" type="text/css" />
>>>>>>> fontend
=======
<link href="../../public/css/csstarjeta.css" rel="stylesheet" type="text/css" />
>>>>>>> patata
<title>MOUSES</title>
<link rel="stylesheet" href="">
</head>

<body>

<section class="wrap-3d">
  <div class="intro">
<<<<<<< HEAD
<<<<<<< HEAD
  <a class="animated-border-button" href="../../index.php">Inicio</a>
=======
  <a class="animated-border-button" href="http://localhost:8090/Pruebaequipo/">Inicio</a>
>>>>>>> fontend
=======
  <a class="animated-border-button" href="../../index.php">Inicio</a>
>>>>>>> patata
<br>
<br>
    <h1>Mouses Gaiming</h1>
    <p>Encuentre los mejores mouses, busque para su conveniencia o gusto</p>

  </div>
  
<<<<<<< HEAD
=======
  <?php
  $infoGra = $items->getMouse();
  foreach($infoGra as $item):
  ?>

>>>>>>> patata
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
<<<<<<< HEAD
        <img src="https://resource.logitechg.com/w_659,c_limit,f_auto,q_auto,f_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g903-hero/g903-hero-desktop-nw.png?v=1" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
<<<<<<< HEAD
          <strong>Logitech G900</strong><br>
          Botones programables<br>
          Inalambrico<br>
          DPI maximo de 12000<br>
          1830 MHz
=======
          <strong>Nombre</strong><br>
          Marca: <br>
          DPI: <br>
          Costo: <br>
          Stock: 
>>>>>>> fontend
        </p>
        <p>
          <strong>Lock</strong><br>
          RGB tenue <br>
=======
        <img src="../../imagenes/imgProductos/mouse/<?php echo $item['imagen'];?>" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong><?php echo $item['marca'];?></strong><br>
          DPI: <?php echo $item['DPI'];?><br>
          Costo: <?php echo $item['costo'];?>Bs.<br>
          Stock: <?php echo $item['stock'];?>
        </p>
        <p>
          <strong>Lock</strong><br>
>>>>>>> patata
          Ambidiestro
        </p>
      </figcaption>
    </figure>
  </div>
<<<<<<< HEAD
<<<<<<< HEAD
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://www.corsair.com/corsairmedia/sys_master/productcontent/CH-9000109-EU-CG_M65_RGB_K_03.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>Corsair M65 Pro RGB</strong><br>
          8 botones programables<br>
          no Inalambrico<br>
          DPI maximo 12000<br>
        </p>
        <p>
          <strong>lock</strong><br>
          RGB potente <br>
          Calidad inigualabre
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://assets.razerzone.com/eeimages/products/25919/daelite_gallery03.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
        <strong>Razer DeathAdder Elite</strong><br>
          7 botones programables<br>
          No es inlambrico<br>
          DPI maximo 16000<br>
          105 gramos
        </p>
        <p>
          <strong>lock</strong><br>
          RGB tenue<br>
          50 millones de clicks
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://www.cclonline.com/images/avante/Rival710_Persp2.png?width=530&height=400&scale=canvas" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>SteelSeries Rival 710</strong><br>
          7 botones programables <br>
          No es inlambrico<br>
          DPI maximo 16000<br>
          
        </p>
        <p>
          <strong>lock</strong><br>
          RGB tenue<br>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://www.corsair.com/corsairmedia/sys_master/productcontent/press_customization-leveled-up-corsair-launches-scimitar-pro-rgb-gaming-mouse-at-ces-2017.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>Corsair Scimitar RGB</strong><br>
          14 Botones programables<br>
          No es inalambrico <br>
          DPI maximo 16000<br>
          8K
        </p>
        <p>
          <strong>lock</strong><br>
          RGB Activo potente<br>
          Buen agarre y comodo de sujetar
        </p>
      </figcaption>
    </figure>
  </div>
  
=======
   
>>>>>>> fontend
=======
  
  <?php endforeach; ?>

>>>>>>> patata
  <footer class="footer">
    <p>hacker squad &copy; 2021 hacker squad <a  target="_blank">Mouses</a></p>
  </footer>
</section>
</body>
</html>