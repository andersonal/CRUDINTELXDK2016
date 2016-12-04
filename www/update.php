<?php
 include "db.php";

 if(isset($_POST['update']))
 {
     
 $id=$_POST['id'];
 $nomecupcake=$_POST['nomecupcake'];
 $ingrediente=$_POST['ingrediente'];
 $preco=$_POST['preco'];
 
$q=mysqli_query($con,"UPDATE `vendacupcake` SET `nomecupcake`='$nomecupcake',`ingrediente`='$ingrediente',`preco`='$preco' where `id`='$id'");
 
if($q)
 echo "sucesso";
 else
 echo "erro";
 }
?>