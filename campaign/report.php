<?php
include '../config/db.php';

$campaign_id = $_GET['campaign_id'];

$sql = "SELECT email, status FROM email_status WHERE campaign_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $campaign_id);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Campaign Report</h2>";
while ($row = $result->fetch_assoc()) {
    echo "Email: {$row['email']} - Status: {$row['status']}<br>";
}
?>