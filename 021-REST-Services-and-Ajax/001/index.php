<?php
header("Content-Type: application/json");

$db = new PDO("mysql:dbname=php_web_test;host=localhost", "root", "toor");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function respond($data, $statusCode = 200): void
{
    http_response_code($statusCode);
    echo json_encode($data, JSON_PRETTY_PRINT);
    exit;
}

$uri = str_replace('SoftUni_PHP_Web_Basics/25.%20REST%20Services%20and%20Ajax/Lectures/Half1/', '', $_SERVER['REQUEST_URI']);

if (preg_match("/^\/users$/", $uri)) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $db->query("SELECT * FROM users");
        respond($stmt->fetchAll(PDO::FETCH_ASSOC));
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $requestPayload = file_get_contents('php://input');
        $user = json_decode($requestPayload, true);

        if (isset($user['password'])) {
            $user['password'] = password_hash($user['password'], PASSWORD_BCRYPT);
        }

        $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $res = $stmt->execute([$user['username'], $user['password']]);

        if ($res) {
            $user['id'] = $db->lastInsertId();
            respond($user, 201);
        } else {
            respond(['error' => 'Failed to create user'], 400);
        }
    }
} elseif (preg_match("/^\/users\/(\d+)$/", $uri, $matches)) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$matches[1]]);
        respond($stmt->fetch(PDO::FETCH_ASSOC));
    } elseif ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$matches[1]]);
        if (empty($stmt->fetch(PDO::FETCH_ASSOC))) {
            respond([], 404);
        }

        $requestPayload = file_get_contents('php://input');
        $user = json_decode($requestPayload, true);
        $id = $matches[1];

        $query = "UPDATE users SET ";
        foreach (array_keys($user) as $column) {
            $query .= $column . ' = ?, ';
        }

        $query = rtrim($query, ', ');
        $query .= ' WHERE id = ?';
        $stmt = $db->prepare($query);
        $res = $stmt->execute(array_merge(array_values($user), [$id]));

        if ($res) {
            respond(array_merge(['id' => $db->lastInsertId()], $user), 200);
        } else {
            respond(['error' => 'Failed to update user'], 400);
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$matches[1]]);
        respond([], 200);
    }
} else {
    respond(['error' => 'Invalid endpoint'], 404);
}