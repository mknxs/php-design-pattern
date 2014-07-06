<?php
require_once "ReaderFactory.php";

$filename = "Music.csv";

$factory = new ReaderFactory();
$data = $factory->create($filename);
$data->read();
$data->display();

?>
