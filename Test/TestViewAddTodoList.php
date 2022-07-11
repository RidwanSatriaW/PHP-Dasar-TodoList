<?php

require_once __DIR__."/../View/ViewaddTodolist.php";
require_once __DIR__."/../Businesslogic/showTodoList.php";
require_once __DIR__."/../Businesslogic/addTodoList.php";


addTodoList("kasino");
addTodoList("dono");
addTodoList("indro");
addTodoList("lala");

viewAddTodoList();

showTodoList();