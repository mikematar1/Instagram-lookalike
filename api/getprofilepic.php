<?php
include("connection.php");
session_start();
$userid = $_SESSION["userid"];
$query = $conn->prepare("SELECT image FROM users WHERE id=?");
$query->bind_param("i",$userid);
$query->execute();
$result = $query->get_result();
$image = $result->fetch_array();
$image = $image['image'];
echo base64_encode($image);