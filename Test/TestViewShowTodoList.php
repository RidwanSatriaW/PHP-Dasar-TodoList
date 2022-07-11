<?php 

require_once __DIR__."/../View/ViewshowTodoList.php";
require_once __DIR__."/../BusinessLogic/addTodoList.php";

addTodoList("kasino");
addTodoList("dono");
addTodoList("indro");
addTodoList("lala");

viewShowTodoList();