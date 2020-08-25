<?php
include("base.php");
$id=$_POST['id'];
$sql="DELETE FROM turismo WHERE id='".$id."'";
$query=mysqli_query($db,$sql);
