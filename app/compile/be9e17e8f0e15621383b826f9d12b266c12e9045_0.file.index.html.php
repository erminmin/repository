<?php
/* Smarty version 3.1.30, created on 2017-04-11 05:57:27
  from "C:\wamp\www\app\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec5427a6a293_35957555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be9e17e8f0e15621383b826f9d12b266c12e9045' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\index\\index.html',
      1 => 1491883044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec5427a6a293_35957555 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="header">
    <img src="<?php echo IMG_PATH;?>
/hearder.png" alt="" class="header-img">
</div>
<div class="search"></div>
<div class="top">
    <img class="top-img" src="<?php echo IMG_PATH;?>
/index-top.jpg" alt="">
</div>
<div class="hot">
    <div class="top-box">
        <div class="top-box-img"></div>
        <div class="top-box-title"><?php echo $_smarty_tpl->tpl_vars['headline']->value["htitle"];?>
</div>
        <div class="top-box-text"><?php echo $_smarty_tpl->tpl_vars['headline']->value["hcontent"];?>
</div>
        <div class="top-box-address"><?php echo $_smarty_tpl->tpl_vars['headline']->value["haddress"];?>
</div>
        <div class="top-box-time"><?php echo $_smarty_tpl->tpl_vars['headline']->value["htime"];?>
</div>
    </div>
    <div class="top-box box2"></div>
    <div class="top-box box3"></div>
</div>
<div class="banner">
    <div class="banner-title">
        <img src="<?php echo IMG_PATH;?>
/recommendation.png" alt="">
    </div>
    <div class="banner-box">
        <div class="banner-ad-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <a class="banner-ad" href="index.php?m=index&f=post&a=postshow&cid=<?php echo $_smarty_tpl->tpl_vars['p']->value['cid'];?>
">
                    <img class="ad-img" src="<?php echo IMG_PATH;
echo $_smarty_tpl->tpl_vars['p']->value["pimgurl"];?>
" alt="">
                    <img src="<?php echo IMG_PATH;
echo $_smarty_tpl->tpl_vars['p']->value["ppngurl"];?>
" alt="" class="ad-title">
                </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </div>
    </div>
</div>
<div class="change">
    <div class="change-title">
        <img src="<?php echo IMG_PATH;?>
/change.png" alt="">
    </div>
    <div class="change-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortlist']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
            <a class="box-body" href="index.php?m=index&f=sort&a=sortshow&sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['sid'];?>
"></a>
        <div class="box-body"></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
    <!-- 选项卡 -->
<!--     <a href="index.php">1</a>
    <a href="index.php?m=index&f=sort">2</a>
    <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['sid'];?>
">3</a>
    <a href="index.php?m=index&f=art&a=artshow&sid=<?php echo $_smarty_tpl->tpl_vars['s']->value['sid'];?>
">4</a> -->
</body>
<?php echo '<script'; ?>
 src="js/index/index.js"><?php echo '</script'; ?>
>
</html><?php }
}
