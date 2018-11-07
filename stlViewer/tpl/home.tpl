<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Created on Nov 1, 2018 1:30:44 PM -->

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>STL Viewer</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <meta name="GENERATOR" content="Arachnophilia 5.5"/>
    <meta name="FORMATTER" content="Arachnophilia 5.5"/>
    <script language="JavaScript">
    <!--
      function viewStl(filePath) {
      
        var path = filePath.replace(/\./, "%2E").replace(/\//, "%2F");
        var wPars = "width=750,height=650";
        window.open("viewStl.php?filepath=" + path, "_blank",
                    wPars);
        return false;
        
      }

      function delFile(filePath) {
      
        if (confirm("Are you sure to delete the selected file ?")) {
          var path = filePath.replace(/\./, "%2E").replace(/\//, "%2F");
          window.open("delFile.php?filepath=" + path, "_self");
        }
        return false;
        
      }

      function openCalcPage(filePath) {
      
        var path = filePath.replace(/\./, "%2E").replace(/\//, "%2F");
        var wPars = "width=450,height=250";
        window.open("stlCalc.php?filepath=" + path, "_blank",
                    wPars);
        return false;
      }

    // -->
    </script> 
  </head>

  <body bgcolor="#FF99FF" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">
    <div align="center"><h1>STL Viewer</h1>

      <form enctype="multipart/form-data" action="home.php?op=upload" method="POST">
    
        <br/>
        {if $errMsg != ""}
        <span class="errStyle">{$errMsg}</span>
        <br/>
        <br/>
        {/if}
    
        <table cellspacing="0" cellpadding="0" border="0" width="400">
          <tr>
            <td width="55%"><img src="img/empty.gif" width="350" height="1"/></td>
            <td width="1%"><img src="img/empty.gif" width="19" height="1"/></td>
            <td width="14%"><img src="img/empty.gif" width="55" height="1"/></td>
            <td width="1%"><img src="img/empty.gif" width="3" height="1"/></td>
            <td width="14%"><img src="img/empty.gif" width="55" height="1"/></td>
            <td width="1%"><img src="img/empty.gif" width="3" height="1"/></td>
            <td width="14%"><img src="img/empty.gif" width="60" height="1"/></td>
          </tr>
          <tr>
            <td colspan=6>
              Add STL file: <input type="file" name="uploadFile">
              <input type="submit" value="Upload"/>
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan=7><img src="img/empty.gif" width="350" height="5"/></td>
          </tr>
          {foreach from=$items0 key=id item=i}
          <tr bgcolor="{$i.toggleColour}">
            <td>&nbsp;<a href="{$i.fullPath}">{$i.fileName}</a></td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: viewStl('{$i.fullPath}');">View</button>
            </td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: openCalcPage('{$i.fullPath}');">Calc</button>
            </td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: delFile('{$i.fullPath}');">Del</button></td>
          </tr>
          <tr>
            <td colspan=7><img src="img/empty.gif" width="350" height="2"/></td>
          </tr>
          {/foreach}
        </table>
      </form>
    </div> 
  </body>
</html>
