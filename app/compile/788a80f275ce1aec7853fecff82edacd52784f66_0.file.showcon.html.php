<?php
/* Smarty version 3.1.30, created on 2017-04-06 09:01:06
  from "C:\wamp\www\app\template\admin\showcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5e7b29ea991_32516908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788a80f275ce1aec7853fecff82edacd52784f66' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\showcon.html',
      1 => 1491462010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5e7b29ea991_32516908 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        .page{
            text-align:Center;
            line-height:50px;
        }
        .page a{
            margin:5px;
        }
    </style>
</head>
<body>
        <table class="table text-center">
            <tr>
                <th>id</th>
                <th>标题</th>
                <th>地址</th>
                <th>内容</th>
                <th>发布时间</th>
                <th>点击量</th>
            </tr>
            <!--
            select * from shows inner join user on shows.uid=user.uid;
            -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["htitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["haddress"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hcontent"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["htime"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hhit"];?>
</td>
                <td>
                    <a href="index.php?m=admin&f=art&a=statuheadline">查看</a>
                    <a href="index.php?m=admin&f=art&a=delheadline">删除</a>
                </td>
            </tr>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



        </table>

        <div class="page">
            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

        </div>

</body>
</html><?php }
}
