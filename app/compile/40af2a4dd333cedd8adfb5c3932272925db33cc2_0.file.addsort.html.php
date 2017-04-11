<?php
/* Smarty version 3.1.30, created on 2017-04-09 12:09:05
  from "F:\wamp\www\app\template\admin\addsort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea0841b6ccd4_03949619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40af2a4dd333cedd8adfb5c3932272925db33cc2' => 
    array (
      0 => 'F:\\wamp\\www\\app\\template\\admin\\addsort.html',
      1 => 1491732419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea0841b6ccd4_03949619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/addsort.css">
</head>
<body>
	<form action="index.php?m=admin&f=sort&a=addsortInfo" method="post">
    	已有分类：<select name="sort" id="addsort">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </select><br/>
        分类名称：<input type="text" name="sname"class="addsort"><br/>
        <input type="submit" value="添加" class="tianjia">
    </form>
</body>
</html><?php }
}
