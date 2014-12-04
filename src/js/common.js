var common = {};
(function(common,$){
  common.log = function(msg){
    try{
      console.log(msg);
      console.trace();
    }catch(err){

    }
  };

  /*event绑定与触发--------------------------------------------------------------*/
  /*common event*/
  common._listeners = {};
  /**绑定事件
    @param:type 事件类型
    @param:func 事件处理函数*/
  common.bind =common.on = function(type, func) {
    if(!type || !func){
      return common;
    }
    var listeners = common._listeners;
    if(type.indexOf(" ")>0){
      types = type.split(" ");
      for(var i = 0;i<types.length;i++){
        common.bind(types[i],func);
      }
      return common;
    }
    if (typeof listeners[type] === "undefined") {
      listeners[type] = [];
    }
    if (typeof func === "function") {
      listeners[type].push(func);
    }
    return common;
  };
  /**启动事件
  @param type:事件类型
  @param data:数据{a:0,b:1}
  */
  common.fire = common.trigger = function(type, data) {
    common.log("tigger:"+type);
    var arrayEvent = common._listeners[type];
    if (arrayEvent instanceof Array) {
      for (var i = 0,
      length = arrayEvent.length; i < length; i += 1) {
        if (typeof arrayEvent[i] === "function") {
          arrayEvent[i](type, data);
        }
      }
    }
    return common;
  };
  /**取消绑定事件*/
  common.unbind = function(type, func) {
    var arrayEvent = common._listeners[type];
    if (typeof type === "string" && arrayEvent instanceof Array) {
      if (typeof func === "function") {
        // 清除当前type类型事件下对应fn方法
        for (var i = 0,
        length = arrayEvent.length; i < length; i += 1) {
          if (arrayEvent[i] === func) {
            common._listeners[type].splice(i, 1);
            break;
          }
        }
      } else {
        // 如果仅仅参数type, 或参数fn邪魔外道,则所有type类型事件清除
        delete common._listeners[type];
      }
    }
    return common;
  };


  common.validate_rule = {
    require:{
      test:function(val){
        return val+''?true:false;
      },
      msg:'不能为空！'
    },
    maxlength:{
      test:function(val,param){
        return (val+'').length <= param;
      },
      msg:'超过限制长度!'
    },
    minlength:{
      test:function(val,param){
        return (val+'').length >= param;
      },
      msg:'文字太短！'
    },
    number:{
      test:function(val){
        return /^\d*$/.test(val);
      },
      msg:'必须全部是数字字符！'
    },
    password:{
      test:function(val){
        return (/^[\w\.\$\d_]*$/).test(val);
      },
      msg:'密码只能由字母、数字、和下划线组成'
    }
  };
  common.validate_form = function(form){
    var fields = form.find("[data-rule]");
    var result = true;
    for(var i = 0;i<fields.length;i++){
      var field = $(fields[i]);
      var rules = $.parseJSON(field.attr("data-rule"));
      var field_result = true;
      var next = field.next();
      var val = field.val();
      if(val.length === 0 && !rules.require){
        continue;
      }
      for(var rule in rules){
        if(common.validate_rule[rule]){
          var param = rules[rule];
          if(!common.validate_rule[rule].test(val,param)){
            if(next.length > 0){
              next.addClass("error").text(common.validate_rule[rule].msg).show();
            }
            result = false;
            field_result = false;
            break;
          }
        }
      }
      if(field_result && next.length > 0){
        next.removeClass("error").text("").hide();
      }
    }
    return result;
  };
  common.validate = function(form){
    if(!form){return false;}
    $(form).submit(function(){
      return common.validate_form($(this));
    });
    return form;
  };
  common.ajaxform = function(form,callback){
    if(!form){
      return;
    }
    if(!callback){
      callback = function(){};
    }
    $(form).submit(function(){
      var that = $(this);
      var result = common.validate_form(that);
      if(!result){
        return false;
      }
      var data = {};
      var inputs = that.find("input[name]");
      var textareas = that.find("textarea[name]");
      var selects = that.find("select[name]");
      var temp;
      for(var i = inputs.length-1;i>=0;i--){
        temp = $(inputs[i]);
        data[temp.attr("name")] = temp.val();
      }
      for(i = textareas.length-1;i>=0;i--){
        temp = $(textareas[i]);
        data[temp.attr("name")] = temp.val();
      }
      for(i = selects.length-1;i>=0;i--){
        temp = $(selects[i]);
        data[temp.attr("name")] = temp.val();
      }
      $.ajax(that.attr("action"),{
        'data':data,
        'method':$(this).attr("method"),
        'dataType':'json',
        'success':function(data){
          common.log(data);
          callback(data);
        },
        'error':function(err){
          callback($.parseJSON(err.responseText));
        }
      });
      return false;
    });
    return form;
  };
  common.selectvalue = function(){
    var selects = $("select[value]");
    selects.each(function(a,s){
      s = $(s);
      s.val(s.attr("value"));
    });
  };

  //取得所有query
  common.querys =function() {//get url querystring
    var params=document.location.search,reg=/(?:^\?|&)(.*?)=(.*?)(?=&|$)/g,temp,args={};
    while((temp=reg.exec(params))!==null) args[temp[1]]=decodeURIComponent(temp[2]);
    return args;
  };
  //根据关键字取query
  common.query =function(key){
      return (document.location.search.match(new RegExp("(?:^\\?|&)"+key+"=(.*?)(?=&|$)"))||['',null])[1];
  };
  $(function(){
    common.selectvalue();
  });
})(common,jQuery);