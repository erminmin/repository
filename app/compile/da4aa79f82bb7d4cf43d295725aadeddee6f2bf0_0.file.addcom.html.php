<?php
/* Smarty version 3.1.30, created on 2017-04-11 04:19:38
  from "C:\wamp\www\app\template\admin\addcom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec3d3a4e9254_31144837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4aa79f82bb7d4cf43d295725aadeddee6f2bf0' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\addcom.html',
      1 => 1491733327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec3d3a4e9254_31144837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/addcom.css">
</head>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<body>
<form action="index.php?m=admin&f=commodity&a=addcomInfo" method="post" id="form" >
    <div class="form-group">
        <label for="sort">分类名称：</label>
        <select name="sid" id="sort">
            <?php echo $_smarty_tpl->tpl_vars['sname']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="cimgurl">商品图片：</label>
        <input type="text" name="cimgurl" id="cimgurl">
    </div>
    <div class="form-group">
        <label for="title">商品标题：</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="cname">商品名称：</label>
        <input type="text" name="cname" id="cname">
    </div>
    <div class="form-group">
        <label for="cnew">商品成新：</label>
        <input type="text" name="cnew" id="cnew">
    </div>
    <div class="form-group">
        <label for="user">发布人员：</label>
        <select name="uid" id="user">
            <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="caddress">收货地址：</label>
        <input type="text" name="caddress" id="caddress">
    </div>
    <div class="form-group">
        <label for="cprice">销售价格：</label>
        <input type="text" name="cprice" id="cprice">
    </div>
    <div class="form-group">
        <label for="editor">商品介绍：</label>
        <?php echo '<script'; ?>
 id="editor" name="edit" type="text/plain" style="width:1024px;height:500px;"><?php echo '</script'; ?>
>
    </div>
        <input type="submit" value="提交">
</form>
</body>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</html><?php }
}
