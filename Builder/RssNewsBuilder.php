<?php

require_once 'NewsBuilder.php';

class RssNewsBuilder implements NewsBuilder {

	public function parse($url) {
		$data = simplexml_load_file($url);
		if ($data === FALSE) {
			throw new Exception('read data [' . htmlspecialchars($url, ENT_QUOTES) . '] failed!');
		}
	    $list = array();
		foreach ($data->item as $item) {
			$dc = $item->children('http://purl.org/dc/elements/1.1/');
			$list[] = new News($item->title, $item->link, $dc->date);
		}
		return $list;
	}
}

?>
