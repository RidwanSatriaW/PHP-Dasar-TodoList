<?php

require_once __DIR__."/../View/ViewremoveTodolist.php";
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../Businesslogic/showTodoList.php";
require_once __DIR__."/../Businesslogic/addTodoList.php";

addTodoList("kasino");
addTodoList("dono");
addTodoList("indro");
addTodoList("lala");

showTodoList();

viewremoveTodoList();

showTodoList();