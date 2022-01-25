<?php

spl_autoload_register();
$home = new classes\home();
echo $home->get();

$home = new views\home();
echo $home->get();

$home = new models\home();
echo $home->get();

$all = new classes\all();
echo $all->get();

$all = new views\all();
echo $all->get();

$all = new models\all();
echo $all->get();
