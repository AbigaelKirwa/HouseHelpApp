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
            <?php 

            $query = "SELECT * FROM services";
            $result= mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)){
            $ID = $row['ID'];
            ?>
            <a href="home.php?service=true">
                    <div id="services" value="<?php echo $ID ?>" class="rounded-3xl text-center px-10 py-8 h-1/2" id="services" style="background-color: #8CBCD7;">
                    <?php echo '<img src="data:image;base64,'.base64_encode($row['img_icon']).'" class="w-32 ml-6">'; ?>
                    <h3 class="font-bold text-xl mt-8"><?php echo $row['service'] ?></h3>
                    <p class="font-xl mt-5 leading-relaxed"><?php echo $row['description'] ?>house. </p>
                </div>
            </a>
            <?php   
            }

        

            ?>

        </div>
    </body>
    </html>




    <script>
    function myFunction(ID) {
        window.location.href="http://localhost/HouseHelpApp/househelps.php/" + ID;
    }
    </script>