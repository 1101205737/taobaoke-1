<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 16:03:37
         compiled from ".\template\admin\channel_list.html" */ ?>
<?php /*%%SmartyHeaderCode:27973547da9d765e8a7-41606744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54813dfa9ddad4f8d5f32d65289640481655f653' => 
    array (
      0 => '.\\template\\admin\\channel_list.html',
      1 => 1417680089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27973547da9d765e8a7-41606744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547da9d7767038_07531650',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547da9d7767038_07531650')) {function content_547da9d7767038_07531650($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
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
">后台管理</a></li></ol><div class="list"><div class="row"><div class="columns large-1">父编号</div><div class="columns large-1">编号</div><div class="columns large-1">名称</div><div class="columns large-1">类型</div><div class="columns large-2">链接</div><div class="columns large-2">页面模板</div><div class="columns large-2">列表模板</div><div class="columns large-2">操作</div></div><div class="row"><form action="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
" method="POST"><input type="hidden" name="method" value="channel_new"><div class="columns large-1"><input type="text" name="parentid" placeholder="请输入" value="0"></div><div class="columns large-1">自动<!--input(type="text",name="id",placeholder="不填写则自动获取",value="")--></div><div class="columns large-1"><input type="text" name="name" placeholder="请输入名称"></div><div class="columns large-1"><select name="type"><option value="0">栏目</option><option value="1">链接</option></select></div><div class="columns large-2"><input type="text" name="link" placeholder="请输入" value=""></div><div class="columns large-2"><input type="text" name="template" placeholder="请输入"></div><div class="columns large-2"><input type="text" name="template_list" placeholder="请输入"></div><div class="columns large-2"><button type="submit">新建</button></div></form></div><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?><div class="row"><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
"><input type="hidden" name="method" value="channel_edit"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><div class="columns large-1"><input type="text" name="parentid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['parentid'];?>
"></div><div class="columns large-1"><input type="text" name="new_id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"></div><div class="columns large-1"><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"></div><div class="columns large-1"><select name="type" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
"><option value="0">栏目</option><option value="1">链接</option></select></div><div class="columns large-2"><input type="text" name="link" placeholder="请输入" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
"></div><div class="columns large-2"><input type="text" name="template" placeholder="请输入" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['template'];?>
"></div><div class="columns large-2"><input type="text" name="template_list" placeholder="请输入" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['template_list'];?>
"></div><div class="columns large-2"><button type="submit" value="确定">确定</button><button type="button" value="删除" channelid="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="channel_delete">删除</button></div></form></div><?php } ?></div></div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript">$(function(){
  $(".channel_delete").click(function(){
    var that = $(this);
    $.post("<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
",{
      "method":"channel_delete",
      "channel_id":that.attr("channelid")
    },function(data){
      try{
        data = $.parseJSON(data);
        alert(data.msg);
      }catch(err){
        alert("出错了！");
      }
      history.go(0);
    })
  });
});</script></body></html><?php }} ?>
