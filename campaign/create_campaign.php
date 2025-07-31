<?php
include '../config/db.php';
session_start();

$name = $_POST['name'];
$subject = $_POST['subject'];
$body = $_POST['body'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO campaigns (user_id, name, subject, body) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $user_id, $name, $subject, $body);
$stmt->execute();

echo "Campaign created!";
?>