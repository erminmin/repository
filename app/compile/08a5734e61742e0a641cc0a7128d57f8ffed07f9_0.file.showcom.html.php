<?php
/* Smarty version 3.1.30, created on 2017-04-07 08:31:44
  from "C:\wamp\www\app\template\admin\showcom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e73250b58aa6_93501313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a5734e61742e0a641cc0a7128d57f8ffed07f9' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\showcom.html',
      1 => 1491546693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e73250b58aa6_93501313 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th>分类</th>
                <th>商品图片</th>
                <th>商品标题</th>
                <th>商品名称</th>
                <th>商品成新</th>
                <th>发布者</th>
                <th>收货地址</th>
                <th>价格</th>
                <th>商品介绍</th>
                <th>发布时间</th>
                <th>编辑</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cimgurl"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cnew"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["caddress"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cprice"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cintroduce"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctime"];?>
</td>
                <td>
                    <a href="index.php?m=admin&f=commodity&a=statucom&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">查看</a>
                    <a href="index.php?m=admin&f=commodity&a=delcom&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
