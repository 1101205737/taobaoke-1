<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 12:52:59
         compiled from ".\template\admin\system.html" */ ?>
<?php /*%%SmartyHeaderCode:30700547daa2411f980-95239291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79b7d93a494ef8ff4c52c0c45d62d77f204486c' => 
    array (
      0 => '.\\template\\admin\\system.html',
      1 => 1417582326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30700547daa2411f980-95239291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547daa24200c22_20670607',
  'variables' => 
  array (
    'adminname' => 0,
    'keywords' => 0,
    'weburl' => 0,
    'sitename' => 0,
    'AdminUrl' => 0,
    'url' => 0,
    'adminurl' => 0,
    'system' => 0,
    'keyname' => 0,
    'val' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547daa24200c22_20670607')) {function content_547daa24200c22_20670607($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><meta name="description" content="description"><link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
css/mcms.css"><link href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet"><script type="text/javascript" src="http://219.139.52.150/js/jquery/jquery-1.11.1.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/common.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/myapp.js"></script><script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.config.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/lang/zh-cn/zh-cn.js"></script></head><body><div class="header row"><div class="col-lg-8 col-md-8"><ul role="tablist" class="nav nav-tabs"><li><a href="index.php?admin=admin"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
">后台管理</a></li></ol><div class="list"><div class="row line"><div class="columns large-2">关键字</div><div class="columns large-4">值</div><div class="columns large-3">操作</div></div><div class="row line"><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
"><div class="columns large-2"><input type="text" name="keyname" value=""></div><div class="columns large-4"><input type="text" name="value" value=""></div><div class="columns large-3"><span method="new_system" class="button new_system">新建</span></div></form></div><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['keyname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['keyname']->value = $_smarty_tpl->tpl_vars['val']->key;
?><div class="row line"><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
"><div class="columns large-2"><input type="text" name="keyname" value="<?php echo $_smarty_tpl->tpl_vars['keyname']->value;?>
"></div><div class="columns large-4"><input type="text" name="value" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"></div><div class="columns large-3"><span systemkey="<?php echo $_smarty_tpl->tpl_vars['keyname']->value;?>
" method="change_system" class="button change_system">修改</span><span systemkey="<?php echo $_smarty_tpl->tpl_vars['keyname']->value;?>
" method="delete_system" class="button delete_system">删除</span></div></form></div><?php } ?></div><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript">$(function(){
  $(".new_system,.change_system,.delete_system").click(function(){
    var that = $(this);
    var p = that.parent().parent();
    $.post("<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
",{
      "method":that.attr("method"),
      "systemkey":that.attr("systemkey"),
      "keyname":p.find("[name=keyname]").val(),
      "value":p.find("[name=value]").val()
    },function(data){
      try{
        data = $.parseJSON(data);
        alert(data.msg);
        if(data.ret == 0){
          history.go(0);
        }
      }catch(err){
        alert("出错了！");
      }
      
    })
  });
});</script></body></html><?php }} ?>
