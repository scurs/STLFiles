<?php
/* Smarty version 3.1.33, created on 2018-11-06 23:19:55
  from 'E:\home\usr\php\stlViewer\tpl\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be2219bec75f8_14247692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c60728ae59ed6ac57e246b97c44eea5b83d20d' => 
    array (
      0 => 'E:\\home\\usr\\php\\stlViewer\\tpl\\home.tpl',
      1 => 1541545515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be2219bec75f8_14247692 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Created on Nov 1, 2018 1:30:44 PM -->

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>STL Viewer</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <meta name="GENERATOR" content="Arachnophilia 5.5"/>
    <meta name="FORMATTER" content="Arachnophilia 5.5"/>
    <?php echo '<script'; ?>
 language="JavaScript">
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
    <?php echo '</script'; ?>
> 
  </head>

  <body bgcolor="#FF99FF" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">
    <div align="center"><h1>STL Viewer</h1>

      <form enctype="multipart/form-data" action="home.php?op=upload" method="POST">
    
        <br/>
        <?php if ($_smarty_tpl->tpl_vars['errMsg']->value != '') {?>
        <span class="errStyle"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</span>
        <br/>
        <br/>
        <?php }?>
    
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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items0']->value, 'i', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
          <tr bgcolor="<?php echo $_smarty_tpl->tpl_vars['i']->value['toggleColour'];?>
">
            <td>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['fullPath'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['fileName'];?>
</a></td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: viewStl('<?php echo $_smarty_tpl->tpl_vars['i']->value['fullPath'];?>
');">View</button>
            </td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: openCalcPage('<?php echo $_smarty_tpl->tpl_vars['i']->value['fullPath'];?>
');">Calc</button>
            </td>
            <td bgcolor="#FF99FF"></td>
            <td bgcolor="#FF99FF">
              <button type="button" onclick="Javascript: delFile('<?php echo $_smarty_tpl->tpl_vars['i']->value['fullPath'];?>
');">Del</button></td>
          </tr>
          <tr>
            <td colspan=7><img src="img/empty.gif" width="350" height="2"/></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
      </form>
    </div> 
  </body>
</html>
<?php }
}
