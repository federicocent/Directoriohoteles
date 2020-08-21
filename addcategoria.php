<?php
include("base.php");
$nombre=$_POST['nombre'];
$archivo = $_FILES['php'] ['name'];
$tmp=$_FILES['php'] ['tmp_name'];
$destination=$_SERVER['DOCUMENT_ROOT'].'/directorio/';
move_uploaded_file($tmp, $destination . $archivo);
$sql= "INSERT INTO categorias(categoria, archivo) VALUES ('$nombre','$archivo')";
mysqli_query($db, $sql);
header("Location:index.php");
