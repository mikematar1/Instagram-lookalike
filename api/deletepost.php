<?php 
include("connection.php");
session_start();
$userid=$_SESSION["userid"];
$postid = $_POST["postid"];
$query = $conn->prepare("DELETE FROM posts WHERE id=?");
$query->bind_param("i",$postid);
$query->execute();