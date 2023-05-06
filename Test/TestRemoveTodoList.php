<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Eko");
addTodoList("Paijo");
addTodoList("Joko");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(1);

showTodoList();

$succes = removeTodoList(3);
var_dump($succes);

showTodoList();