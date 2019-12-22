<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    
    include 'connect.php';
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amt = $_POST['amt'];
    $res = $_POST['res'];
    $date = $_POST['date'];
    $query= "INSERT INTO `budget`(`spent`, `reason`, `date`, `spent_to`, `amt`) VALUES ('$from','$res','$date','$to','$amt')";
    $check=mysqli_query($conn,$query);
    if($check){
        echo "Added sucessfully";
    }
    else{
        echo "Add Again";
    }
//    echo $from.'\n'.$to.'\n'.$amt.'\n'.$res.'\n'.$date.'\n';

?>