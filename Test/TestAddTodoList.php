<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Dwi");
addTodoList("Saputra");

var_dump($todoList);