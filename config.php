<?php
/**
* 数据库配置信息
*/
define('DB_HOST','localhost');            //服务器
define('DB_USER','root');                 //数据库用户名
define('DB_PASSWORD','mcyz2014');                 //数据库密码
define('DB_NAME','taobaoke');                //默认数据库
define('DB_CHARSET','utf8');              //数据库字符集
define('TIMEZONE',"PRC");                 //时区设置

/**
* 模板配置template
*/
//公用php类位置
define('public_class','./../class/');
//模板文件目录
define('template_folder','./template/');
//静态文件位置
define('res_folder','./../res/');
//上传文件位置
define('upload_folder','./upload/');

/**
* template config
*/
$Config = Array(
	"sitename"=>"小母内容管理系统",
	'keyword'=>'CMS,内容管理系统,超简单的内容管理系统,小母内容管理系统',
  //网站简介
  'description'=>'CMS,内容管理系统,超简单的内容管理系统,小母内容管理系统',
  //"weburl"=>"http://219.139.52.151:8090/",
  'adminurl'=>"?admin=admin",
  "loginurl"=>"?admin=admin&template=login",
  "adminname"=>"小母内容管理系统",
  "author"=>"",//文章作者默认值,
  "captcha"=>"../captcha.php"//验证码路径
);

$AdminUrl = Array(
  //Array("id"=>"0","parentid"=>"0","name"=>"后台管理","url"=>"?admin=admin"),
  Array("id"=>"8","parentid"=>"0","name"=>"商品列表","url"=>"?admin=admin&template=good_list"),
  Array("id"=>"9","parentid"=>"0","name"=>"添加商品","url"=>"?admin=admin&template=good_new"),
  Array("id"=>"1","parentid"=>"0","name"=>"添加文章","url"=>"?admin=admin&template=article_new"),
  Array("id"=>"2","parentid"=>"0","name"=>"文章列表","url"=>"?admin=admin&template=article_list"),
  Array("id"=>"2","parentid"=>"0","name"=>"频道管理","url"=>"?admin=admin&template=channel_list"),
  Array("id"=>"3","parentid"=>"0","name"=>"用户管理","url"=>"?admin=admin&template=user_list"),
  Array("id"=>"4","parentid"=>"0","name"=>"留言管理","url"=>"?admin=admin&template=msg_list"),
  //Array("id"=>"5","parentid"=>"0","name"=>"系统工具","url"=>"?admin=admin&template=system_tool"),生成首页静态文件
  Array("id"=>"6","parentid"=>"0","name"=>"个人信息","url"=>"?admin=admin&template=person"),
  Array("id"=>"7","parentid"=>"0","name"=>"系统信息","url"=>"?admin=admin&template=system")
);
$Config["AdminUrl"] = $AdminUrl;
?>