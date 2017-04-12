<?php
namespace GeorgiaPHP;

class DB {
   private static $instance = null;

   public static function get() {
    $host        = "ec2-52-6-170-45.compute-1.amazonaws.com";
    $port        = "5432";
    $dbname      = "d20sc4h8rhdj0g";
    $user        = "u174jeoakvsvrt";
    $pass        = "p485136ab3ac80e9f788acfd904fec8d6b0266b65379c23d802f127a393c7fbe4";

    if(self::$instance == null)
     {
        try
         {
             self::$instance = new \PDO("pgsql:host=$host;dbname=$dbname;", $user, $pass);
         } 
         catch(PDOException $e)
         {
             // Handle this properly
             throw $e;
         }
     }
     return self::$instance;
    }
  }
?>
