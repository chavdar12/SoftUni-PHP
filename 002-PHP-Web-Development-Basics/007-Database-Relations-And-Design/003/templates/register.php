<?php
include '../db/db.php';
include_once '../index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    $pass_hash = password_hash($password, PASSWORD_ARGON2I);
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    try {
        $statement = $db->prepare($query);
        $result = $statement->execute([$username, $pass_hash]);

        if ($result) {
            header("Location: login.php");
            exit;
        } else {
            echo "Error registering user.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
