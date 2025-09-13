<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST["full_name"]);
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        die("❌ Passwords do not match!");
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (full_name, username, email, password_hash) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $username, $email, $password_hash);

    if ($stmt->execute()) {
        echo "✅ Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
