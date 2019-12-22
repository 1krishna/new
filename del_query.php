<?php
include 'connect.php';
$id=$_POST['id'];
$query = "UPDATE `budget` SET `statu`=0 WHERE id=$id"; 
$check=mysqli_query($conn,$query);
if($check){
    echo "Deleted Successfully"; 
}
else{
    echo "Delete Not Successfull";
}
?>