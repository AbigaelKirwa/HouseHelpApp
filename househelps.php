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
    <title>HouseHelps</title>
</head>
<body>
    <div class="px-10 py-5">

    <?php

        $serviceID = (int)$_GET['ID'];

         $result= mysqli_query($conn, "SELECT * FROM services where ID = 1");
         $row =mysqli_fetch_assoc($result);
         while ($row = mysqli_fetch_array($result)){
            ?>
            <h1 class="font-bold text-2xl"><?php echo ID  ?> Price Ksh.<?php echo $row['price'] ?></h1>

            <?php
         }
    ?>


        
    </div>
    <div class="text-center">
        <h1 class="font-bold text-4xl text-sky-600">Available Househelps</h1>
    </div>
    <div class="flex flex-row pl-32 py-10 space-x-20 w-auto">
        <div class="text-center px-10 py-8 h-1/2" id="services">
            <img src="images/househelp1.png" class="w-36 ml-6">
            <h3 class="font-bold text-xl mt-8">Ariya Mokaya</h3>
            <p class="font-xl mt-5 leading-relaxed">Has been a househelp for 3 years <br>comes from Nairobi county</p>
        </div>
        <div class="text-center px-10 py-8 h-1/2" id="services">
            <img src="images/househelp2.png" class="w-36 ml-6">
            <h3 class="font-bold text-xl mt-10">Yasmin Hula</h3>
            <p class="font-xl mt-5 leading-relaxed">Has been a househelp for 2 years <br>comes from Nakuru county</p>
        </div>
        <div class="text-center px-10 py-8 h-1/2" id="services">
            <img src="images/househelp3.png" class="w-36 ml-6">
            <h3 class="font-bold text-xl mt-10">Yasmin Hula</h3>
            <p class="font-xl mt-5 leading-relaxed">Has been a househelp for 4 years <br>comes from Narok county</p>
        </div>
    </div>

</body>
</html>