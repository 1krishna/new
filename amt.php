<?php
include 'connect.php';
// $from = "vamsi";
// $to = "praneeth";

$from = $_POST['from'];
$to = $_POST['to'];
// echo $from.'\n'.$to;
$query = "SELECT `id`, `spent`, `reason`, `date`, `spent_to`, `amt` FROM `budget` WHERE spent='$from' && spent_to='$to' && statu=1";
// echo $query;
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) > 0) {

    echo "<div class='table-responsive'>
                    <table class='table'>
                        <thead>
                            <th>id</th>
                            <th>Spent By</th>
                            <th>Spent To</th>
                            <th>Date</th>
                            <th>Reason</th>
                            <th>Amount</th>
                            <th>Delete</th>
                        </thead>
                    ";
    $sum = 0;
    while ($row = mysqli_fetch_assoc($res)) {
        $sum = $sum + $row['amt'];
        echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['spent'] . "</td>
                    <td>" . $row['spent_to'] . "</td>
                    <td>" . $row['date'] . "</td>
                    <td>" . $row['reason'] . "</td>
                    <td>" . $row['amt'] . "</td>
                    <td><button class='btn btn-primary' id='" . $row['id'] . "' onclick='del(".$row['id'].")'><b>-</b></button></td>
                  </tr>";
    }
    echo "    <tr><td colspan='5' style='text-align:right;'>Total </td>
                      <td style='text-align:left;'>$sum </td>  
                  </tr>
                    </table>
              </div>";
} else {
    echo 'No Records For This Pair';
}
