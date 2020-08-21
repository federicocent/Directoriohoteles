<?php
include("base.php");
$sql="SELECT * FROM categorias";
$query=mysqli_query($db,$sql);
$categoria= $_POST['category'];

if($categoria == "Restaurantes" ){
    header("location: restaurante.html");
}else if($categoria== "Hoteles"){
    header("location: hoteles.php");
}else if($categoria== "Comida Y Bebidas"){
    header("location: comidaybebidas.html");
}else if($categoria== "Tiendas Comerciales"){
    header("location: tiendascomerciales.html");
}


