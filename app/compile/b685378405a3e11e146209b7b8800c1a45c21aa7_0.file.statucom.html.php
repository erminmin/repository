<?php
/* Smarty version 3.1.30, created on 2017-04-07 08:27:19
  from "C:\wamp\www\app\template\admin\statucom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e731478235a4_66693510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b685378405a3e11e146209b7b8800c1a45c21aa7' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\statucom.html',
      1 => 1491546431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e731478235a4_66693510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/statucon.css">
</head>
<body>
    <h3>
        商品标题：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["ctitle"];?>

    </h3>
    <p class="info">
        <span>时间：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["ctime"];?>
</span>
        <span>地址：<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["caddress"];?>
</span>
    </p>
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["cintroduce"];?>

    </div>
    <div class="statu">
        <form action="index.php?m=admin&f=commodity&a=statucomInfo" method="post" id="form">
            <div class="infocontent">
                <!--推荐位-->
                <div class="sort">
                    <h3>分类：</h3>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sortid"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"       <?php if ($_smarty_tpl->tpl_vars['v']->value['sid'] == $_smarty_tpl->tpl_vars['result']->value[0]['sid']) {?>checked<?php }?> >
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>

                        </label>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['cid'];?>
">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html><?php }
}
