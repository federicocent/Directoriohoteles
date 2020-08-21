<?php
include("base.php");
$nombre=$_POST['nombre'];
$desc=$_POST['desc'];
$telefono=$_POST['telefono'];
$whatsapp=$_POST['whatsapp'];
$direccion=$_POST['direccion'];

$nombreimagen=$_FILES['imagen1'] ['name'];
$nombreimagen2=$_FILES['imagen2'] ['name'];
$nombreimagen3=$_FILES['imagen3'] ['name'];

$tmp=$_FILES['imagen1'] ['tmp_name'];
$tmp2=$_FILES['imagen2'] ['tmp_name'];
$tmp3=$_FILES['imagen3'] ['tmp_name'];
$destination=$_SERVER['DOCUMENT_ROOT'].'/directorio/fotos/';
move_uploaded_file($tmp, $destination . $nombreimagen);
move_uploaded_file($tmp2, $destination . $nombreimagen2);
move_uploaded_file($tmp3, $destination . $nombreimagen3);
$sql="INSERT INTO hoteles( nombre, descripcion, telefono, whatsapp,direccion, nameimg, nameimg2, nameimg3) VALUES ('$nombre','$desc','$telefono','$whatsapp','$direccion','$nombreimagen','$nombreimagen2','$nombreimagen3')"; 
mysqli_query($db,$sql);
header("location:hoteles.php");
