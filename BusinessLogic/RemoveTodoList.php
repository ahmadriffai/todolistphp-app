<?php
/**
 * Menghapus todo dari list
 */
function removeTodoList($number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)){
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++ ){
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;

}