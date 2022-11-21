<?php
include("connection.php");

$username=$_POST["username"];
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$password=$_POST["password"];
$email=$_POST["email"];
$image=$_FILES["image"]["tmp_name"];
$imagecontent = addslashes(file_get_contents($image));

$query = $conn->prepare("INSERT INTO users(username,firstname,lastname,password,email,image) VALUES(?,?,?,?,?,?)");
$query->bind_param("ssssss",$username,$fname,$lname,$password,$email,$image);
$query->execute();
header('Location: http://localhost/instagram-lookalike/website/index.html');