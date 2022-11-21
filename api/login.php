<?php
session_start();
include("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];
$query = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$query->bind_param("ss",$username,$password);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_array();
$response=[];
if(!$user){
    $response["found"]=false;
}else{
    $response["found"]=true;
    $_SESSION["userid"] = $user[2];
}
echo json_encode($response);