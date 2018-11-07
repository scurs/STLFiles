<?php

/**
 * @author Luca Rainone 
 * @copyright 2018
 */

$fullStlPath = (isset($_GET["filepath"])) ? $_GET["filepath"] : "";

$fullStlPath = str_replace(array("%2E", "%2F"), array(".", "/"), $fullStlPath);

?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Created on Nov 4, 2018 3:47:39 PM -->

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>STL Viewer</title>
    <meta name="GENERATOR" content="Arachnophilia 5.5"/>
    <meta name="FORMATTER" content="Arachnophilia 5.5"/>
    <script src="/stl_viewer/stl_viewer.min.js"></script>
  </head>

  <body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
    <div id="stl_cont" style="width:500px;height:550px;margin:0 auto;"></div>
    <!--div id="stl_cont"></div-->
    <script language="Javascript">
      <!--
      var stl_viewer = new StlViewer(
        document.getElementById("stl_cont"),
        {
          zoom:12,
          auto_rotate:true,
          models: [
           {id:0, filename:"<?php print $fullStlPath; ?>", rotationx:5, rotationy:5, rotationz:5}
          ] 
        }
      );
      // -->
    </script>
  </body>
</html>
 