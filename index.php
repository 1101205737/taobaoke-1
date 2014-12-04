<?php
session_start();
require_once("./config.php");
require_once(public_class."db.class.php");
require_once(public_class."common.class.php");
require_once(public_class."Smarty.class.php"); 
require_once("./myapp.class.php");
date_default_timezone_set(TIMEZONE);
$db = new DB();//echo $db->getCount("article");
$smarty = new Smarty;
$smarty->left_delimiter = "{%";
$smarty->right_delimiter = "%}";

$method=$_POST["method"];

Myapp::Init();

foreach($Config as $key => $value){
	$smarty->assign($key,$value);
}

$smarty->assign("username",$_SESSION["username"]);
$smarty->registerClass("funcs","SmartyFuncs");

$Request_Method = $_SERVER['REQUEST_METHOD'];

if($_GET["admin"] == "admin" && $_GET["template"] != "login"){
	if($method == "login"){
		$validate = $_POST["validate"];
		if($validate != $_SESSION["validate_code"]){
			Myapp::BackMsg("验证码错误！");
		}
		$username = $_POST["username"];
		$password = $_POST["password"];
		Myapp::Login($username,$password);
		exit();
	}
	Myapp::NeedAdmin();
}

switch($Request_Method){
	case "GET":
		return Myapp::GetPage();
	case "POST":
		break;
	default:
		return Myapp::GetPage();
}

