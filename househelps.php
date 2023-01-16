<?php

require 'config.php';

if(!empty($_SESSION["ID"])){

    $ID = $_SESSION["ID"];
    $result= mysqli_query($conn, "SELECT * FROM users WHERE ID = $ID");
    $row =mysqli_fetch_assoc($result);



}else{
    header("Location: signin.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>HouseHelps</title>
</head>
<body>
    <div class="px-10 py-5">
        
    </div>
    <div class="text-center">
        <h1 class="font-bold text-4xl text-sky-600">Available Househelps</h1>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th >ID</th>
            <th>Profile Picture</th>            
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         $h_result= mysqli_query($conn, "SELECT * FROM house_helps");
        
        while($row = mysqli_fetch_assoc($h_result)) {
            echo "<tr>";
            echo "<td >" . $row["ID"] . "</td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode($row["profile_pic"])."' width='50' height='50' class='rounded-circle'></td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["phone_number"] . "</td>";
            echo "<td><button class='btn btn-primary order-btn' data-ID='" . $row["ID"] . "' data-name='" . $row["name"] . "' data-email='" . $row["email"] . "' data-toggle='modal' data-target='#orderModal'>Order Now</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                <div class="form-group  ">
                        <input type="text" id="house_help_id" name="house_help_id">
                    </div>

                    <div class="form-group  ">
                        <input type="text" id="user_id" name="user_id" value="<?php echo $_SESSION["ID"] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Name of house help</label>
                        <input type="text" class="form-control" id="name" name="name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="services">Services</label>
                        <select class="form-control" id="services" name="service_price">
                            <?php
                            $services_sql = "SELECT service, price FROM services";
                            $services_result = mysqli_query($conn, $services_sql);
                            while($services_row = mysqli_fetch_assoc($services_result)) {
                                echo "<option value='" . $services_row["service"] ."->".$services_row["price"]." = " .$services_row["price"]. "'>" . $services_row["service"] ."->".$services_row["price"]. "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">County</label>
                        <input type="text" class="form-control" name="county" id="county" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Location</label>
                        <input type="text" class="form-control" name="location" id="location" required>
                    </div>

                    <div class="form-group">
                        <label for="name">House Number</label>
                        <input type="text" class="form-control" id="house_number" name="house_number" required>
                    </div>

                    <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                    <label for="start-time">Start Time</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>
                <div class="form-group">
                    <label for="end-time">End Time</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
                <div class="form-group">
                <button type="button" class="btn btn-danger" style="background-color: red;" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary"  style="background-color: LimeGreen;" id="submitOrder">Submit Order</button>
                </div>

        
                </form>


                <?php


if($_SERVER["REQUEST_METHOD"] == 'POST'){
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                

        $house_help_id = $_POST["house_help_id"];
        $user_id = $_POST["user_id"];
        $service_price = $_POST["service_price"];
        $county = $_POST["county"];
        $location = $_POST["location"];
        $house_number = $_POST["house_number"];
        $date = $_POST["date"];
        $start_time = $_POST["start_time"];
        $end_time = $_POST["end_time"];

        echo $end_time;

        
        $query = "INSERT INTO orders (`house_help_id`, `user_id`, `service_price`, `county`, `location`, `house_number`, `date`, `start_time`, `end_time`) VALUES ('$house_help_id', '$user_id','$service_price', '$county', '$location', '$house_number', '$date', '$start_time', '$end_time')";
        mysqli_query($conn, $query);
    
    }


                ?>

    </div>

</body>

<script>
$(document).on("click", ".order-btn", function() {
    var name = $(this).data("name");
    $("#name").val(name);
});

$(document).ready(function(){
  $('.order-btn').on('click', function(){
    var id = $(this).closest('tr').find('td:first').text();
    $('#house_help_id').val(id);
    $('#myModal').modal('show');
  });
});

</script>


</html>