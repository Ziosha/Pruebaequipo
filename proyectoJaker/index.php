<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cssTecnoStore.css" rel="stylesheet" type="text/css">
</head>
<body>   
<header>
    <audio autoplay="true">

        <source src="../Proyecto final/Algorithm (Alternate Reality Version).mp3" type="audio/mp3">
        
    </audio>
    
    <h1>
        Bienvenidos a Tecno Store
    </h1>
    <nav>
        <ul id="menu">
            <li><a href="">registrarse</a>
                <ul>
                    <li><a href="">Iniciar sesion</a></li>
                    <li><a href="">Crear Usuario</a></li>
                </ul>
            </li>
            <li><a href="">perifericos</a>
                <ul>
                    <li><a href="">Tarjetas graficas</a></li>
                    <li><a href="">Mouses</a></li>
                    <li><a href="">Monitores</a></li>
                    <li><a href="">Memorias RAM</a></li>
                    <li><a href="">Headsets</a></li>
                    <li><a href="">Teclados</a></li>
                    <li><a href="">Motherboard</a></li>
                </ul>
            </li>
            <li><a href="">Acerca de nosotros</a></li>
        </ul>
    </nav>
</header>

    <div class="prrona">
    <?php
        require_once("controller/getProducto.php");
        $funcaPlox = new DevuelveProductos();
        $devuelvePlox = $funcaPlox->getHome();

        var_dump($devuelvePlox);
    ?>
    </div>



    <!--
    <img src="imagenes/imgProductos/graficas/<?php echo $devuelvePlox[0]['imagen'];?>" alt="esto no funca">
    -->
</body>
</html>