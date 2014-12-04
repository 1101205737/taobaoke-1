<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 19:59:58
         compiled from ".\template\admin\article_list.html" */ ?>
<?php /*%%SmartyHeaderCode:12421547da9be3fc279-20444367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2a494c5aa957835c174aec5b03f4ac0789ee17' => 
    array (
      0 => '.\\template\\admin\\article_list.html',
      1 => 1417521573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12421547da9be3fc279-20444367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminname' => 0,
    'weburl' => 0,
    'sitename' => 0,
    'AdminUrl' => 0,
    'url' => 0,
    'adminurl' => 0,
    'channel' => 0,
    'i' => 0,
    'articleList' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547da9be557b23_11368581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547da9be557b23_11368581')) {function content_547da9be557b23_11368581($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="keywords"><meta name="description" content="description"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
foundation/css/foundation.css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
css/mcms.css"><link href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet"><script type="text/javascript" src="http://219.139.52.150/js/jquery/jquery-1.11.1.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/common.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
src/js/myapp.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.config.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/umeditor.min.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
umeditor/lang/zh-cn/zh-cn.js"></script></head><body><nav data-topbar="" role="navigation" class="top-bar"><ul class="title-area"><li class="name"><h1><a href="index.php?admin=admin"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</a></h1></li></ul><section class="top-bar-section"><!-- Left Nav Section--><ul class="left"><?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminUrl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['url']->value['parentid']==0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li><?php }?>
<?php } ?></ul><!-- Right Nav Section--><ul class="right"><li class="not-click"><a href="#">登陆和退出</a></li></ul></section></nav><div class="row"><div style="padding:0" class="columns small-12 large-2"><ul class="side-nav"><?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminUrl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['url']->value['parentid']==0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li><?php } else { ?><ul class="side-nav"><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a></li></ul><?php }?>
<?php } ?></ul></div><div class="columns small-12 large-10"><ul class="breadcrumbs"><li><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
">后台管理</a></li><li><a href="<?php echo SmartyFuncs::GetAdminUrl('文章列表');?>
">文章列表</a></li></ul><div class="row"><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['i']->value['parentid']==0) {?><a href="?admin=admin&amp;template=article_list&amp;channelid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a><?php }?>
<?php } ?></div><div class="list"><div class="row line"><div class="columns large-1">编辑</div><div class="columns large-2">频道</div><div class="columns large-2">标题</div><div class="columns large-1">作者</div><div class="columns large-2">时间</div><div class="columns large-1">浏览次数</div><div class="columns large-3">操作</div></div><?php if (SmartyFuncs::GET("channelid")>0) {?>
<?php $_smarty_tpl->tpl_vars['articleList'] = new Smarty_variable(SmartyFuncs::GetArticleListByChannel(SmartyFuncs::GET("channelid")), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['articleList'] = new Smarty_variable(SmartyFuncs::GetArticleList(), null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?><div class="row line"><div class="columns large-1"><a href="?admin=admin&amp;template=article_edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">编辑</a></div><div class="columns large-2"><?php echo SmartyFuncs::ChannelName($_smarty_tpl->tpl_vars['i']->value['channel']);?>
</div><div class="columns large-2"> <a href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
?template=article&amp;id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></div><div class="columns large-1"><?php echo $_smarty_tpl->tpl_vars['i']->value['author'];?>
</div><div class="columns large-2"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</div><div class="columns large-1"><?php echo $_smarty_tpl->tpl_vars['i']->value['times'];?>
</div><div class="columns large-3"><span articleid="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="button article_top"><?php if ($_smarty_tpl->tpl_vars['i']->value['top']==0) {?>顶置<?php } else { ?>取消顶置<?php }?></span><span articleid="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="button article_delete">删除</span></div></div><?php } ?></div><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript">$(function(){
  $(".article_top").click(function(){
    var that = $(this);
    $.post("<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
",{
      "method":"article_top",
      "article_id":that.attr("articleid")
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
  $(".article_delete").click(function(){
    var that = $(this);
    $.post("<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
",{
      "method":"article_delete",
      "article_id":that.attr("articleid")
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
