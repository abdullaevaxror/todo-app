<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';

require 'helpers.php';

$todo = new Todo();
if ($uri == '/') {
    $todos = $todo->get();
    view('home', [
        'todos' => $todos
    ]);
} elseif ($uri == '/store') {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
//            var_dump($_POST['title']);
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /');
        exit();
    }
} elseif ($uri == '/complete') {
    var_dump($_GET);
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);
        header('Location: /');
        exit();
    }
} elseif ($uri == '/in-progress') {
    if (!empty($_GET['id'])) {
        $todo->in_progress($_GET['id']);
        header('Location: /');
        exit();
//    } else {
//        header('Location: /');
    }
}elseif ($uri == '/pending') {
    if (!empty($_GET['id'])) {
        $todo->pending($_GET['id']);
        header('Location: /');
        exit();
    }
}
