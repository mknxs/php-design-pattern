<?php
require_once "DataSource.php";

class Listing {

	private $data_source;

	public function __construct($data_source) {
		$this->data_source = $data_source;
	}

	public function open() {
		$this->data_source->open();
	}

	public function read() {
		return $this->data_source->read();
	}

	public function close() {
		return $this->data_source->close();
	}
}

?>