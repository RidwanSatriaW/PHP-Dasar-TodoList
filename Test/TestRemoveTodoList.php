<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/removeTodoList.php";
require_once __DIR__."/../BusinessLogic/addTodoList.php";
require_once __DIR__."/../BusinessLogic/showTodoList.php";



addTodoList("ridwan");
addTodoList("satria");
addTodoList("wicaksana");
addTodoList("demak");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(5);

showTodoList();

