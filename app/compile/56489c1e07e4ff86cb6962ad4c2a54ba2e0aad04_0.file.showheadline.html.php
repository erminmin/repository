<?php
/* Smarty version 3.1.30, created on 2017-04-07 05:56:38
  from "C:\wamp\www\app\template\admin\showheadline.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e70df61c8a97_73136802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56489c1e07e4ff86cb6962ad4c2a54ba2e0aad04' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\showheadline.html',
      1 => 1491536922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e70df61c8a97_73136802 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="index.php?m=admin&f=headline&a=statuheadline&hid=<?php echo $_smarty_tpl->tpl_vars['v']->value['hid'];?>
">查看</a>
                    <a href="index.php?m=admin&f=headline&a=delheadline&hid=<?php echo $_smarty_tpl->tpl_vars['v']->value['hid'];?>
">删除</a>
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
