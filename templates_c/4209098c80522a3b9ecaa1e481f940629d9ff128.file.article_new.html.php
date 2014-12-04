<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 16:03:30
         compiled from ".\template\admin\article_new.html" */ ?>
<?php /*%%SmartyHeaderCode:6815547da9bc809ed2-49695221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4209098c80522a3b9ecaa1e481f940629d9ff128' => 
    array (
      0 => '.\\template\\admin\\article_new.html',
      1 => 1417680089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6815547da9bc809ed2-49695221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547da9bc935668_52328377',
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
<?php if ($_valid && !is_callable('content_547da9bc935668_52328377')) {function content_547da9bc935668_52328377($_smarty_tpl) {?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
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
">后台管理</a></li></ol><form name="article_new" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
"><input type="hidden" name="method" value="article_new"><div><div class="list"><label class="info">选择频道:</label><div class="field"><select name="channel"><option value="">请选择频道</option><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
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
<?php } ?></select><span class="msg"></span></div><div class="clear"></div></div><div class="list"><label class="info">文章名称:</label><div class="field"><input type="text" name="title" size="20" data-rule="&quot;require&quot;:true,&quot;maxlength&quot;:20" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"><span class="msg"></span></div><div class="clear"></div></div><div class="list"><label class="info">文章作者:</label><div class="field"><input type="text" name="author" data-rule="&quot;maxlength&quot;:10" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
"><span class="msg"></span></div><div class="clear"></div></div><!--<div class="list"><label class="info">关键字:</label><div class="field"><input type="text" name="keywords" data-rule="&quot;require&quot;:true,&quot;maxlength&quot;:20" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
"><span class="msg"></span></div><div class="clear"></div></div>--><div class="list"><label class="info">相关链接:</label><div class="field"><input type="text" name="link" data-rule="&quot;require&quot;:true,&quot;maxlength&quot;:50" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span class="msg"></span></div><div class="clear"></div></div><div class="list"><label class="info">文章内容:</label><div class="field"><textarea id="content" name="content" size="3000" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
" accept=".swf" data-rule="&quot;require&quot;:true"></textarea><span class="msg"></span></div><div class="clear"></div></div><div class="list"><label class="info">首页图片:</label><div class="field"><select name="img" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
"><option value="">请选择图片</option></select><span class="msg"></span><img width="200px" height="100px" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['img'];?>
" class="firstImg"></div><div class="clear"></div></div><div class="list"><label class="info">文章属性:</label><div class="field"><span>顶置</span><input type="checkbox" name="top" value="1"><span class="msg"></span></div><div class="clear"></div></div><div class="list"><label class="info">文章状态：</label><div class="field"><input type="radio" name="stage" value="2" checked="true"><label>发布</label><input type="radio" name="stage" value="1"><label>待审</label><input type="radio" name="stage" value="0"><label>草稿</label><span class="msg"> </span></div></div><div class="list"><label class="info"></label><div class="field"><input type="submit" val="提交" class="btn"></div><div class="clear"></div></div></div></form></div></div><div class="row footer"><ul><li><a href="#">关于我们</a></li><li><a href="#">联系我们</a></li><li><a href="#">网站地图</a></li><li><a href="#">意见反馈</a></li></ul></div><div class="row footer"> <div class="copyright">母志龙 版权所有</div></div><script type="text/javascript">$(function(){
  var um = UM.getEditor('content');
  um.addListener("ready afterExecCommand",function(){
    var html = um.getAllHtml();
    var imgs = [];
    $("[name=img]").find("option").each(function(){
      imgs.push($(this).attr("value"));
    });
    html.replace(/<img\s+src="([^"]*)"/g,function(a,b){
      var url = b;
      url = url.replace(myapp.root,"");
      if(url === b || imgs.indexOf(url)>=0){
        return;
      }
      imgs.push(url);
      $("[name=img]").append("<option value='"+url+"'>"+url+"</option>");
    });
  });
  um.fireEvent("ready");
  $("[name=img]").change(function(){
    var that = $(this);
    var val = that.val();
    if(val){
      $(".firstImg").attr("src",val).show();
    }else{
      $(".firstImg").hide();
    }
  });
});</script></body></html><?php }} ?>
