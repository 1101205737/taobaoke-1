<?php
//require_once("../config.php")
//require_once("Common.Class.php")
class Myapp{
  static function Init(){
    //初始化channel
    self::InitChannel();
    self::InitSystem();
  }
  static function Close(){
  }
  static function BackMsg($msg){
    echo Common::head().Common::BackMsg($msg);
    exit();
  }
  static function GetPage(){
    Global $smarty;
    Global $db;
    $template = $_GET["template"];
    if(strlen($template) == 0){
      $template = "index";
    }
    if($_GET["admin"] == "admin"){
      $template = 'admin/'.$template;
    }
    if(!file_exists(template_folder.$template.'.html')){
      $template = "404";
    }

    $smarty->display(template_folder.$template.'.html');
  }

  //重新生成首页
  static function WriteIndex(){
    $template = template_folder.'index.html';
    Global $smarty;
    return Common::smarty2file($smarty,$template,index_folder.'index.html');
  }
  /*初始化system信息*/
  static function InitSystem(){
    Global $Config,$db;
    //echo "getChannel:$channelid,$attr;";
    if(!$Config["system"]){
      $system = $db->getList('select * from system order by id');
      $arr = array();
      foreach($system as $key=>$val){
        $arr[$val["keyname"]] = $val["value"];
      }
      $Config["system"] = $arr;
    }
  }
  /*初始化channel信息*/
  static function InitChannel(){
    Global $Config,$db;
    //echo "getChannel:$channelid,$attr;";
    if(!$Config["channel"]){
      $channel = $db->getList('select * from channel order by parentid,id');
      usort($channel,"Myapp::channelSort");
      $Config["channel"] = $channel;
    }    
  }
  /*取得频道信息
  */
  static function getChannel($channelid = -1,$attr = false){
    Global $Config,$db;
    //echo "getChannel:$channelid,$attr;";
    if(!$Config["channel"]){
      Myapp::InitChannel();
    }
    if($channelid == -1){
      return $Config["channel"];
    }
    if(!$attr){
      //echo '没有attr';
      $channel = $Config["channel"];
      if(!$channel){
        return false;
      }
      foreach($channel as $val){
        if((int)$val["id"] == (int) $channelid){
          if(!$attr){
            return $val;
          }
        }
      }
      return false; 
    }
    //echo "获取channel";
    $result = Myapp::getChannel($channelid);
    if($result){
      return $result[$attr];
    }else{
      return false;
    }
  }
  /*频道排序规则*/
  static function channelSort($a,$b){
    $c = (int) $a["parentid"];$d = (int) $b["parentid"];
    if($c == 0){
      $c = (int)$a["id"];
    }
    if($d == 0){
      $d = (int)$b["id"];
    }
    if($c == $d){
      return (int)$a["id"]>(int)$b["id"]?1:-1;
    }
    return $c>$d?1:-1;
  }
  /*取得频道路径：首页=》频道1=》频道1.1**/
  static function getChannelPath($channelid){
    $channelid = (int) $channelid;
    $arr = array();
    if($channelid != 0){
      $p = Myapp::getChannel($channelid,"parentid");
      $result = Myapp::getChannelPath($p);
      foreach($result as $key=>$val){
        $arr[] = $val;
      }
    }
    $arr[] = Myapp::getChannel($channelid);
    return $arr;
  }
  /*取得频道的所有子频道*/
  static function getChannelChild($channelid){
    Global $Config;
    $channel = $Config["channel"];
    $channelid = (int) $channelid;
    $arr = array();
    $arr[] = Myapp::getChannel($channelid);
    foreach($channel as $key=>$val){
      if((int)$val["parentid"] == $channelid){
        $new_arr = Myapp::getChannelChild($val["id"]);
        foreach($new_arr as $key2=>$val2){
          //echo $val2["id"];
          $arr[] = $val2;
        }
      }
    }
    return $arr;
  }
  static function IsLogin(){
    if(strlen($_SESSION["username"]) > 0){
      return true;
    }
    return false;
  }
  static function NeedLogin(){
    if(strlen($_SESSION["username"])>0){
      return true;
    }else{
      $_SESSION["refer"] = Common::url();
      echo Common::head().Common::JumpMsg("index.php?template=login","你还没有登录");
    }
  }
  static function NeedAdmin(){
    Global $db;
    $username = $_SESSION["username"];
    if(strlen($username) > 0){
      $sql = "select * from user where username = '$username'";
      $result = $db->getLine($sql);
      if($result && $result["usertype"] == "admin"){
        return true;
      }
    }
    echo Common::head().Common::JumpMsg("index.php?admin=admin&template=login","你还没有登录！");
    return false;
  }
  static function Login($username,$password){
    Global $db;
    $result = $db->getLine("select * from user where username = '$username' and password='".md5($password)."'");
    if($result){
      $url = $Config["adminurl"];
      $_SESSION["username"] = $username;
      echo Common::head().Common::JumpMsg($url,"登录成功！");
      return true;
    }else{
      echo Common::head().Common::BackMsg("用户名或者密码错误！");
      return false;
    }
  }
}

