<?php

class UserManager {
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

// request to get all the users account

public function getAllUsers(){
  $response=$this->db->query('SELECT * FROM usersList');
  $users=$response->fetchAll(PDO::FETCH_ASSOC);
  foreach ($users as $key => $value) {
    $users[$key]= new User($value);
  }
  return $users;
}

}

 ?>
