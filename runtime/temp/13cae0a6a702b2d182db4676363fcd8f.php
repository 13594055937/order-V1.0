<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"C:\wamp64\www\order\order-v1.0\order/Admin/home\view\user\adduser.html";i:1515851999;s:69:"C:\wamp64\www\order\order-v1.0\order/Admin/home\view\public\meta.html";i:1515835583;s:71:"C:\wamp64\www\order\order-v1.0\order/Admin/home\view\public\header.html";i:1515834553;s:69:"C:\wamp64\www\order\order-v1.0\order/Admin/home\view\public\menu.html";i:1515851688;s:71:"C:\wamp64\www\order\order-v1.0\order/Admin/home\view\public\footer.html";i:1515835625;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../../public/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="../../../public/static/h-ui.admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/bootstrap/bootstrap.min.css" />
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <title>H-ui.admin v3.0</title>
    <meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
                            <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
                            <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>超级管理员</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 客户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="article-list.html" title="资讯管理">资讯管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 工程师管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="picture-list.html" title="图片管理">图片管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 工单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
                    <li><a href="product-category.html" title="分类管理">分类管理</a></li>
                    <li><a href="product-list.html" title="产品管理">产品管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe622;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('home/user/index'); ?>" title="用户管理">用户管理</a></li>
                    <li><a href="<?php echo url('home/user/adduser'); ?>" title="用户管理">用户添加</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 公司管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="" title="会员列表">会员列表</a></li>
                    <li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
                    <li><a href="member-level.html" title="等级管理">等级管理</a></li>
                    <li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
                    <li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
                    <li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
                    <li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 工单查询<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="admin-role.html" title="角色管理">角色管理</a></li>
                    <li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
                    <li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> 我要报修<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url(''); ?>" title="我要保修">我要报修</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 基础数据管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="system-base.html" title="系统设置">系统设置</a></li>
                    <li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
                    <li><a href="system-data.html" title="数据字典">数据字典</a></li>
                    <li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
                    <li><a href="system-log.html" title="系统日志">系统日志</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 维修单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="picture-list.html" title="图片管理">图片管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 维修单查询<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="picture-list.html" title="图片管理">图片管理</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<title>添加用户 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" checked>
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="sex">
					<label for="sex-2">女</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="sex">
					<label for="sex-3">保密</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="mobile" name="mobile">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">附件：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所在城市：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="city">
					<option value="" selected>请选择城市</option>
					<option value="1">北京</option>
					<option value="2">上海</option>
					<option value="3">广州</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="textarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<script type="text/javascript" src="../../../public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../../../public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="../../../public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="../../../public/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<script type="text/javascript" src="../../../public/bootstrap/bootstrap.min.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../../public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="../../../public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="../../../public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="../../../public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			mobile:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			uploadfile:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>