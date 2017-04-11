<?php
/* Smarty version 3.1.30, created on 2017-04-10 08:27:21
  from "C:\wamp\www\app\template\index\sort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eb25c9b0b2f3_35189112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9ab878fe20bbad3ee1730299c20c5b2ccf23f7' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\index\\sort.html',
      1 => 1491805574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eb25c9b0b2f3_35189112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
<meta name="viewport" content="width=device-width,initial-scale=0.5,minimum-scale=0.5,maximum-scale=0.5,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">
</head>
<body>
    <div class="ywm-header">
    <img src="<?php echo IMG_PATH;?>
/hearder.png" alt="" class="header-img">
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortlist']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['s']->value["simgurl"];?>

        <?php echo $_smarty_tpl->tpl_vars['s']->value["shit"];?>

        <a href="index.php?m=index&f=sort&a=sortshow&sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value["sname"];?>
</a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!-- 选项卡 -->
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
