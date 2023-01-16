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
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<?php

$userID = $_SESSION["ID"];

$sql = "SELECT `order_ID`, `user_ID`, `house_help_id`, `service_price`, `start_time`, `end_time`, `county`, `location`, `house_number`, `date` FROM orders where user_ID = $userID ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $h_id = $row['house_help_id']; // example ID
        $sql2 = "SELECT name FROM house_helps WHERE id = $h_id";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();


        // $output = '<div class="p-4 bg-white rounded-lg shadow-md">';
        // $output .= '<h2 class="text-lg font-medium">Order ID: '.$row["order_ID"].'</h2>';
        // $output .= '<p class="text-gray-600">House Help Name: '.$row2["name"].'</p>';
        // $output .= '<p class="text-gray-600">Service Price: '.$row["service_price"].'</p>';
        // $output .= '<p class="text-gray-600">Start Time: '.$row["start_time"].'</p>';
        // $output .= '<p class="text-gray-600">End Time: '.$row["end_time"].'</p>';
        // $output .= '<p class="text-gray-600">County: '.$row["county"].'</p>';
        // $output .= '<p class="text-gray-600">Location: '.$row["location"].'</p>';
        // $output .= '<p class="text-gray-600">House Number: '.$row["house_number"].'</p>';
        // $output .= '<p class="text-gray-600">Date: '.$row["date"].'</p>';
        // $output .= '</div>';
        //echo $output;

        ?>

<div class="p-4 bg-white rounded-lg shadow-md mx-auto text-center" style="width: 80%; border: 1px solid #ccc;">
    <h2 class="text-lg font-medium">Order ID: <?php echo $row["order_ID"]; ?></h2>
    <p class="text-gray-600">House Help Name: <?php echo $row2["name"]; ?></p>
    <p class="text-gray-600">Service Price: <?php echo $row["service_price"]; ?></p>
    <p class="text-gray-600">Start Time: <?php echo $row["start_time"]; ?></p>
    <p class="text-gray-600">End Time: <?php echo $row["end_time"]; ?></p>
    <p class="text-gray-600">County: <?php echo $row["county"]; ?></p>
    <p class="text-gray-600">Location: <?php echo $row["location"]; ?></p>
    <p class="text-gray-600">House Number: <?php echo $row["house_number"]; ?></p>
    <p class="text-gray-600">Date: <?php echo $row["date"]; ?></p>
    <button class="btn btn-danger btn-lg" onclick="endService(<?php echo $row["order_ID"]; ?>)">End Service</button>
</div>

<?php

    }
} else {
    echo "0 results";
}


?> 
 
</body>
</html>