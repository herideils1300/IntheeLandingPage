<?php
class Db
{
       private $db;
       
       function __construct($hostname, $username, $password, $port=3306, $database="LandingPageDatabase")
       {
              try{
                     $this->db = mysqli_connect($hostname, $username, $password, $database);
              }catch(Exception $e){
                     echo "Could not connect to database. Error " . $e;
              }
              
       }

       function connect(){
              $is_connected = mysqli_ping($this->db);
              return $is_connected;
       }

       function disconnect(){
              $is_closed = mysqli_close($this->db);
              return $is_closed;
       }

       function execute_prepared($sql, $params = []){
              $prepared_statement = mysqli_prepare($this->db, $sql);

              $result = mysqli_execute($prepared_statement, $params);

              if(!is_bool($result)){
                     throw new Exception("The query is not made for update execution.");
              }

              if(!$result){
                     throw new Exception("An error occured while executing the querry.");
              }

              return $result;
       }

       function query($sql){
              try{
                     $result = mysqli_query($this->db, $sql, MYSQLI_STORE_RESULT);

                     
                     if ($result == false){
                            throw new Exception("Error when executing the querry". mysqli_error($this->db));
                     }

                     $all_rows = $result->fetch_all();


       
                     for($i = 0; $i < count($all_rows); $i++){
                            $row = $all_rows[$i];
                            yield $row;
                     }

              }catch (Exception $e){
                     echo "The sql query failed:". $e;
              }

             
       }
       
       function execute($sql){
              $result = mysqli_query($this->db, $sql);

              if(!is_bool($result)){
                     throw new Exception("The query is not made for update execution.");
              }

              if(!$result){
                     throw new Exception("An error occured while executing the querry.");
              }


              return $result;
       }

}