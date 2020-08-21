<?php
$categoria= $_POST['category'];

if($categoria == "Restaurantes" ){
    header("location: restaurante.html");
}else if($categoria== "Hoteles"){
    header("location: hoteles.php");
}else if($categoria== "Comida Y Bebidas"){
    header("location: comidaybebidas.html");
}else if($categoria== "Tiendas Comerciales"){
    header("location: tiendascomerciales.html");
}else{
    echo '<script>alert("Usted no ha seleccionado una categoria")</script>';
    header("location: index.php");
}
