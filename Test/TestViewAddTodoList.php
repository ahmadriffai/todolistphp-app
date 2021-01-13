<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Ahmad");
addTodoList("Rifai");
addTodoList("Ganteng");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();