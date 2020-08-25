<?php
include("base.php");
$id=$_POST['numero'];
$nombre=$_POST['nombre'];
$desc=$_POST['desc'];
$telefono=$_POST['telefono'];
$whatsapp=$_POST['whatsapp'];
$direccion=$_POST['direccion'];
$nombreimagen=$_FILES['imagen1'] ['name'];
$nombreimagen2=$_FILES['imagen2'] ['name'];
$nombreimagen3=$_FILES['imagen3'] ['name'];
if($nombreimagen == null || $nombreimagen2 == null || $nombreimagen3 == null){
$sql="UPDATE turismo SET nombre='$nombre' , telefono='$telefono',whatsapp='$whatsapp',direccion='$direccion'WHERE id='".$id."' ";
$query=mysqli_query($db,$sql);
header("location: turismo.php");

}else{
    $tmp=$_FILES['imagen1'] ['tmp_name'];
    $tmp2=$_FILES['imagen2'] ['tmp_name'];
    $tmp3=$_FILES['imagen3'] ['tmp_name'];
    $destination=$_SERVER['DOCUMENT_ROOT'].'/directorio/fotos/';
    move_uploaded_file($tmp, $destination . $nombreimagen);
    move_uploaded_file($tmp2, $destination . $nombreimagen2);
    move_uploaded_file($tmp3, $destination . $nombreimagen3);
    $sql="UPDATE turismo SET nombre='$nombre' ,telefono='$telefono',whatsapp='$whatsapp',direccion='$direccion',nameimg='$nombreimagen',nameimg2='$nombreimagen2',nameimg3='$nombreimagen3' WHERE id='".$id."' ";
    $query=mysqli_query($db,$sql);
    header("location: turismo.php");

    
}
