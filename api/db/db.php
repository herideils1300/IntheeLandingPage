<?php
class Db
{
       private $db;
       private $database = "UsersDatabase";
       

       function __construct($hostname, $username, $password)
       {
              $this->db = new mysqli($hostname, $username, $password, $this->database);
              $this->db->connect();
       }

       function connect(){
              $this->db->connect();
       }

       function disconnect(){
              $this->db->close();
       }

       function query($sql){
              $result = $this->db->query($sql);

              $all_rows = $result->fetch_all();
              for($i = 0; $i < count($all_rows); $i++){
                     $row = $all_rows[$i];
                     yield $row;
              }
       }      
}