<?php
require "DB.php";

class Todo
{
    public $pdo;

    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->conn;
    }

    public function store(string $title, string $dueDate)
    {
        $query = "INSERT INTO todos(title, status, due_date, created_at, upload_at)
                    VALUES (:title, 'pending', :due_date, NOW(), NOW())             
";
        $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }

    public function get()
    {
        $query = "SELECT * FROM todos";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }

    public function complete(int $id): bool
    {
        $query = "UPDATE todos set status='completed' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function in_progress(int $id): bool
    {
        $query = "UPDATE todos set status='in_progress' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
    public function pending(int $id): bool
    {
        $query = "UPDATE todos set status='pending' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }


}