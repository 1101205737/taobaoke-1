<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 16:01:33
         compiled from ".\template\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2163154801291d44014-38453426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb20b79ddc719abad150db597e81a46b479d268' => 
    array (
      0 => '.\\template\\login.html',
      1 => 1417680088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2163154801291d44014-38453426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54801291d76a76_82403029',
  'variables' => 
  array (
    'adminname' => 0,
    'keywords' => 0,
    'weburl' => 0,
    'adminurl' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54801291d76a76_82403029')) {function content_54801291d76a76_82403029($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><meta name="description" content="description"><link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"><script type="text/javascript" src="http://219.139.52.150/js/jquery/jquery-1.11.1.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/common.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/myapp.js"></script><script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script><style>.login-form{
  max-width:600px;
  /*border:1px solid gray;*/
  border-radius: 10px;
  margin: 10px auto;
  padding: 10px;
}</style></head><body><div class="container"><form action="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
" method="post" role="form" class="login-form"><h2>用户登录</h2><input type="hidden" name="method" value="login"><div class="form-group"><label for="username">用户名</label><input type="text" name="username" placeholder="用户名或邮箱" data-rule="{require:true,usernameemail:true,minlength:6,maxlength:30}" class="form-control"></div><div class="form-group"><label for="password">密码</label><input type="password" name="password" placeholder="请输入密码" data-rule="{password:true}" class="form-control"></div><div class="form-group"><label for="validate">验证码</label><input type="text" name="validate" data-rule="{require:true}" class="form-control"><!--.input-group-addon--><img title="点击刷新" src="<?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
" align="basbottom" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
?'+Math.random();"></div><div class="form-group"><input type="submit" value="提交" class="form-control"></div></form></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div></body></html><?php }} ?>
