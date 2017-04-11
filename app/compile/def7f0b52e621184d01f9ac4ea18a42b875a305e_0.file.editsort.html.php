<?php
/* Smarty version 3.1.30, created on 2017-04-06 10:45:56
  from "C:\wamp\www\app\template\admin\editsort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e60044e1e4a1_52337539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def7f0b52e621184d01f9ac4ea18a42b875a305e' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\editsort.html',
      1 => 1491468350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e60044e1e4a1_52337539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="index.php?m=admin&f=sort&a=editsortInfo" method="post">
    修改推荐位：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value['sname'];?>
" name="posname"  />
    <input type="hidden" name="posid" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value['sid'];?>
">
    <br/>
    <input type="submit" value="修改" id="submit">
</form>
</body>
</html><?php }
}
