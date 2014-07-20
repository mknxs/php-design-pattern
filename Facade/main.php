<?php
require_once "Order.php";
require_once "OrderItem.php";
require_once "ItemDao.php";
require_once "OrderManager.php";

$order_item1 = new OrderItem(new Item(1, "apple", 50), 5);
$order_item2 = new OrderItem(new Item(2, "orange", 100), 2);
$order_item3 = new OrderItem(new Item(3, "peach", 200), 1);

$order = new Order();
$order->addItem($order_item1);
$order->addItem($order_item2);
$order->addItem($order_item3);

OrderManager::order($order);

?>