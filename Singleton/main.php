<?php
require_once "SingletonSample.php";

$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo "\ninstance1 : " . $instance1->getID() . "\n";
echo "instance2 : " . $instance2->getID() . "\n";

$instance1_clone = clone $instance1;
?>
