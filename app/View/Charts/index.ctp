<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Hello聊天室V3.0 byJym</title>
  <!-- Tile icon for Win8 (144x144 + tile color) -->
   <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="http://jym94.xyz/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="http://jym94.xyz/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="http://jym94.xyz/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="http://jym94.xyz/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="http://jym94.xyz/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="http://jym94.xyz/assets/css/app.css">
  <script src="http://jym94.xyz/jquery-1.11.1.min.js"></script>
  <script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.js"></script>
  <style>
    #header{display: none;}
    #footer{display: none;}
  </style>
</head>
<body>
  <form action="index">
    <input type="hidden" name="clear" value="root">
  </form>
<div class="am-container" style="margin-top:3rem;"> 
    <div name="" id="scroll" style="height:300px;width:100%;border:1px solid #ddd;overflow: scroll;">
      <div id="text1"></div>
      <div id="loading">
    <i class="am-icon-spinner am-icon-spin"></i>
    加载中...
  </div>
    </div><br>
    <div class="am-g">
    <div class="am-u-lg-8 am-u-sm-10" style="margin-bottom:1rem;">
      <input type="text" placeholder="请输入聊天内容" class="am-form-field am-radius" id="con1" style="width:100%;">
    </div> 
    <div class="am-u-lg-12 am-u-sm-12">
      <button id="btn" class="am-btn am-btn-warning am-radius .am-btn-sm" style="margin-right:1rem;" onclick="sendMessage()">发送</button>
    <button id="clear" class="am-btn am-btn-default am-radius .am-btn-sm">清除聊天记录</button>
    </div>  
    
  </div>
</div>
<script>
//updateMsg();
 // var myDate = new Date();
 // alert(myDate.)
   var cont = '';
   $('#con1').keypress(function(event){  
    var keycode = (event.keyCode ? event.keyCode : event.which);  
    if(keycode == '13'){  
        sendMessage();    
    }  
});  

  function sendMessage(){
    if($("#con1").val() == ''){
      alert('聊天内容不能为空');
    }else{
      $.ajax({  
        url : "index",
        type : "get", 
        dataType: "json",  
        data: {  
            'message':$("#con1").val(),
        },  
        success : function (data) {
           content = '';
           content += '<div>'+data.message+'</div>';
           $("#xxx").html(content);
        }  
      });  
    }
  }

  function updateMsg(){
    $.ajax({  
        url : "index",
        type : "get", 
        dataType: "json",  
        data: { 
            message:1
        },  
        success : function (data) {
        //alert('good'); 
        //alert(datacheck[1]);
        if(data != '' && cont != data){
           $("#text1").html(data);
              //$("#text1").append('<br>');
              $("#scroll").scrollTop(10000);
        }
           cont = data;  
        }  
    });  
    setTimeout('updateMsg()',2000);
  }
  $("#clear").on('click',function(){
    if($("#con2").val() == '金颖墨'){
       $('form').submit();
     }else{
      alert('您的id没有相应的权限！');
     }
   

  })
</script>
</body>
</html>