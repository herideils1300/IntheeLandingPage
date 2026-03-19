<?php
class CsvReadWrite{

       private $file_path_devs = "../data/mail_developers.csv";
       private $file_path_gamers = "../data/mail_gamers.csv";

       public function return_all_instances($file_path = "devs"){
              //Returns all instances of the csv file
              $full_file_path = ($file_path == "devs") ? $this->file_path_devs : $this->file_path_gamers;
              $file_pointer = fopen($full_file_path, "r");
              $instances = fgetcsv($file_pointer);
              fclose($file_pointer);

              return $instances;
       }

       public function add_instance($instance, $file_path = null){

              $full_file_path = ($file_path == "devs") ? $this->file_path_devs : $this->file_path_gamers;

              if(!file_exists($full_file_path)){
                     // $dir_path = split("/", $this->file_path);
                     // array_pop($dir_path);
                     // $dir_path_string = $dir_path->join("/");
                     // mkdir($dir_path, 0777, true);
                     // file($this->file_path, FILE_TEXT);
                     exit();
              }

              //Getting the instances and adding a new one
              $full_instances = $this->return_all_instances();
              if(is_array($full_instances)){
                     array_push($full_instances, $instance);
              }else{
                     $full_instances = [$instance];
              }


              // Adding the new instances
              $file_pointer = fopen($full_file_path, "w");
              $instances = fputcsv($file_pointer, $full_instances);
              fclose($file_pointer);
       }
}