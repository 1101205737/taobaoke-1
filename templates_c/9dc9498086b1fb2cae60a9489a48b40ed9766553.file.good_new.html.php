<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 16:03:27
         compiled from ".\template\admin\good_new.html" */ ?>
<?php /*%%SmartyHeaderCode:22910547e92e0064864-47403186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc9498086b1fb2cae60a9489a48b40ed9766553' => 
    array (
      0 => '.\\template\\admin\\good_new.html',
      1 => 1417680089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22910547e92e0064864-47403186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547e92e018d878_95879051',
  'variables' => 
  array (
    'adminname' => 0,
    'keywords' => 0,
    'weburl' => 0,
    'sitename' => 0,
    'AdminUrl' => 0,
    'url' => 0,
    'adminurl' => 0,
    'channel' => 0,
    'i' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e92e018d878_95879051')) {function content_547e92e018d878_95879051($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
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
">后台管理</a></li><li><a href="<?php echo SmartyFuncs::GetAdminUrl('商品管理');?>
">商品管理</a></li><li><a href="<?php echo SmartyFuncs::GetAdminUrl('添加商品');?>
">添加商品</a></li></ol><form role="form" name="good_new" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
" class="form-horizontal"><input type="hidden" name="method" value="good_new"><div><div class="form-group"><label for="channel" class="col-sm-2 control-label">选择类别:</label><div class="col-sm-10"><select name="channel" class="form-control"><option value="">请选择类别</option><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==0) {?>
<?php if ($_smarty_tpl->tpl_vars['i']->value['parentid']==0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">----<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option><?php }?>
<?php }?>
<?php } ?><span class="msg">请选择类别</span></select></div></div><div class="form-group"><label for="link" class="col-sm-2 control-label">商品链接:</label><div class="col-sm-10"><input type="text" id="link" name="link" data-rule="{&quot;maxlength&quot;:100,number:true}" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" class="form-control"><span class="msg"></span></div></div><div class="form-group"><label for="good-title" class="col-sm-2 control-label">商品名称:</label><div class="col-sm-10"><input type="text" id="good-title" name="title" size="20" data-rule="&quot;require&quot;:true,&quot;maxlength&quot;:30" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="form-control"><span class="msg">最多输入30个文字</span></div></div><div class="form-group"><label for="good-img" class="col-sm-2 control-label">图片链接:</label><div class="col-sm-10"><input type="text" id="good-img" name="good-img" data-rule="&quot;maxlength&quot;:10" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" class="form-control"><span class="msg"></span></div></div><div class="form-group"><label for="price" class="col-sm-2 control-label">现价:</label><div class="col-sm-10"><input type="text" id="price" name="price" data-rule="{&quot;maxlength&quot;:10,number:true}" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" class="form-control"><span class="msg"></span></div></div><div class="form-group"><label for="price_old" class="col-sm-2 control-label">原价:</label><div class="col-sm-10"><input type="text" id="price_old" name="price_old" data-rule="{&quot;maxlength&quot;:10,number:true}" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" class="form-control"><span class="msg"></span></div></div><div class="form-group"><label for="endtime" class="col-sm-2 control-label">结束时间:</label><div class="col-sm-10"><input type="text" id="endtime" name="endtime" data-rule="{&quot;maxlength&quot;:10,number:true}" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" class="form-control"><span class="msg"></span></div></div><div class="form-group"><input type="submit" val="提交" class="btn form-control"></div></div></form></div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript">$(function(){
  common.validate_form($("form[name=good_new]"));
});</script></body></html><?php }} ?>
