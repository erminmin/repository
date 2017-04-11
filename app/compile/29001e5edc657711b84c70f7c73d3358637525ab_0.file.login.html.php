<?php
/* Smarty version 3.1.30, created on 2017-04-10 12:29:41
  from "F:\wamp\www\app\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eb5e95ed4837_34740971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29001e5edc657711b84c70f7c73d3358637525ab' => 
    array (
      0 => 'F:\\wamp\\www\\app\\template\\admin\\login.html',
      1 => 1491820180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eb5e95ed4837_34740971 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/login.js"><?php echo '</script'; ?>
>
</head>
<body style="background: rgba(254,254,210,0.8);">
    <form action="index.php?m=admin&a=onLogin" method="post">
        <div class="box">
            <h3>登录页</h3>
            用户名：<input type="text" value="" name="username"/><br/>
            密　码：<input type="password" value="" name="password"/><br/>
            请输入有效验证码：<input type="text" value="" name="code" size="4" use="no"><br/>
            <img src="index.php?m=admin&f=index&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()"><span class="codes"></span><br/>
            <input type="submit" value="登录" disabled="disabled" /><br/>
        </div>
    </form>
</body>
</html><?php }
}
