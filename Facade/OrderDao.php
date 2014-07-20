<?php
require_once "Order.php";

class OrderDao {

	public static function createOrder($order) {
		foreach ($order->getItems() as $order_item) {
			echo "--------------------------";
            echo $order_item->getItem()->getId() . "\n";
            echo $order_item->getItem()->getName() . "\n";
            echo $order_item->getItem()->getPrice() . "\n";
            echo $order_item->getAmount() . "\n";
            echo ($order_item->getItem()->getPrice() * $order_item->getAmount()) . "\n";
        }
	}
}
?>