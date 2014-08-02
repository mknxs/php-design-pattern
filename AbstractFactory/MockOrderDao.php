<?php
require_once "OrderDao.php";
require_once "Order.php";

class MockOrderDao implements OrderDao {

	public function findById($order_id) {
		$order = new Order("999");
		for($i=1;$i<=3;$i++) {
			$order->addItem(new Item($i, "dummy".$i));
		}
		return $order;
	}	
}

?>