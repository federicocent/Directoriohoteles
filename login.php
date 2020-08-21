<?php
include("base.php");
$usuario = $_GET['usuario'];
$contraseña = $_GET['contra'];
$sql="SELECT * FROM admin WHERE usuario = '$usuario' and contraseña = '$contraseña' ";
$query=mysqli_query($db,$sql);
$only=mysqli_num_rows($query);

if($only == 1){
    session_start();
    $_SESSION['usuario'] = $usuario;
header("Location: index.php");
}else if($only == 0){
echo"$contraseña";

}