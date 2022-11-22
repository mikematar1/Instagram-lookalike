<?php
include("connection.php");
session_start();
$caption = $_POST["caption"];
$picture = $_POST["image"];
$userid = $_SESSION["userid"];
$date = date("Y-m-d");
$query = $conn->prepare("INSERT INTO posts(userid,date_created,caption) VALUES(?,?,?)");
$query->bind_param("iss",$userid,$date,$caption);
$query->execute();
header("Location: http://localhost/instagram-lookalike/website/home.html");