<?php

require_once __DIR__ ."/../Helper/input.php";
require_once __DIR__ ."/../View/ViewAddTodoList.php";
require_once __DIR__ ."/../View/ViewRemoveTodoList.php";
require_once __DIR__ ."/../BusinessLogic/ShowTodoList.php";
/*
* tampilan menampilkan todo di list
*/
function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;  
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo". PHP_EOL;
        echo "X. Keluar". PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak Dimengerti". PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi". PHP_EOL;
}