//echo $Config["article_list"]
switch($method){
	case "login":
		$username = $_POST["username"];
		$password = $_POST["password"];
		Myapp::Login($username,$password);
		break;
	case "channel_edit":
		$table = "channel";
		$parentid = (int)$_POST["parentid"];
		$id = (int)$_POST["id"];
		$name = $_POST["name"];
		$type = (int)$_POST["type"];
		$link = $_POST["link"];
		$template = $_POST["template"];
		$template_list = $_POST["template_list"];
		$new_id =(int)$_POST["new_id"];
		$db = new DB();
		$channel = $db->getLine("select * from channel where id = ".$id);
		if(!$channel){
			echo Common::head();
    	echo Common::backMsg("不存在该频道！");
    	exit();
		}
    $resultid = $db->changeAttrs($table,"id",$id,
    	array("name"=>$name,"parentid"=>$parentid,"id"=>$new_id,"type"=>$type,"template"=>$template,"template_list"=>$template_list,"link"=>$link));

    if($resultid){
    	echo Common::head();
    	echo Common::jumpMsg(SmartyFuncs::getAdminUrl("频道管理"),"修改成功！");
    	exit();
    }else{
    	echo Common::head();
    	echo Common::backMsg("修改失败！");
    	exit();
    }
    if($resultid){
    	echo Common::head().Common::jumpTo(SmartyFuncs::getAdminUrl("频道管理"));
    }
		break;
	case "channel_new":
		$table = "channel";
		$parentid = (int)$_POST["parentid"];
		$id = (int)$_POST["id"];
		$name = $_POST["name"];
		$type = (int)$_POST["type"];
		$link = $_POST["link"];
		$template = $_POST["template"];
		$template_list = $_POST["template_list"];
		$db = new DB();
    $resultid = $db->insertData($table,
				array("parentid","name","type","link","template","template_list"),
				array($parentid,$name,$type,$link,$template,$template_list));
    if($resultid){
    	echo Common::head().Common::jumpTo(SmartyFuncs::getAdminUrl("频道管理"));
    	exit();
    }
		break;
	case "good_new":
		echo "good_new";
		$table = "good";
		$channelid = (int) $_POST["channel"];
		$title = $_POST["title"];
		$img = $_POST["good-img"];
		$price = $_POST["price"];
		$price_old = $_POST["price_old"];
		$endtime = $_POST["endtime"];
		$discount = $_POST["discount"];
		$link = $_POST["link"];
		$db = new DB();
		$resultid = $db->insertData($table,
			array("channelid","title","img","price","price_old","endtime","discount","link"),
			array($channelid,$title,$img,$price,$price_old,$endtime,$discount,"link"));
		if($resultid){
			echo Common::head().Common::jumpTo(SmartyFuncs::getAdminUrl("商品管理"));
			exit();
		}
		break;

	case "resetpassword":
		$userid = $_POST["userid"];
		$resultid = $db->changeAttrs("user","userid",$userid,
    	array("password"=>md5($_POST["123456"])));
		echo '{"ret":0,"msg":"密码已重置为123456！"}';
		break;
	case "user_new":
		$table = "user";
		$username = $_POST["username"];
		$realname = $_POST["realname"];
		$email = $_POST["email"];
		$usertype = $_POST["usertype"];
    $resultid = $db->insertData($table,
				array("usertype","username","realname","email"),
				array($usertype,$username,$realname,$email));
    if($resultid){
    	echo Common::head().Common::jumpTo(SmartyFuncs::getAdminUrl("用户管理"));
    	exit();
    }
		break;
	case "user_edit":
		$table = "user";
		$userid = (int)$_POST["userid"];
		$username = $_POST["username"];
		$realname = $_POST["realname"];
		$email = $_POST["email"];
		$usertype = $_POST["usertype"];

		$user = $db->getLine("select * from user where userid = ".$userid);
		if(!$user){
			echo Common::head();
    	echo Common::backMsg("不存在该用户！");
    	exit();
		}
    $resultid = $db->changeAttrs($table,"userid",$userid,
    	array("username"=>$username,"realname"=>$realname,"email"=>$email,"usertype"=>$usertype));

    if($resultid){
    	echo Common::head().Common::jumpTo(SmartyFuncs::getAdminUrl("用户管理"));
    	exit();
    }else{
    	echo Common::head();
    	echo Common::backMsg("修改失败！");
    	exit();
    }
    if($resultid){
    	echo Common::head().Common::jumpTo("?table=$table&method=list");
    }
		break;
	case "article_new":
	  $table = "article";
		$title = $_POST["title"];
		$channel = (int)$_POST["channel"];
		$author = $_POST["author"];
		$keywords = $_POST["keywords"];
		$content = $_POST["content"];
		$top = $_POST["top"];
		$stage = $_POST["stage"];
		$img = $_POST["img"];
		$link = $_POST["link"];

    $resultid = $db->insertData($table,
				array("title","author","channel","keywords","top","stage","img","content","link"),
				array($title,$author,$channel,$keywords,$top,$stage,$img,$content,$link));
    if($resultid){
    	echo Common::head();
    	echo Common::jumpMsg(SmartyFuncs::getAdminUrl("文章列表"),"添加成功！");
    }
		break;
	case "article_edit":
		$table="article";
		$title = $_POST["title"];
		$channel = (int)$_POST["channel"];
		$author = $_POST["author"];
		$keywords = $_POST["keywords"];
		$content = $_POST["content"];
		$id = (int)$_POST["id"];
		$top = $_POST["top"];
		$stage = $_POST["stage"];
		$img = $_POST["img"];
		$link = $_POST["link"];
		
		$article = $db->getLine("select * from article where id = ".$id);
		if(!$article){
			echo Common::head();
    	echo Common::backMsg("不存在该表单！");
    	exit();
		}
		$filename = $article["filename"];
		$path = $article["path"];
		$template = Myapp::getChannel($channel,"val");

    $resultid = $db->changeAttrs($table,"id",$id,
    	array("title"=>$title,"author"=>$author,"channel"=>$channel,"keywords"=>$keywords,"time"=>Common::now(),"img"=>$img,"top"=>$top,"stage"=>$stage,"link"=>$link,"content"=>$content));

    if($resultid){
    	echo Common::head();
    	echo Common::jumpMsg(SmartyFuncs::getAdminUrl("文章列表"),"修改成功！");
    	exit();
    }
		break;

	case "channel_delete":
		$table = "channel";
		$id = (int)$_POST["channel_id"];
		$db->delete($table,"id",$id);
		echo '{"ret":0,"msg":"删除成功！"}';
		break;
	case "article_delete":
		$table = "article";
		$id = (int)$_POST["article_id"];
		if($id<=0){
			exit();
		}
		$db->delete($table,"id",$id);
		echo '{"ret":0,"msg":"删除成功！"}';
		break;
	case "article_top":
		$table = "article";
		$id = (int)$_POST["article_id"];
		if($id<=0){
			exit();
		}
		$top = $db->getAttr("article","top","id",$id);
		$top = $top>0?0:1;
		$db->changeAttrs($table,"id",$id,Array("top"=>$top));
		echo '{"ret":0,"msg":"修改成功！"}';
		break;
	case "change_userinfo":
		$old_username = $_SESSION["username"];
		$username = $_POST["username"];
		
		break;
	//系统信息：添加系统关键词
	case "new_system":
		$value = $_POST["value"];
		$keyname = $_POST["keyname"];
		$id = $db->insertData("system",Array("keyname","value"),Array($keyname,$value));
		if($id){
			echo '{"ret":0,"msg":"添加成功！"}';
		}else{
			echo '{"ret":1,"msg":"添加失败！"}';
		}
		break;
	//系统信息：修改系统关键词
	case "change_system":
		$systemkey = $_POST["systemkey"];
		$value = $_POST["value"];
		$keyname = $_POST["keyname"];
		$id = $db->changeAttrs("system","keyname",$systemkey,Array("keyname"=>$keyname,"value"=>$value));
		if($id){
			echo '{"ret":0,"msg":"修改成功！"}';
		}else{
			echo '{"ret":1,"msg":"修改失败！"}';
		}
		break;	
	//系统信息：删除系统关键词
	case "delete_system":
		$systemkey = $_POST["systemkey"];
		$id = $db->delete("system","keyname",$systemkey);
		if($id){
			echo '{"ret":0,"msg":"删除成功！"}';
		}else{
			echo '{"ret":1,"msg":"删除失败！"}';
		}
		break;	
	default:
		break;
}
//$db->close();
exit();
$page = (int) $_GET["page"];
$page = $page>0?$page:1;
$table = $_GET["table"];
$method = $_GET["method"];
$key = $_GET["key"];
//$channel = $db->getList('select * from channel where type = 0 order by parentid');
//var_dump($channel);
//$smarty->assign("channel",$channel);
switch($method){
	case "new":
		$smarty->display('../template/admin/'.$table.'_new.html');
		break;
	case "list":
		$count = $db->getCount($table);
		$smarty->assign("page",Common::page($page>0?$page:1,$count));
		$sql = "select * from ".$table;
		if($table == "article"){
			$sql .= " order by time desc limit ".($page*10-10).",10";
			//echo $sql;
		}else if($table == "user"){
			$sql .= " order by usertype,userid";
		}else
		{
			$sql .= " order by id";
		}

		$smarty->assign($table."_list",$db->query($sql));
		$smarty->display('../template/admin/'.$table.'_list.html');
		break;
  case "edit":
		if($table == "article"){
			$article = $db->getLine("select * from $table where id = ".$_GET["key"]);
			if(!$article){
				echo Common::head().Common::backMsg("不存在该id");
				exit();
			}
			$article["content"] = str_replace('\"','"',Common::read(ori_folder.$article["path"].'/'.$article["filename"]));
			$smarty->assign("key",$_GET["key"]);
			$smarty->assign($table,$article);
			$smarty->display('../template/admin/'.$table.'_edit.html');
		}
		break;
	case "delete":
		if(strlen($_GET['key']) == 0 || strlen($_GET["table"]) == 0){
			echo Common::head();
			echo Common::backMsg("不合法的链接！");
			exit();	
		}
		$db->delete($table,"id",$_GET["key"]);
		echo Common::head();
		echo Common::jumpMsg($Config[$table."_list"],"删除成功！");
		break;
  case "rewrite":
		if($table == "article" && $key){
			return Myapp::ReWriteArticle((int)$key);
		}
		break;
  case "rewrite_index":
	  //重新生成首页
		//echo "article_rewrite";
		$result = Myapp::WriteIndex();
		if($result){
			Common::ret(0,"重新写入完毕！");
		}else{
			Common::ret(1,"重新写入失败！");
		}
		exit();
	case "rewrite_channel":
		$id = $_GET["key"];
		if($id == "all"){

		}else{
			Myapp::ReWriteChannel($id);
		}
		break;
	default:
		$smarty->display('../template/admin/index.html');
		break;
}


//$article_list = $db->query("select * from article");
//echo $items_list["a"];
//echo $article_list[0];
//var_dump($items_list);
//var_dump($article_list);

//$smarty->display('../template/admin/article_list.html');


/*if($page){
	$smarty->display('../template/admin/'.$page.'.html');
}else{
	$smarty->display('../template/admin/index.html');
}*/

?>
