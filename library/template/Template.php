<?php
class Template
{
     public static $instance = null;

     public function __construct()
     {
          include "header.php"; 
     }

     public function __destruct()
     {
          include "footer.php";
     }

     public static function applyTemplate()
     {
     if (self::$instance == null) {
          self::$instance = new Template();
          }
          return self::$instance;
     }
}