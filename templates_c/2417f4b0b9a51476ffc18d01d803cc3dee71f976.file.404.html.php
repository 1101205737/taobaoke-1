<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 18:41:46
         compiled from ".\template\404.html" */ ?>
<?php /*%%SmartyHeaderCode:9733547dace74afbb0-43673807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2417f4b0b9a51476ffc18d01d803cc3dee71f976' => 
    array (
      0 => '.\\template\\404.html',
      1 => 1417603145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9733547dace74afbb0-43673807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547dace7559d56_40980922',
  'variables' => 
  array (
    'system' => 0,
    'keywords' => 0,
    'description' => 0,
    'weburl' => 0,
    'channel' => 0,
    'i' => 0,
    'loginurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dace7559d56_40980922')) {function content_547dace7559d56_40980922($_smarty_tpl) {?><!DOCTYPE html><html lang="cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['system']->value['sitename'];?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"><link href="css/taobaoke.min.css" rel="stylesheet"><link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"><script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/common.js"></script><script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/myapp.js"></script></head><body><div class="header"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6"><!-- img(src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
img/logo.jpg")--></div><div class="col-lg-6 col-md-6 col-sm-6"><a href="#">QQ登录</a><a href="#">微博登录</a>|<a href="#">登录</a><a href="#">注册</a><a href="#">联系我们</a><a href="#">卖家报名</a></div></div><div class="row"><div class="col-lg-6 col-md-6 col-sm-6"><img src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
img/logo.jpg"></div><div class="col-lg-6 col-md-6 col-sm-6"><input type="text"><button type="submit">搜索</button><button type="button">免费发布商品</button></div></div></div></div><div class="menu"><div class="container"><div class="row"><div class="col-lg-8 col-md-8 col-sm-8"><ul role="tablist" class="nav nav-tabs"><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['i']->value['parentid']==0) {?><li class="<?php if ($_smarty_tpl->tpl_vars['i']->value['id']==SmartyFuncs::GET('channelid')) {?>active<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1) {?><?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
<?php } else { ?>?template=list&amp;channelid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a></li><?php }?>
<?php } ?></ul></div><div class="col-lg-4 col-md-4 col-sm-4"></div></div></div></div><div class="container"><div>页面不存在</div></div><div class="footer"><div class="container"><p><a href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['system']->value['copyright'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['loginurl']->value;?>
">@</a><span>版权所有</span></p><p>公司地址：<?php echo $_smarty_tpl->tpl_vars['system']->value['address'];?>
</p><p>联系电话：<?php echo $_smarty_tpl->tpl_vars['system']->value['phone'];?>
</p><p>QQ：<?php echo $_smarty_tpl->tpl_vars['system']->value['qq'];?>
</p><p>主要业务：网站建设 手机+微信网站建设 广告传媒</p></div><div class="container"><div><?php echo $_smarty_tpl->tpl_vars['system']->value['footcode'];?>
</div></div></div></body></html><?php }} ?>
