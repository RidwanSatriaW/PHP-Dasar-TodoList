<?php

// menampilkan todo di list

function showTodoList()
{

    global $todoList;

    echo "TodoList" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}