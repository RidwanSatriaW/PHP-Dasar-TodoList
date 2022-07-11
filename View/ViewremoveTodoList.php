<?php

require_once __DIR__."/../Helper/input.php";
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/removeTodoList.php";

function viewremoveTodoList(){
    echo "menghapus todo" . PHP_EOL;


    $pilihan = input("nomor");

    if ($pilihan == "x") {
        echo " batal hapus todo";
    }else{
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses hapus nomor $pilihan" . PHP_EOL;
        }else{
            echo "gagal hapus $pilihan" . PHP_EOL;
        }
    }

   
}