<?php /* Smarty version Smarty-3.1.19, created on 2014-12-04 18:18:23
         compiled from ".\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:194845479bffeb689a1-53036523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd053ca78256b3fa808ae41f604bc2380150b50a9' => 
    array (
      0 => '.\\template\\index.html',
      1 => 1417684968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194845479bffeb689a1-53036523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5479bffee11704_68176955',
  'variables' => 
  array (
    'system' => 0,
    'keywords' => 0,
    'description' => 0,
    'channel' => 0,
    'i' => 0,
    'goodlist' => 0,
    'weburl' => 0,
    'loginurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5479bffee11704_68176955')) {function content_5479bffee11704_68176955($_smarty_tpl) {?><!DOCTYPE html><html lang="cn"><head><meta charset="UTF-8"><title><?php echo $_smarty_tpl->tpl_vars['system']->value['sitename'];?>
</title><meta name="viewport" content="width=device-width"><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"><link href="css/taobaoke.min.css" rel="stylesheet"><link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"><script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script><script type="text/javascript" src="./js/common.js"></script><script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script><link href="http://libs.baidu.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet"><script src="http://libs.baidu.com/bootstrap/2.3.2/js/bootstrap.min.js"></script><script type="text/javascript" src="./js/myapp.js"></script></head><body><div class="header"><div class="container"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6"><!-- img(src="img/logo.jpg")--></div><div class="col-lg-6 col-md-6 col-sm-6"><a href="#">QQ登录</a><a href="#">微博登录</a>|<a href="#">登录</a><a href="#">注册</a><a href="#">联系我们</a><a href="#">卖家报名</a></div></div><div class="row"><div class="col-lg-6 col-md-6 col-sm-6"><img src="img/logo.jpg"></div><div class="col-lg-6 col-md-6 col-sm-6"><input type="text"><button type="submit">搜索</button><button type="button">免费发布商品</button></div></div></div></div><div class="menu"><div class="container"><div class="row"><div class="col-lg-8 col-md-8 col-sm-8"><ul role="tablist" class="nav nav-tabs"><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
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
<?php } ?></ul></div><div class="col-lg-4 col-md-4 col-sm-4"></div></div></div></div><div class="container"><div class="row"><?php $_smarty_tpl->tpl_vars['goodlist'] = new Smarty_variable(SmartyFuncs::GetGoodListByChannel(0), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['i']->key;
?><div class="col-lg-3 col-md-3 col-sm-3"><div class="good"><div class="good-pic"><a href="#"><img alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" style="display: inline;"><span>今日<br />新品</span></a></div><div class="good-title">[包邮]<a href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></div><div class="good-price"><span class="price-current">￥<?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</span><span class="price-old">￥<?php echo $_smarty_tpl->tpl_vars['i']->value['price_old'];?>
</span><span class="btn"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
"><span>购买</span></a></span></div></div></div><?php } ?>   <div class="col-lg-3 col-md-3 col-sm-3"><div class="good"><div class="good-pic"><a href="#"><img alt="竹小宝竹纤维宝宝巾3条装" width="100%" src="http://s1.juancdn.com/bao/141128/2/8/5477e38ede2dc_310x310.jpg_310x310.jpg" d-src="http://s1.juancdn.com/bao/141128/2/8/5477e38ede2dc_310x310.jpg_310x310.jpg" style="display: inline;"><span>今日<br />新品  </span></a></div><div class="good-title">[包邮]<a href="#">商品名称</a></div><div class="good-price"><span class="price-current">￥55</span><span class="price-old">￥100</span><span class="btn"><a href="#"><span>购买</span></a></span></div></div></div><div class="col-lg-3 col-md-3 col-sm-3"><div class="good"><div class="good-pic"><a href="#"><img alt="竹小宝竹纤维宝宝巾3条装" width="100%" src="http://s1.juancdn.com/bao/141128/2/8/5477e38ede2dc_310x310.jpg_310x310.jpg" d-src="http://s1.juancdn.com/bao/141128/2/8/5477e38ede2dc_310x310.jpg_310x310.jpg" style="display: inline;"><span>今日<br />新品  </span></a></div><div class="good-title">[包邮]<a href="#">商品名称</a></div><div class="good-price"><span class="price-current">￥55</span><span class="price-old">￥100</span><span class="btn"><a href="#"><span>购买</span></a></span></div></div></div></div></div><div class="footer"><div class="container"><p><a href="<?php echo $_smarty_tpl->tpl_vars['weburl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['system']->value['copyright'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['loginurl']->value;?>
">@</a><span>版权所有</span></p><p>公司地址：<?php echo $_smarty_tpl->tpl_vars['system']->value['address'];?>
</p><p>联系电话：<?php echo $_smarty_tpl->tpl_vars['system']->value['phone'];?>
</p><p>QQ：<?php echo $_smarty_tpl->tpl_vars['system']->value['qq'];?>
</p><p>主要业务：网站建设 手机+微信网站建设 广告传媒</p></div><div class="container"><div><?php echo $_smarty_tpl->tpl_vars['system']->value['footcode'];?>
</div></div></div></body></html><?php }} ?>
