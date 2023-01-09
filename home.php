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
    <title>Home</title>
</head>
<body class="bg-sky-200">
    <div class="px-10 py-5">
        <h1 class="font-bold text-lg">Welcome <?php echo $row["username"] ?></h1> 
        <a href="signout.php" class="font-bold text-lg">Log out</a> 
        <a href="#"><img src="images/menu.png" width="25px" class="float-right"></a>
    </div>
    <a href="#"><img src="images/arrow1.png" width="30px" class="float-right mr-10 mt-52"></a>
    <div class="flex flex-row pl-32 py-10 space-x-20 w-auto mt-10">
        <div class="rounded-3xl text-center px-10 py-8 h-1/2" id="services" style="background-color: #8CBCD7;">
            <img src="images/worker4-PhotoRoom.png" class="w-32 ml-6">
            <h3 class="font-bold text-xl mt-8">General Cleaning</h3>
            <p class="font-xl mt-5 leading-relaxed">This involves dusting, sweeping<br>and mopping of the house. </p>
        </div>
        <div class="rounded-3xl text-center px-10 py-8 h-1/2" id="services"  style="background-color: #E9D1BB;">
            <img src="images/worker6.png" class="w-24 ml-14">
            <h3 class="font-bold text-xl mt-10">Baby Sitting</h3>
            <p class="font-xl mt-5 leading-relaxed">This involves taking care of little</br>children for a specific period</p>
        </div>
        <div class="rounded-3xl text-center px-10 py-8 h-1/2" id="services"  style="background-color: #8CBCD7;">
            <img src="images/worker3-PhotoRoom.png" class="w-24 ml-10">
            <h3 class="font-bold text-xl mt-10">Laundry</h3>
            <p class="font-xl mt-5 leading-relaxed">This involves washing of clothes</br>and bed linen. </p>
        </div>
    </div>
</body>
</html>