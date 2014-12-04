<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 16:03:22
         compiled from ".\template\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29772547da9a6a2b976-93099331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85121c2724c933b40377b943502e3c6d2b27bdba' => 
    array (
      0 => '.\\template\\admin\\index.html',
      1 => 1417680089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29772547da9a6a2b976-93099331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547da9a6ad1063_24947861',
  'variables' => 
  array (
    'adminname' => 0,
    'keywords' => 0,
    'weburl' => 0,
    'sitename' => 0,
    'AdminUrl' => 0,
    'url' => 0,
    'adminurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547da9a6ad1063_24947861')) {function content_547da9a6ad1063_24947861($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><meta name="description" content="description"><link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
css/mcms.css"><script type="text/javascript" src="http://219.139.52.150/js/jquery/jquery-1.11.1.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/common.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/myapp.js"></script><script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script><!--<link href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet"><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.config.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/lang/zh-cn/zh-cn.js"></script>--></head><body><div class="header row"><div class="col-lg-8 col-md-8"><ul role="tablist" class="nav nav-tabs"><li><a href="index.php?admin=admin"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</a></li><?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminUrl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['url']->value['parentid']==0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li><?php }?>
<?php } ?></ul><!-- Right Nav Section--></div><div class="col-lg-1 col-md-1 col-sm-2"><ul role="tablist" class="nav nav-tabs"><li><a href="#">登陆和退出</a></li></ul></div></div><div class="row"><div class="col-lg-2 col-sm-12 col-md-2"><ul class="list-group"><?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminUrl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['url']->value['parentid']==0) {?><li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li><?php } else { ?><ul class="side-nav"><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li></ul><?php }?>
<?php } ?></ul></div><div class="col-lg-10 col-sm-12 col-md-10"><ol class="breadcrumb"><li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
">后台管理</a></li></ol><h2>小巧的内容管理系统</h2><div>主要功能：</div><ul><li>频道管理:添加频道及子频道</li><li>文章管理:添加文章，删除文章，修改文章，修改文章属性</li><li>用户管理:添加用户，删除用户，修改用户属性，重置密码</li><li>留言管理</li></ul></div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript"></script></body></html><?php }} ?>
