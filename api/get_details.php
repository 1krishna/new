<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Text: Application/json');
    header('Content-Type: application/json');
    
    include 'connect.php';
    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    $arr=array();
    $from=$_GET['from'];
    $to=$_GET['to'];
    $status=$_GET['status'];

    $q="SELECT * from budget where spent='$from' and spent_to='$to' and statu=$status";
    $q=mysqli_query($conn,$q);
    $i=0;
    while($row = mysqli_fetch_assoc($q)){
        $arr[$i]=array(
            'id' => $row['id'],
            'spent' => $row['spent'],
            'reason' => $row['reason'],
            'date' => date('d-m-Y', strtotime($row['date'])),
            'spent_to' => $row['spent_to'],
            'amt' => $row['amt'],
            'isChecked' => false
        );
        $i++;
    }
    echo json_encode($arr);
?>