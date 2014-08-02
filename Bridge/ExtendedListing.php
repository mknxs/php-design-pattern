<?php
require_once "Listing.php";

class ExtendedListing extends Listing {

	public function __construct($data_source) {
		parent::__construct($data_source);
	}

	public function readWithEncode() {
		return htmlspecialchars($this->read(), ENT_QUOTES);
	}
}

?>