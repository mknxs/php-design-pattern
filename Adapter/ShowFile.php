<?php

class ShowFile {

  private $flename;

  public function __construct($filename) {
    if (!is_readable($filename)) {
      throw new Exception("file '" . $filename . "' is not radable!");
    }
    $this->filename = $filename;
  }


  public function showPlain() {
    echo "<pre>";
    echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES);
    echo "</pre>";
  }


  public function showHighlight() {
    highlight_file($this->filename);
  }


}

?>
