<?php

// conection to data base
class conection {
  private $server = "localhost";
  private $user = "id21395081_niicoph";
  private $password = "Test_1515";
  private $conection;

  public function __construct() {
      try {
          $this->conection = new PDO("mysql:host=$this->server;dbname=id21395081_logniicoph", $this->user, $this->password);
          $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $error) {
          echo "Connection error: " . $error->getMessage();
      }
  }

  public function execute($sql) {
      $this->conection->exec($sql);
      return $this->conection->lastInsertId();
  }

  public function query($sql) {
      $query = $this->conection->prepare($sql);
      $query->execute();
      return $query->fetchAll();
  }

  public function prepare($sql) {
      return $this->conection->prepare($sql);
  }

  public function close() {
      $this->conection = null;
  }
}



?>