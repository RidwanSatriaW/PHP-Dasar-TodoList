<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/addTodoList.php";

addTodoList("Ridwan");
addTodoList("Satria");
addTodoList("Wicaksana");

var_dump($todoList);