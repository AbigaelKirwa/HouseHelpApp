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
</head>
<body>
    <h1>Welcome <?php echo $row["username"] ?></h1>
    <a href="signout.php">Log out</a>
</body>
</html>