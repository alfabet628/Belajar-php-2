<?php

require_once __DIR__ ."/../Model/TodoList.php";
require_once __DIR__ ."/../BusinessLogic/AddTodoList.php";
require_once __DIR__ ."/../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khanedy");

var_dump ($todoList);

showTodoList();

