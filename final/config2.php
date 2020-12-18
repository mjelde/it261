<?php
// my config file or the REGISTRATION PAGE  
ob_start();  // prevents header errors 
define('DEBUG', 'FALSE');   // we want to see our errors

include('credentials1.php');





















// Please remember this is placed at the bottom of config file

function myerror($myFile, $myLine, $errorMsg)
{
  if(defined('DEBUG') && DEBUG)  {
      
      echo "Error in file: <b> ".$myFile."</b> on line: <b> ".$myLine." </b><br />";
      echo "Error message: <b> ".$errorMsg."</b><br />";
      die();
  }  else {
      echo "I am sorry we have encountered an error. ";
      die();
  }
}






