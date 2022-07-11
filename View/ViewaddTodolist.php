<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/addTodoList.php";
require_once __DIR__."/../Helper/input.php";

function viewaddTodoList(){
    echo "menambah todo" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "batal add todo";
    }else{
        addTodoList($todo);
    }
}