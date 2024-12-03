<?php

//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';
$router = new Router();
$todo = new Todo();

$router->get('/todos/{id}/edit', function ($todoId) use($todo) {
    echo 'Edit the task: ' . $todoId;
    $getTodo = $todo->getTodo($todoId);
    view('edit', [
        'todo'=>$getTodo
    ]);
});

$router->get('/', function () {
    view('home');
});
$router->get('/todos', function () use ($todo) {
    $todos = $todo->getAllTodos();
    view('todo', [
        'todos' => $todos
    ]);
});

$router->post('/todos', function () use ($todo){
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /todos');
        exit();
    }
});

//var_dump(123);
$router->get('/complete/{id}', function ($todoId) use ($todo) {
        $todo->complete($todoId);
        header('Location: /todos');
        exit();

});

$router->get('/in-progress/{id}', function ($todoId) use ($todo) {
        $todo->in_progress($todoId);
        header('Location: /todos');
        exit();
});

$router->get('/pending/{id}', function ($todoId) use ($todo) {
        $todo->pending($todoId);
        header('Location: /todos');
        exit();
});
$router->get('/todos/{id}/delete', function ($todoId) use ($todo) {
    $todo->destrov($todoId);
    redirect('/todos');
});
