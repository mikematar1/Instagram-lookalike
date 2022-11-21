<?php
include("connection.php");
session_start();
$userid = $_SESSION["userid"];
$targeruserid = $_POST["targetid"];
$query = $conn->preapre("INSERT INTO follows(user1id,user2id) VALUES(?,?)");
$query->bind_param("ii",$userid,$targetuserid);
$query->execute();
