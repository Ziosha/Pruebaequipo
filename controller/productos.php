<?php
    //Obtener enlace
    $producto = $_GET['prod'];

    //Redirigir a pagina adecuada
    switch($producto){
        case "grafica":
            header("Location:../view/Home/tarjetasGraficas.php");
        break;

        case "mouse":
            header("Location:../view/Home/mouses.php");
        break;

        case "monitor":
            header("Location:../view/Home/Monitores.php");
        break;

        case "ram":
            header("Location:../view/Home/ram.php");
        break;

        case "headset":
            header("Location:../view/Home/headseat.php");
        break;

        case "teclado":
            header("Location:../view/Home/teclados.php");
        break;

        case "motherboard":
            header("Location:../view/Home/Placasmadres.php");
        break;
    }

?>