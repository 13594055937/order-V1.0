<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/customer\view\customer\addcustomer.html";i:1518143551;s:91:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/customer\view\..\..\com\view\public\meta.html";i:1518159452;s:95:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/customer\view\..\..\com\view\public\cityarea.html";i:1518077092;s:93:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/customer\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
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
			<span class="select-box" style="width:25%">
				<select class="select" size="1" name="province" id="province">
				<if condition="empty($data['province'])">
    			<option value="">请选择省市</option>
    			</if>
				<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:25%">
				<select class="select" size="1" name="city" id='cityinfo'>
				<if condition="empty($data['city'])">
				<option value="">请选择市</option>
				</if>
				</select>
				</span>&nbsp;--
				<span class="select-box" style="width:25%">
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
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



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
//地址选择
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