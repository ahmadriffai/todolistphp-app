<?php
/**
 * Menambah Todo ke list
 */
function addTodoList($todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}