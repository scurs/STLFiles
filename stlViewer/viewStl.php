<?php

/**
 * @author Luca Rainone
 * @copyright 2018
 */
 
include("lib/Smarty/libs/Smarty.class.php");

$fullStlPath = (isset($_GET["filepath"]))
                 ? str_replace(array(".", "/"), array("%2E", "%2F"), $_GET["filepath"])
                 : "";

$smarty = new Smarty();

$smarty->assign("fullPath", $fullStlPath);

$smarty->display("tpl/viewStl.tpl");

?>