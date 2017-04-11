<?php
/* Smarty version 3.1.30, created on 2017-04-06 09:15:30
  from "C:\wamp\www\app\template\admin\statuheadline.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5eb123c27e0_18128414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767f38ba746e9bfc9f28d345d420c547896ad1c3' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\statuheadline.html',
      1 => 1491461672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5eb123c27e0_18128414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/statucon.css">
</head>
<body>
    <h3>
        文章标题：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["htitle"];?>

    </h3>
    <p class="info">
        <span>时间：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["htime"];?>
</span>
    </p>
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["hcontent"];?>

    </div>
</body>
</html><?php }
}
