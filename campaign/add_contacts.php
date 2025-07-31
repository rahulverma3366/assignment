<?php
include '../config/db.php';

$campaign_id = $_POST['campaign_id'];
$emails = explode(",", $_POST['emails']);

foreach ($emails as $email) {
    $email = trim($email);
    $sql = "INSERT INTO contacts (campaign_id, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $campaign_id, $email);
    $stmt->execute();
}
echo "Contacts added!";
?>