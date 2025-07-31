<?php
include '../config/db.php';

$campaign_id = $_POST['campaign_id'];
$sql = "SELECT email FROM contacts WHERE campaign_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $campaign_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $email = $row['email'];
    // Simulate sending
    $status = "Sent";
    $track = "INSERT INTO email_status (campaign_id, email, status) VALUES (?, ?, ?)";
    $trackStmt = $conn->prepare($track);
    $trackStmt->bind_param("iss", $campaign_id, $email, $status);
    $trackStmt->execute();
}
echo "Emails simulated and tracked!";
?>