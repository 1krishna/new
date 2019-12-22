<?php
    include 'connect.php';
    $q="SELECT * from budget";
    $q=mysqli_query($conn,$q);
    $arr = array();
    $i=0;
    while($row=mysqli_fetch_assoc($q)){
        $arr[$i]=array(
            "id"=> "{$row['id']}",
            "spent" => "{$row['spent']}",
            "reason" => "{$row['reason']}",
            "date" => "{$row['date']}",
            "spent_to" => "{$row['spent_to']}",
            "amt" => "{$row['amt']}"
        );
        $i=$i+1;
    }
    print_r($arr);
?>