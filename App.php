<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/removeTodoList.php";
require_once "BusinessLogic/showTodoList.php";
require_once "BusinessLogic/addTodoList.php";
require_once "View/ViewaddTodolist.php";
require_once "View/ViewshowTodolist.php";
require_once "View/ViewremoveTodolist.php";
require_once "Helper/input.php";

echo "Aplikasi Todolist" .PHP_EOL;

viewShowTodoList();

