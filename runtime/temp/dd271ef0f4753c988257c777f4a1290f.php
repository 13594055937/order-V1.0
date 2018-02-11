<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\node\nodeadd.html";i:1518330100;s:89:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\..\..\com\view\public\meta.html";i:1518159452;s:91:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/system\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap_page.css" />
<!-- <script type="text/javascript" src="__STATIC__/bootstrap/bootstrap.min.js"></script> -->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">节点级别：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="type" id="type">
					<option value="1" selected>一级节点</option>
					<option value="2">二级节点</option>
					<option value="3">三级节点</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl" id="parentnode">
			<label class="form-label col-xs-4 col-sm-3">所属父节点：</label>
			<div class="formControls col-xs-8 col-sm-9"><span class="select-box">
				<select class="select" size="1" name="parenttype" id="parent">
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>支点名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" name="nodename">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">URL：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="url">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="memo">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script>
    $(document).ready(function() {
    		$('#parentnode').hide();
        $("#type").change(function(){
        	$('#parentnode').show();
            var uu = $(this).val();
            if(uu==1){
            	$('#parentnode').hide();
            }
            $.ajax({
            type:"post",
            url:"<?php echo url('system/node/getparentnode'); ?>",
            data:{'type':uu},
            success:function(msg){
          $("#parent").html(msg);
            }
        })
     }); 
     });         
	$("#form-admin-role-add").validate({
		rules:{
			nodename:{
				required:true,
			},
			url:{
			required:true,
		},
	},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			 $(form).ajaxSubmit(options);
            return false;
		}
	});
	var options = {
	    url: "<?php echo url('node/nodeadd'); ?>",
	    type: 'post',
	    success: function(data) {
	    	layer.msg(data.message);
	    	if(data.status==1){
	    		// setTimeout("parent.layer.closeAll();",1000);
	    		setTimeout("parent.location.reload()",1000);
	    	}		   
	    }
	 }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>