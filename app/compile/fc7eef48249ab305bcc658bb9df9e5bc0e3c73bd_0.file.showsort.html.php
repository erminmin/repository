<?php
/* Smarty version 3.1.30, created on 2017-04-08 03:09:44
  from "F:\wamp\www\app\template\admin\showsort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e838586b75f9_53006950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7eef48249ab305bcc658bb9df9e5bc0e3c73bd' => 
    array (
      0 => 'F:\\wamp\\www\\app\\template\\admin\\showsort.html',
      1 => 1491469382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e838586b75f9_53006950 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        table{
            width:800px;
            border:1px solid #000000;
            border-collapse:collapse;
            margin:0 auto;
            margin-top:40px;
        }
        tr,td{
            height:26px;
            border:1px solid #000;
            line-height:26px;
        }
        td{
            padding-left:15px;
            overflow:hidden;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>分类id</th>
        <th>分类名称</th>
        <th>分类图片</th>
        <th>编辑</th>
    </tr>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["simgurl"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=sort&a=delsort&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>
            <a href="index.php?m=admin&f=sort&a=editsort&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</table>
</body>
</html>
<?php }
}