class SmartyFuncs{
  static function GetChannel($id=-1){
    return Myapp::getChannel($id);
  }
  /*取得该channelid的名称*/
  static function ChannelName($channelid){
    return Myapp::getChannel($channelid,"name");
  }
  /*取得频道路径*/
  static function ChannelPath($channelid){
    return Myapp::getChannelPath($channelid);
  }
  /*取得该频道和所有子频道*/
  static function ChannelChild($channelid){
    return Myapp::getChannelChild($channelid);
  }
  /*取得该频道及其兄弟频道*/
  static function ChannelSibling($channelid){
    $channelList = Myapp::getChannel();
    $arr = array();
    $parentid = -1;
    foreach($channelList as $channel){
      if((int) $channel["id"] == (int) $channelid){
        $parentid = (int) $channel["parentid"];
      }
    }
    //echo 'parentid:'.$parentid;
    if($parentid>0){
      foreach($channelList as $ch){
        if(((int)$ch["parentid"]) == $parentid){
          //var_dump($ch);
          $arr[] = $ch;
        }
      }
    }
    return $arr;
  }
  /*根据articleid取得article内容*/
  static function GetArticle($articleid){
    Global $db;
    $article = $db->getLine("select * from article where id = $articleid");
    if(!$article){
      return false;
    }
    $article["times"] = (int) $article["times"]+1;
    $db->changeAttrs("article","id",$articleid,Array("times"=>$article["times"]));
    $article["content"] = str_replace('\"','"',$article["content"]);
    return $article;
  }
  /*根据goodid取得good内容*/
  static function GetGood($goodid){
    Global $db;
    $good = $db->getLine("select * from good where id = $goodid");
    if(!$good){
      return false;
    }
    $good["times"] = (int) $good["times"]+1;
    $db->changeAttrs("good","id",$goodid,Array("times"=>$good["times"]));
    return $good;
  }
  /*取得文章列表*/
  static function GetArticleList($page = 0,$size=30){
    Global $db;
    $sql = "select * from article order by top desc,time desc limit ".($page*30).",".$size;
    $article_list = $db->getList($sql);
    return $article_list;
  }
  /*取得该频道下文章列表*/
  static function GetArticleListByChannel($channelid = 0){
    Global $db;
    $channelList = Myapp::getChannelChild($channelid);
    $article_list = array();
    foreach($channelList as $channel){
      $sql = "select * from article where channel = ".$channel["id"]."  order by top desc,time desc";
      $new_list =  $db->getList($sql);
      foreach($new_list as $article){
        $article_list[] = $article;
      }
    }
    return $article_list;
  }
  /*取得该频道下文章列表*/
  static function GetGoodListByChannel($channelid = 0,$page = 1,$size = 30,$order="time desc"){
    Global $db;
    $channelList = Myapp::getChannelChild($channelid);
    $article_list = array();
    $channelids = ' channelid = -1';
    foreach($channelList as $channel){
      if((int) $channel["id"]>=0){
        $channelids .= ' or channelid = '.(int) $channel["id"];
      }
      
    }
    $page = (int) $page;
    $size = (int) $size;
    $page = $page > 0?$page:1;
    $size = $size > 0?($size<100?$size:100):1;
    $sql = "select * from good where ".$channelids."  order by ".$order.' limit '.($page*$size - $size +1).','.$size;
    $list =  $db->getList($sql);
    //var_dump($list);
    return $list;
  }
  /*取得该频道下文章列表*/
  static function GetUserList(){
    Global $db;
    $sql = "select * from user order by logintimes";
    $user_list = $db->getList($sql);
    return $user_list;
  }
  static function GetUserInfo(){
    Global $db;
    Myapp::NeedLogin();
    $sql = "select * from user where username = '".$_SESSION["username"]."'";
    $userinfo = $db->getLine($sql);
    return $userinfo;
  }
  static function GetAdminUrl($name="后台管理"){
    Global $AdminUrl;
    foreach($AdminUrl as $val){
      if($val["name"] == $name){
        return $val["url"];
      }
    }
    return null;
  }
  /*过滤掉html标签*/
  static function FilterHTML($text){
    return strip_tags($text);
  }
  /*static function GetAdminUrlPath($template){
  }*/
  static function GET($key){
    return $_GET[$key];
  }
  static function POST($key){
    return $_POST[$key];
  }
  static function SESSION($key){
    return $_SESSION[$key];
  }
}
?>