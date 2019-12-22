<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Butget</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<?php
date_default_timezone_set("Asia/Kolkata");
include 'connect.php';
?>

<body>
    <br><br>
    <div class='container'>
        <div class='row'>
            <div class='col-md-3'>

            </div>
            <div class='col-md-3' align='center'>
                <input type='button' class='btn btn-primary' onclick='lda();' value='Check Amount'>
            </div>
            <div class='col-md-3' align='center'>
                <input type='button' class='btn btn-primary' onclick='his();' value='History'>
            </div>
            <div class='col-md-3'>

            </div>
        </div>
    </div>
    <div id='dom'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md'>
                    <div class='table-responsive'>
                        <table class='table'>
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <td colspan='2' align='center'>
                                        <div id='hell'></div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Money Spent By :</td>
                                    <td><select id="spent">
                                            <option value="sel">--SELECT--</option>
                                            <option value="vamsi">Vamsi</option>
                                            <option value="sriram">Sri Ram</option>
                                            <option value="kk">Krishna Kanth</option>
                                            <option value="anil">Anil</option>
                                            <option value="praneeth">Praneeth</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reason</td>
                                    <td><input type="text" placeholder='Reason' id='res' class='form-control'></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td><input type="date" class="form-control" id='fdate' name='date' value="<?php echo date('Y-m-d'); ?>" style='padding-right:20px;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Money Spent to :</td>
                                </tr>

                                <tr>
                                    <td>Vamsi</td>
                                    <td><input type="text" class='form-control' placeholder='Enter Amount' id='vamsi'></td>
                                    <td><button class='btn btn-primary' id='1' value='vamsi'><b>+</b></button></td>
                                </tr>
                                <tr>
                                    <td>Sri Ram</td>
                                    <td><input type="text" placeholder='Enter Amount' class='form-control' id='sriram'></td>
                                    <td><button class='btn btn-primary' id='2' value='sriram'><b>+</b></button></td>
                                </tr>
                                <tr>
                                    <td>Krishna Kanth</td>
                                    <td><input type="text" placeholder='Enter Amount' class='form-control' id='kk'></td>
                                    <td><button class='btn btn-primary' id='3' value='kk'><b>+</b></button></td>
                                </tr>
                                <tr>
                                    <td>Praneeth</td>
                                    <td><input type="text" placeholder='Enter Amount' class='form-control' id='praneeth'></td>
                                    <td><button class='btn btn-primary' id='4' value='praneeth'> <b>+</b></button></td>
                                </tr>
                                <tr>
                                    <td>Anil</td>
                                    <td><input type="text" placeholder='Enter Amount' class='form-control' id='anil'></td>
                                    <td><button class='btn btn-primary' id='5' value='anil'><b>+</b></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='col-2'></div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('button').click(function() {
                    var res = $('#res').val();
                    var spent = $('#spent').val();
                    if(spent == 'sel'){
                        alert('Select A Person');
                    }
                    else if (res == '') {
                        alert('Reason Is Requires');
                        return FALSE;
                    } 
                    else {
                        if (confirm("Confirm To Add")) {
                            var id = $(this).val();
                            var val = $('#' + id).val();
                            var date = $('#fdate').val();
                            //alert('from :'+spent+'\nRs :'+val+'\nReason:'+res+'\nTo:'+id+'\nDate:'+date)
                            $.ajax({
                                type: "POST",
                                url: "add_amt.php",
                                data: {
                                    from: spent,
                                    amt: val,
                                    res: res,
                                    to: id,
                                    date: date,
                                },
                                dataType: "text",
                                success: function(data) {
                                    // $('#load').load('del_com_ipl.php');
                                    alert(data);
                                },
                            });
                        }
                    }
                });
            });
        </script>
    </div>
    <script>
        function lda() {
            $('#hell').append("loading..");
            $('#dom').load('check_amt.php');
            $('#hell').empty();
        }

        function his() {
            $('#hell').append("loading..");
            $('#dom').load('history.php');
        }
    </script>
</body>

</html>