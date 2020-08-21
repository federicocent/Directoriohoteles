<?php
include("base.php");
$id= $_POST['id'];
$sql="SELECT * FROM hoteles WHERE id = '$id'";
$query=mysqli_query($db,$sql);
$json=array();
while($row=mysqli_fetch_array($query)){
    $json[]=array(
        'img2' => $row['nameimg2'],
        'img3' => $row['nameimg3']
        
        
    );
}
$encode=json_encode($json);
echo"$encode";