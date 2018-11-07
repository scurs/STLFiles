<?php
/* Smarty version 3.1.33, created on 2018-11-06 23:20:05
  from 'E:\home\usr\php\stlViewer\tpl\stlCalc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be221a502c732_60730605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c852145516b0a71bba5d1d0bfa42e9407da965a8' => 
    array (
      0 => 'E:\\home\\usr\\php\\stlViewer\\tpl\\stlCalc.tpl',
      1 => 1541544710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be221a502c732_60730605 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
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
      <?php if ($_smarty_tpl->tpl_vars['generalFailureErr']->value == '') {?>
      <?php if ($_smarty_tpl->tpl_vars['errMsg1']->value == '') {?>
      <span class="bigLabel">X size: </span><span class="bigData"><?php echo $_smarty_tpl->tpl_vars['xSize']->value;?>
</span>
      <br/>
      <span class="bigLabel">Y size: </span><span class="bigData"><?php echo $_smarty_tpl->tpl_vars['ySize']->value;?>
</span>
      <br/>
      <span class="bigLabel">Z size: </span><span class="bigData"><?php echo $_smarty_tpl->tpl_vars['zSize']->value;?>
</span>
      <?php } else { ?>
      <span class="errStyle"><?php echo $_smarty_tpl->tpl_vars['errMsg1']->value;?>
</span>
      <?php }?>
      <br/>
      <br/>
      <?php if ($_smarty_tpl->tpl_vars['errMsg2']->value == '') {?>
      <span class="bigLabel">Volume: </span><span class="bigData"><?php echo $_smarty_tpl->tpl_vars['vol']->value;?>
</span>
      <?php } else { ?>
      <span class="errStyle"><?php echo $_smarty_tpl->tpl_vars['errMsg2']->value;?>
</span>
      <?php }?>
      <?php } else { ?>
      <span class="errStyle"><?php echo $_smarty_tpl->tpl_vars['generalFailureErr']->value;?>
</span>
      <?php }?>
      <br/>
      <br/>
      <a href="Javascript: self.close();"><span class="bigLnk">Ok</span></a>
    </div>
  </body>
</html>
<?php }
}
