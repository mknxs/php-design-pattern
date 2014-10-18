<?php

require_once 'ListDisplay.php';
require_once 'TableDisplay.php';


$data = array('Sampl Design Pattern', 'PHP Sample', 'Learn PHP');

$list_display = new ListDisplay($data);
$table_display = new TableDisplay($data);

$list_display->display();
$table_display->display();

?>