<?php
/* Smarty version 3.1.30, created on 2017-04-10 12:09:43
  from "F:\wamp\www\app\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eb59e7c84994_69977780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33966bbd81bf53091312acad3b876caf296cee14' => 
    array (
      0 => 'F:\\wamp\\www\\app\\template\\admin\\message.html',
      1 => 1491818981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eb59e7c84994_69977780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>提示信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css">
        <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/style.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/message.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/touming.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/animate.js"><?php echo '</script'; ?>
>
</head>
<body id="gradient">
	<ul class="bannerbox">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
    </ul> 
<div class="box">
    <h3>提示信息</h3>
    <div class="con">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br/>
        <span>3</span>秒后返回首页<br/>
        如果没有跳转<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击这里</a>
    </div>
</div>

</body>
</html>
<?php }
}
