<?php

// menambahkan todo di list

function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}