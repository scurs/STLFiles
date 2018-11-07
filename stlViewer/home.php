<?php

/**
 * @author Luca Rainone
 * @copyright 2018
 */
 
include("lib/Smarty/libs/Smarty.class.php");

function getFilesFromUploadDir() {
  
  global $UPLOAD_PATH;
  
  $files = scandir($UPLOAD_PATH);
  $r = array();
  
  for ($i = 0; $i < count($files); $i++)
    if (($files[$i] != ".") && ($files[$i] != "..")) 
      $r[$i] = array("toggleColour" => ((($i % 2) == 0) ? "#EEEEEE" : "#CCCCFF"),
                     "fullPath" => "/".$UPLOAD_PATH."/".$files[$i],
                     "fileName" => $files[$i]);
                   
  return $r;
}

include("consts.inc.php");

$errMsg = "";

if (isset($_GET["op"]) && ($_GET["op"] == "upload")) {
  
  // Upload another file
  if (!isset($_FILES["uploadFile"]) || !is_uploaded_file($_FILES["uploadFile"]["tmp_name"])) {

    $errMsg = "Upload Error !";

  } else {

    // Temporary file path
    $userfile_tmp = $_FILES["uploadFile"]["tmp_name"];

    // Original file name
    $userfile_name = $_FILES["uploadFile"]["name"];
    
    $file_ext = "";
    if (preg_match("/(\.[A-Za-z0-9]+)$/i", $userfile_name, $m) == 1)
      $file_ext = $m[1];
      
    if (strtolower($file_ext) == ".stl") {
      if (!move_uploaded_file($userfile_tmp, $UPLOAD_PATH."/".$userfile_name))
        $errMsg = "Upload Error !";
    } else {
      $errMsg = "Sorry, only STL files are allowed";
    }
  }
}

$smarty = new Smarty();

$smarty->assign("errMsg", $errMsg);

$smarty->assign("items0", getFilesFromUploadDir());

$smarty->display("tpl/home.tpl");

?>
