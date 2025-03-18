<?php

require_once __DIR__ ."/../Model/TodoList.php";
require_once __DIR__ ."/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ ."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ ."/../BusinessLogic/AddTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khaneddy");
addTodoList("Budi");
addTodoList("Joko");    

showTodoList(); 

removeTodoList(3); 
showTodoList();

removeTodoList(1); 
showTodoList();

$success = removeTodoList(4);
var_dump($success);
