<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\login\index.html";i:1515663253;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="../../../public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="../../../public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="../../../public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../public/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<title>智网云服-工单系统</title>
</head>
<body>
<div class="loginWraper">
	<div id="loginform" class="loginBox">
	<center><h3>工單管理系統</h3></center><br>
		<form class="form form-horizontal">
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
				<div class="formControls col-xs-8">
					<input name="name" type="text" placeholder="账户" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
				<div class="formControls col-xs-8">
					<input  name="password" type="password" placeholder="密码" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3" style="margin-left:29%;">
					<input name="" style="width:220px;" onclick="submit_form()" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin.page.v3.0</div>

<script type="text/javascript" src="../../../public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../../../public/static/h-ui/js/H-ui.js"></script>
<script src="../../../public/lib/layer/2.4/layer.js"></script>
</body>
</html>
<script>
    function submit_form(){
        $.ajax({
            type:"POST",
            url:"<?php echo url('loginvalidate'); ?>",
            data:$("form").serialize(),//将表单序列化
            dataType:'json',
            success:function(data){
                layer.alert(data.result);
            }
        })
    }
</script>