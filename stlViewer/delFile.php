<?php

/**
 * @author Luca Rainone
 * @copyright 2018
 */

if (isset($_GET["filepath"])) {
  $delPath = $_SERVER['DOCUMENT_ROOT'].
             str_replace(array("%2E", "%2F"), array(".", "/"), $_GET["filepath"]);
  if (file_exists($delPath)) {
    if (unlink($delPath))
      header("location: home.php");
  }
}
  
print "<br/>Error deleting file<br/><br/><br/><a href=\"home.php\">Home</a>\n";

?>