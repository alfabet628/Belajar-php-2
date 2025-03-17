<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawatn");
addTodoList("khannedy");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

showTodoList(); 

viewRemoveTodoList();

showTodoList();