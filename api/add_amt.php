<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Type: application/json');
    
    include 'connect.php';
    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

    $spent = $_GET['spent'];
    $date = substr($_GET['date'],0,10);
    $anil = $_GET['anil'];
    $vamsi = $_GET['vamsi'];
    $sriram = $_GET['sriram'];
    $kk = $_GET['kk'];
    $praneeth = $_GET['praneeth'];
    $reason = $_GET['reason'];
    if(!empty($anil)){
        $q="INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$spent','$reason','$date','anil','$anil')";
        // echo $q;
        $q=mysqli_query($conn,$q);
    }
    if(!empty($vamsi)){
        $q="INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$spent','$reason','$date','vamsi','$vamsi')";
        // echo $q;
        $q=mysqli_query($conn,$q);
    }
    if(!empty($sriram)){
        $q="INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$spent','$reason','$date','sriram','$sriram')";
        // echo $q;
        $q=mysqli_query($conn,$q);
    }
    if(!empty($kk)){
        $q="INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$spent','$reason','$date','kk','$kk')";
        // echo $q;
        $q=mysqli_query($conn,$q);
    }
    if(!empty($praneeth)){
        $q="INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$spent','$reason','$date','praneeth','$praneeth')";
        // echo $q;
        $q=mysqli_query($conn,$q);
    }
    echo json_encode("Amount Added");

?>