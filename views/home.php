<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    body {
        background-image: url("https://img.freepik.com/premium-vector/dark-concrete-background-with-grunge-effect_278222-9641.jpg");
        background-size: cover;
        background-position: center;
    }

    .todo-body {
        max-width: 700px;
        box-shadow: 0 0 5px #ccc;
        background: #fff;
        border-radius: 8px;
    }

    .todo-text {
        font-weight: bold;
    }
</style>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ad adipisci amet consequatur
                dolorem
                ducimus ea fugit, natus officia omnis porro quaerat quisquam, quo quos recusandae repellendus sint unde
                voluptate?</p>
            <form method="POST" action="/store">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="title"
                    >
                    <input type="datetime-local" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="due_date"
                    >
                    <button class="btn btn-primary" id="button-addon2">Add</button>
                    <select name="status" id="" style="margin:0 20px;">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
            </form>
            <ul class="list-group-item">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An item
                    <button class="btn btn-outline-success">Done</button>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>