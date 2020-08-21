<?php
include("base.php");
$sql="SELECT * FROM categorias";
$query=mysqli_query($db,$sql);
$json=array();
while($row=mysqli_fetch_array($query)){
    $json[]=array(
        'categoria' => $row['categoria']
        
    );
}
$encode=json_encode($json);
echo"$encode";