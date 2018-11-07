<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Created on Nov 6, 2018 9:10:53 PM -->

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>STL Viewer</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <meta name="GENERATOR" content="Arachnophilia 5.5"/>
    <meta name="FORMATTER" content="Arachnophilia 5.5"/>
  </head>

  <body bgcolor="#FFDD33" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">
    <div align="center">
      <br/>
      <br/>
      {if $generalFailureErr == ""}
      {if $errMsg1 == ""}
      <span class="bigLabel">X size: </span><span class="bigData">{$xSize}</span>
      <br/>
      <span class="bigLabel">Y size: </span><span class="bigData">{$ySize}</span>
      <br/>
      <span class="bigLabel">Z size: </span><span class="bigData">{$zSize}</span>
      {else}
      <span class="errStyle">{$errMsg1}</span>
      {/if}
      <br/>
      <br/>
      {if $errMsg2 == ""}
      <span class="bigLabel">Volume: </span><span class="bigData">{$vol}</span>
      {else}
      <span class="errStyle">{$errMsg2}</span>
      {/if}
      {else}
      <span class="errStyle">{$generalFailureErr}</span>
      {/if}
      <br/>
      <br/>
      <a href="Javascript: self.close();"><span class="bigLnk">Ok</span></a>
    </div>
  </body>
</html>
