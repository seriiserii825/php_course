<?php

require_once __DIR__.'/autoload.php';

$db = new \App\Db();

$res = $db->query('SELECT * FROM articles');

var_dump($res);
