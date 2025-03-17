<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php"; 
require_once "../BusinessLogic/AddTodoList.php"; 

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khaneddy");


viewShowTodoList();