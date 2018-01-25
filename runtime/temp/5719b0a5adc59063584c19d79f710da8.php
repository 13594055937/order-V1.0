<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:81:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\customer\customeradd.html";i:1516784827;s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\meta.html";i:1516865898;s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\header.html";i:1515742683;s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\menu.html";i:1516678307;s:75:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\cityarea\index.html";i:1516779060;s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\footer.html";i:1516008553;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/bootstrap/bootstrap.min.css" />
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script src="__STATIC__/lib/layer/laydate/laydate.js"></script>
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
                    <li><a href="<?php echo url('home/customer/index'); ?>" title="客户列表">客户列表</a></li>
                    <li><a href="<?php echo url('home/customer/customeradd'); ?>" title="客户添加">客户添加</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 工程师管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('home/engineer/index'); ?>" title="工程师列表">工程师列表</a></li>
                    <li><a href="<?php echo url('home/engineer/enginerradd'); ?>" title="工程师列表">工程师添加</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 工单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('home/order/index'); ?>" title="工单列表">工单列表</a></li>
                    <li><a href="<?php echo url('home/order/orderadd'); ?>" title="工单添加">工单添加</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('home/user/index'); ?>" title="用户管理">用户列表</a></li>
                    <li><a href="<?php echo url('home/user/adduser'); ?>" title="用户管理">用户添加</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 公司管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('company/index'); ?>" title="公司列表">公司列表</a></li>
                    <li><a href="<?php echo url('home/company/addcompany'); ?>" title="删除的会员">公司添加</a></li>
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
                    <li><a href="<?php echo url('home/order/Repair'); ?>" title="我要保修">我要报修</a></li>
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
            <dt><i class="Hui-iconfont">&#xe622;</i> 维修单查询<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
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
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="code">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="username" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">覆盖区域：</label>
		
			<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:32%">
				<select class="select" size="1" name="province" id="province">
				<if condition="empty($data['province'])">
    			<option value="">请选择省市</option>
    			</if>
				<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:32%">
				<select class="select" size="1" name="city" id='cityinfo'>
				<if condition="empty($data['city'])">
				<option value="">请选择市</option>
				</if>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:32%">
				<select class="select" size="1" name="area" id="areainfo">
				<if condition="empty($data['area'])">
				<option value="">请选择城区</option>
				</if>
				</select>
				</span> </div>
		</div>
<script type="text/javascript">
//select监听事件
    // $(document).ready(function() {
    //     $("#province").change(function(){
    //         var uu = $(this).find('option:selected').val();
    //         $.ajax({
    //         type:"POST",
    //         // url:'getcityinfo',
    //         url:"<?php echo url('home/Cityarea/getcityinfo'); ?>",
    //         data:{'province':uu},
    //         success:function(msg){
    //      // console.log(msg);
    //       $("#cityinfo").html(msg);
    //         }
    //     })
    //     });
    //     $("#cityinfo").change(function(){
    //         var uu = $(this).find('option:selected').val();
    			// var uu = $('province').find('option:selected').val();
    //         $.ajax({
    //             // url  :'getareainfo',
    //             url:"<?php echo url('home/Cityarea/getareainfo'); ?>",
    //             data :{'city':uu},
    //             type :'POST',
    //             success:function(msg){
    //                 $("#areainfo").html(msg);
    //             }
    //         })
    //     });
    // })
</script> 

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span></label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="这里输入详细地址" id="company" name="position">
		</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>等级：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="mobile" name="grade">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>门诊数：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" name="sum" id="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>床位数：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" name="int" id="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>联系人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" name="contacts" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>联系电话：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" name="mobile" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所属公司：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="company">
					<?php if(is_array($company) || $company instanceof \think\Collection || $company instanceof \think\Paginator): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $list['name']; ?>"><?php echo $list['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder=""></textarea>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>客户状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="usertype" type="radio" id="sex-1" value="1" checked>
					<label for="sex-1">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="usertype" value="0">
					<label for="sex-2">停用</label>
				</div>
			</div>
		</div>
<br>
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap/bootstrap.min.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$("#form-member-add").validate({
		rules:{
			code:{
				required:true,
				// minlength:6,
				// maxlength:16,
			},
			grade:{
				required:true,
			}, 
			sum:{
				required:true,
			}, 
			int:{
				required:true,
			},
			contacts:{
				required:true,
			},
			name:{
				required:true,
				// minlength:6,
				// maxlength:16,
			},
			position:{
				required:true,
				// minlength:6,
				// maxlength:16,
			},
			user:{
				required:true,
				// minlength:6,
				// maxlength:16,
			},
			mobile:{
				required:true,
				// minlength:6,
				// maxlength:16,
			},
		},
		// messages: {
  //     companycode: {
  //       required: "请输入公司名",
  //     },
  // },
		submitHandler: function(form) {
            $(form).ajaxSubmit(options);
            return false;
        }
    })
	var options = {
	    url: "<?php echo url('customer/customersave'); ?>",
	    type: 'post',
	    success: function(data) {
	    	layer.msg(data.result);
	    	}
	    } 
})
$(document).ready(function() {
        $("#province").change(function(){
            var uu = $(this).find('option:selected').val();
            $.ajax({
            type:"POST",
            // url:'getcityinfo',
            url:"<?php echo url('home/Cityarea/getcityinfo'); ?>",
            data:{'province':uu},
            success:function(msg){
         // console.log(msg);
          $("#cityinfo").html(msg);
            }
        })
        });
        $("#cityinfo").change(function(){
            var uu = $(this).find('option:selected').val();
             var province = $('#province').find('option:selected').val();
            $.ajax({
                // url  :'getareainfo',
                url:"<?php echo url('home/Cityarea/getareainfo'); ?>",
                data :{'city':uu,'province':province},
                type :'POST',
                success:function(msg){
                    $("#areainfo").html(msg);
                }
            })
        });
    })
function submit_form(){
        $.ajax({
            type:"POST",
            // url:"<?php echo url('loginvalidate'); ?>",
            url:"<?php echo url('customersave'); ?>",
            data:$("form").serialize(),//将表单序列化
            dataType:'json',
            success:function(data){
                    layer.alert(data.result);
            }
        })
    }
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>