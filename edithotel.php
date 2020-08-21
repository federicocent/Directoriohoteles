<?php
include("base.php");
$id= $_POST['id'];
$sql="SELECT * FROM hoteles WHERE id = '$id'";
$query=mysqli_query($db,$sql);
$json=array();
while($row=mysqli_fetch_array($query)){
    $json[]=array(
        'nombre' => $row['nombre'],
        'descripcion' => $row['descripcion'],
        'telefono' => $row['telefono'],
        'whatsapp' => $row['whatsapp'],
        'direccion' => $row['direccion'],
        'id' => $row['id']
        
    );
}
$encode=json_encode($json);
echo"$encode";