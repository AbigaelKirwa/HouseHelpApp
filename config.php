<?php

session_start();

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b65d9b4184040e:33f255c5@us-cdbr-east-06.cleardb.net/heroku_0dbbe2971f53a86?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-06.cleardb.net"];
$cleardb_username = $cleardb_url["b65d9b4184040e"];
$cleardb_password = $cleardb_url["33f255c5"];
$cleardb_db = substr($cleardb_url["mysql://b65d9b4184040e:33f255c5@us-cdbr-east-06.cleardb.net/heroku_0dbbe2971f53a86?reconnect=true"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


//$conn =mysqli_connect("localhost","root","","domesticworkers");
