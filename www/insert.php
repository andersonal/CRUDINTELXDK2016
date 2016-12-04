<?php
include "db.php";

if(isset($_POST['insert']))
 {
 $nomecupcake=$_POST['nomecupcake'];
 $ingrediente=$_POST['ingrediente'];
 $preco=$_POST['preco'];
 
    $q=mysqli_query($con,"INSERT INTO `vendacupcake` (`nomecupcake`,`ingrediente`,`preco`) VALUES ('$nomecupcake','$ingrediente','$preco')");
 
if($q)
  echo "sucesso";
 else
  echo "erro";
 }
?>