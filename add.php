<?php
require_once 'DB.php';

$title = $_POST['title'];
$status = $_POST['status'];
$due_date = $_POST["Y-m-d H:i:s"];

$sql = "INSERT INTO todos (title, status, due_date) VALUES (:title, :status, :due_date)";

$stmt = $pdo->prepare(query: $sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':due_date', $due_date);

$stmt->execute();

header("Location: index.php");