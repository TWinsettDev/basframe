<?php
    OB_STARTING();
    session_start();
    
    
    private function dConn()
    {
      try{
        $u = "username"; // The username you want to use to access db
        $p = ""; // The password to access the db
        $db = new PDO('mysql:host=localhost;dbname=main',$u,$p);
      } catch {
        print "ERROR!: " . $e -> getMessage() . "<br/ >";
        die();
      }
      $db = null;
    }
    
    public function clean($string)
    {
      $c = htmlentities($string, ENT_QUOTES);
    }



?>
