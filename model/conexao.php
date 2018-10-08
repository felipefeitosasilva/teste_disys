<?php 
$username = "root";
$senha    = "";


  $conn = new PDO('mysql:host=localhost;dbname=dev_disys', $username, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
