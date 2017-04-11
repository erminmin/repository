<?php
/* Smarty version 3.1.30, created on 2017-04-07 05:57:04
  from "C:\wamp\www\app\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e70e10cbf109_05182471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b783db5b5a40fa193f7e237b48b1281951f5b90' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\index.html',
      1 => 1491537422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e70e10cbf109_05182471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/index.css">
</head>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/index.js"><?php echo '</script'; ?>
>

<body>
<div class="header">
    <h2><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
，欢迎来到内容管理系统！</h2>
</div>
<div class="bottom">
    <div class="left">
        <ul>
            <li>
                <span class="opi"><i></i>主页 <b></b></span>
                <ul class="son">
                    <li><a href="index.php" target="_blank">打开主页</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>用户管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=user&a=addUser" target="right">添加用户</a></li>
                    <li><a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>头条文章<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=headline&a=addheadline" target="right">添加文章</a></li>
                    <li><a href="index.php?m=admin&f=headline&a=showheadline" target="right">管理文章</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>分类管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=sort&a=addsort" target="right">添加分类</a></li>
                    <li><a href="index.php?m=admin&f=sort&a=showsort" target="right">管理分类</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>商品管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=commodity&a=addcom" target="right">添加商品</a></li>
                    <li><a href="index.php?m=admin&f=commodity&a=showcom" target="right">管理商品</a></li>
                </ul>
            </li>
                <h5><a href="index.php?m=admin&a=unLogin">退出登录</a></h5>
        </ul>

    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="right">

        </iframe>
    </div>
</div>
</body>
</html><?php }
}
