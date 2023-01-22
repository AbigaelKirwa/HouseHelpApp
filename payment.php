<!-- session starts here, also there is including of relevant files -->
<?php
session_start();
include_once ("config.php");

if (!isset($_SESSION['ID']))
{
    echo'<script>alert("Log in first")</script>';
    header("location: login.php");
}

if (isset($_GET['id'])){
    $fare_id = $_GET['id'];
    $fare_id = (int) filter_var($fare_id, FILTER_SANITIZE_NUMBER_INT);
    header("refresh:0; url= http://localhost/HouseHelpApp/Daraja-API/daraja-tutorial-master/index.php?id=".$fare_id);

}
?>
