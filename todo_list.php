<?php
session_start();

class TodoList {
    private $tasks =[];

    public function __construct(){
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function addTask($task){
        $this->tasks[] = $task;
        $this->saveTask();
    }

    public function removeTask($index){
        if(isset($this->tasks[$index])){
            unset($this->tasks[$index]);

            $this->tasks = array_values($this->tasks);
            $this->saveTask();
        }
    }

    public function getTasks(){
        return $this->tasks;
    }

    public function saveTask(){
        $_SESSION['tasks'] = $this->tasks;
    }
}
    $todo = new TodoList();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST['add'])&&!empty($_POST['task'])){
            $todo->addTask($_POST['task']);
        }
        elseif(isset($_POST['delete'])){
            $todo->removeTask($_POST['index']);
        }
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Todo</title>
    <style>
        .task-item{
            display: flex;
            align-items: center;
            margin: 5px 0;
        }
        .task-item form{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    <form method="POST">
        <input type="text" name="task" placeholder="Add a task">
        <button type="submit" name="add">Add</button>
    </form>

    <ui>
        <?php foreach($todo->getTasks() as $index => $task): ?>
            <li class="task-item">
                <?php echo htmlspecialchars($task) ?>
                <form method="POST">
                    <input type="hidden" name="index" value="<?= $index; ?>">
                    <button type="submit" name="delete">Remove</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ui>
</body>
</html>

