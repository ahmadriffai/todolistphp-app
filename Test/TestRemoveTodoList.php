<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";


addTodoList("Ahmad");
addTodoList("Rifai");
addTodoList("Ganteng");
addTodoList("Banget");
addTodoList("Aha");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$msg = removeTodoList(4);

var_dump($msg);

showTodoList();