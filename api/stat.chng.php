<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Text: Application/json');
    header('Content-Type: application/json');
    
    include 'connect.php';
    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    $i=0;
    $arr=array();
    $info=$_GET['info'];
    $info=json_decode($info);
    foreach ($info as $key) {
        if($key->isChecked == true){
            $q= "UPDATE `budget` SET `statu`=0 WHERE id=$key->id";
            $q=mysqli_query($conn,$q);
        }
    }
    echo json_encode("Deleted Successfully");
    
?>