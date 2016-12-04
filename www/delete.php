<?php
include "db.php";
 
if(isset($_GET['id']))
 {

$id=$_GET['id'];

$q=mysqli_query($con,"delete from `vendacupcake` where `id`='$id'");
 
if($q)
 echo "Sucesso";
 else
 echo "Erro";
 }
?>