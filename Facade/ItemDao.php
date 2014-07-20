<?php
require_once "OrderItem.php";

class ItemDao {
	private static $instance;
	private $items;

	public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new ItemDao();
		}
		return self::$instance;
	}

	public function setAside($order_item) {
		echo "aside " . $order_item->getItem()->getName() . "\n";
	}	

}
?>