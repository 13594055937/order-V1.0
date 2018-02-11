<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/company\view\company\index.html";i:1518162941;s:90:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/company\view\..\..\com\view\public\meta.html";i:1518159452;s:92:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/company\view\..\..\com\view\public\footer.html";i:1518053708;}*/ ?>
﻿<!DOCTYPE HTML>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 会员列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入公司名称、编号" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜公司</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="addcompany()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加公司</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th><input type="checkbox" name="" id="checkbox"></th>
							<th>公司ID</th>
							<th>公司编号</th>
							<th>公司名称</th>
							<th>公司位置</th>
							<th>联系人</th>
							<th>联系方式</th>
							<th>状态</th>
							<th>备注</th>
							<th >操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c">
							<td width="25">
							<input type="checkbox" value="<?php echo $vo['id']; ?>" name="delete[]" >
							</td>
							<td><?php echo $vo['id']; ?></td>
							<td><?php echo $vo['code']; ?></td>
							<td><?php echo $vo['name']; ?></td>
							<td><?php echo $vo['province']; ?><?php echo $vo['city']; ?><?php echo $vo['area']; ?><?php echo $vo['position']; ?></td>
							<td><?php echo $vo['contactname']; ?></td>
							<td><?php echo $vo['contacttel']; ?></td>
							<td class="td-status">
								<?php if($vo['status']==1): ?>
								<span class="label label-success radius">已启用</span>
								<?php elseif($vo['status']==0): ?>
								<span class="label label-defaunt radius">已停用</span>
								<?php else: ?>
								<span class="label label-defaunt radius">异常</span>'
								<?php endif; ?>
							</td>
							<td><?php echo $vo['memo']; ?></td>
							<td class="td-manage">
							<?php if($vo['status']==1): ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
								<?php else: ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>
								<?php endif; ?>
							<a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('companyedit',['id'=>$vo['id']]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
							<a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
				</form>
			</div>
				<?php echo $list->render(); ?>
		</article>
	</div>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../../public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="../../../public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*密码-修改*/
function addcompany(){
		layer.open({
  type: 2 //Page层类型
  ,area: ['800px', '500px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: 'addcompany.html'
}); 
}
/*用户-查看*/
function search(){
	var search = $('#search').val();
	window.location.href='searchcompany?value='+search;
	// $.post("<?php echo url('user/searchuser'); ?>",{value:search});
}
/*用户-停用*/
function member_stop(id){
	layer.confirm('确认要停用/启用吗？',function(){
		$.post("<?php echo url('company/status'); ?>",{id:id},function(data){
		layer.msg(data.message);
		setTimeout("location.reload()",1000);
		});
	});
}
/*用户-编辑*/
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['800px', '500px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
/*用户-删除*/
function member_del(id){
	layer.confirm('确认要删除吗？',function(){
		$.post("<?php echo url('company/companydel'); ?>",{id:id},function(data){
			layer.msg(data.retuls,{icon:1,time:1000});
			    setTimeout("location.reload()",1000);
			// window.location.replace(location.href);
		});
	});
}
//批量删除
function datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中公司。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'个公司吗？',function(){
	 	$.post("<?php echo url('company/deletecompany'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		setTimeout("location.reload()",1000);
	 	});
	 })
	}
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>