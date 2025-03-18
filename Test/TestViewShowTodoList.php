<?php

require_once __DIR__ ."/../View/ViewShowTodoList.php";
require_once __DIR__ ."/../BusinessLogic/ShowTodoList.php"; 
require_once __DIR__ ."/../BusinessLogic/AddTodoList.php"; 

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khaneddy");


viewShowTodoList();