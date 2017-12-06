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

// request to get the user number

public function getUserNumber($userNumber){
  $response=$this->db->prepare('SELECT * FROM usersList WHERE userNumber=:userNumber');
  $response->execute(array(
    'userNumber'=> $userNumber
  ));
  $user=$response->fetch(PDO::FETCH_ASSOC);
  $user= new User($user);
  return $user;
}

// request to get user id

public function getUserId($idUser){
  $response=$this->db->prepare('SELECT * FROM usersList WHERE idUser=:idUser');
  $response->execute(array(
    'idUser'=> $idUser
  ));
  $user=$response->fetch(PDO::FETCH_ASSOC);
  $user= new User($user);
  return $user;
}

}

 ?>
