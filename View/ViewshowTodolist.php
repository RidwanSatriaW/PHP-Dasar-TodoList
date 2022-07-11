<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/showTodoList.php";
require_once __DIR__."/../View/ViewaddTodolist.php";
require_once __DIR__."/../View/ViewremoveTodoList.php";
require_once __DIR__."/../Helper/input.php";


function viewShowTodoList(){
    while(true){
    
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("PILIH");

        if($pilihan == "1"){
            viewaddTodoList();
        }else if ($pilihan == "2"){
            viewremoveTodoList();
        }else if($pilihan =="x"){
            break;
        }else{
            echo "pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "sampai jumpa lagi";
}