<?php


require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Ahmad");
addTodoList("Rifai");

var_dump($todoList);