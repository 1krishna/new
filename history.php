    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'>History</div>
            <div class='col-md-3'>
                From : <select name="" id="from" class='form-control'>
                    <option value="vamsi">Vamsi</option>
                    <option value="sriram">Sri Ram</option>
                    <option value="kk">Krishna Kanth</option>
                    <option value="anil">Anil</option>
                    <option value="praneeth">Praneeth</option>
                </select>
            </div>
            <div class='col-md-3'>
                TO:<select name="" id="to" class='form-control'>
                    <option value="vamsi">Vamsi</option>
                    <option value="sriram" Selected>Sri Ram</option>
                    <option value="kk">Krishna Kanth</option>
                    <option value="anil">Anil</option>
                    <option value="praneeth">Praneeth</option>
                </select>
            </div>
            <div class='col-md-2'><br>
                <input type='button' class='btn btn-primary' value='Click To Check' onclick='add();' id='lo'>
            </div>
        </div>
        <br><br>
        <div class='row'>
            <div class='col' id='det'></div>
        </div>
    </div>

    <script>
        function add() {
            var from = $('#from').val();
            var to = $('#to').val();
            //alert('from :'+spent+'\nRs :'+val+'\nReason:'+res+'\nTo:'+id+'\nDate:'+date)
            $.ajax({
                type: "POST",
                url: "his.php",
                data: {
                    from: from,
                    to: to,
                },
                dataType: "text",
                success: function(data) {
                    // $('#det').load('amt.php');
                    // alert(data);
                    $("#det").empty();
                    $('#det').append(data);
                },
            });

        }

        function del(id) {
            $.ajax({
                type: "POST",
                url: "del_query.php",
                data: {
                    id: id,
                },
                dataType: "text",
                success: function(data) {
                    alert(data);
                    add();
                },
            });
        }
    </script> 