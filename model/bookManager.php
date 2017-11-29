<?php

class BookManager {
  private $db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function getDb()
  {
      return $this->db;
  }

  /**
   * @param mixed $db
   */
  public function setDb($db)
  {
      $this->db = $db;
  }
}



 ?>
