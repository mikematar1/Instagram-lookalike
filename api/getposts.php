<?php 
include("connection.php");
session_start();
$userid = $_SESSION["userid"];
$query = $conn->prepare("SELECT * FROM posts p,users u WHERE u.id=p.userid AND p.userid IN (SELECT users.id FROM users,follows WHERE users.id=follows.user2id AND follows.user1id=?)");
$query->bind_param("i",$userid);
$query->execute();
$result = $query->get_result();
$response=[];
while($row = $result->fetch_assoc()){
    $response[]=$row;
}
echo json_encode($response);
