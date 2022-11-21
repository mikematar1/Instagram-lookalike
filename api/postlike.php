<?php
include("connection.php");
session_start();
$userid = $_SESSION["userid"];
$postid = $_POST["postid"];
$query = $conn->prepare("INSERT INTO likes(userid,postid) VALUES(?,?)");
$query->bind_param("ii",$userid,$postid);
$query-execute();