<?php
include '../config/db.php'; // Adjust path if needed
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$email || !$password) {
        die("Please enter the email and password.");
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // If using plain text (not secure), use direct comparison
        if ($password === $hashed_password) {
            $_SESSION['user_id'] = $user_id;

            //  Redirect to dashboard.php
            header("Location: ../dashboard.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}
?>
