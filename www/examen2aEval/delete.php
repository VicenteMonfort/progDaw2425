<?php

require_once "autoload.php";

$cartera = new Agenda("data.csv");

$cartera->delete(isset($_GET['id']) ? $_GET['id'] : null);

header("location: list.php");