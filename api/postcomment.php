<?php
include("connection.php");
session_start();
$userid = $_SESSION["userid"];
$postid = $_POST["postid"];
$text = $_POST["comment"];
$query = $conn->prepare("INSERT INTO comments(userid,postid,comment) VALUES(?,?,?)");
$query->bind_param("iis",$userid,$postid,$text);
$query-execute();