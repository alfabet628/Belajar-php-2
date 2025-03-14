<?php

/*
** menghapus todo di list
*/
function removeTodoList(int $number )
{
    global $todoList;

    unset($todoList[$number]);


    
}