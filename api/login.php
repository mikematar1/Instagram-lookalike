<?php
include("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];
$query = $conn->prepare("SELECT id,username,password FROM users WHERE username=? AND password=?");
$query->bind_param("ss",$username,$password);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_array();
$response=[];
if(!user){
    $response["found"]=false;
}else{
    $response["found"]=$user;   
}
echo json_encode($response);