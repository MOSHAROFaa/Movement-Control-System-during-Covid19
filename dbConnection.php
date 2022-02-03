<?php
class DbConnection {
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "utm_mco";
  private $conn;

  function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
  }
  public function getDbConnection() {return $this->conn;}
}