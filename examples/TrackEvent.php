<?php
require_once("../src/Danel.php");

$danel = new \Datartisan\Danel("PROJECT_TOKEN");
$danel->event('test', 1, 2, ['a'=>1, 'b'=>2]);
