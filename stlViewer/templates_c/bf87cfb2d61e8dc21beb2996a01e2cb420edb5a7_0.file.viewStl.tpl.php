<?php
/* Smarty version 3.1.33, created on 2018-11-06 23:34:44
  from 'E:\httpdocs\php\stlViewer\tpl\viewStl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be22514d14772_85830887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf87cfb2d61e8dc21beb2996a01e2cb420edb5a7' => 
    array (
      0 => 'E:\\httpdocs\\php\\stlViewer\\tpl\\viewStl.tpl',
      1 => 1541547282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be22514d14772_85830887 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Created on Nov 4, 2018 3:05:56 PM -->

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>STL Viewer</title>
    <meta name="GENERATOR" content="Arachnophilia 5.5"/>
    <meta name="FORMATTER" content="Arachnophilia 5.5"/>
  </head>

  <body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
    <div align="center">
      <iframe height=580 width="100%" src="stl_viewer/viewStlFrame.php?filepath=<?php echo $_smarty_tpl->tpl_vars['fullPath']->value;?>
" name="iframe_viewStl">
      </iframe>
      <br/>
      <br/>
      <button type="button" onclick="Javascript: self.close();">Close</button>
    </div>
  </body>
</html>
<?php }
}
