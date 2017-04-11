<?php
/* Smarty version 3.1.30, created on 2017-04-11 04:33:50
  from "C:\wamp\www\app\template\index\sortshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec408ec009b5_52419814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406da3c0dd2a6257caaed5f940b575308d5f9c68' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\index\\sortshow.html',
      1 => 1491875973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec408ec009b5_52419814 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['c']->value["cimgurl"];?>

        <?php echo $_smarty_tpl->tpl_vars['c']->value["ctitle"];?>

        <a href="index.php?m=index&f=comm&a=commshow&cid=<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value["cname"];?>
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
