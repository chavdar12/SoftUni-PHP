<?php
include './config.php';

function getBooks()
{
    $dbConn = getDbConnection();
    $sql = "SELECT * FROM book";
    return $dbConn->query($sql);
}

function addBook($title, $author, $publisher, $year): bool
{
    $dbConn = getDbConnection();
    $stmt = $dbConn->prepare("INSERT INTO book (title, author, publisher, year) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $title, $author, $publisher, $year);
    return $stmt->execute();
}

function updatePublisher($oldPublisher, $newPublisher): bool
{
    $dbConn = getDbConnection();
    $stmt = $dbConn->prepare("UPDATE book SET publisher = ? WHERE publisher = ?");
    $stmt->bind_param('ss', $newPublisher, $oldPublisher);
    return $stmt->execute();
}

function deleteBooksByPublisher($publisher): bool
{
    $dbConn = getDbConnection();
    $stmt = $dbConn->prepare("DELETE FROM book WHERE publisher = ?");
    $stmt->bind_param('s', $publisher);
    return $stmt->execute();
}