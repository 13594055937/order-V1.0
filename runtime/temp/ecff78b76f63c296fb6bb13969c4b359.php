<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\engineer\index.html";i:1516601666;s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\meta.html";i:1516008607;s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\header.html";i:1515742683;s:72:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\menu.html";i:1516603346;s:74:"C:\PHP\php11\WWW\order\order-v1.0\order/Admin/home\view\public\footer.html";i:1516008553;}*/ ?>
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
                    <li><a href="<?php echo url('home/customer/index'); ?>" title="资讯管理">客户列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 工程师管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('home/engineer/index'); ?>" title="工程师列表">工程师列表</a></li>
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
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 会员列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、编号" id="search" name="value">
				<button type="button" class="btn btn-success radius" onclick="search()"><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="<?php echo url('home/order/orderadd'); ?>" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加工单</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<form action="">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th><input type="checkbox" name="" id="checkbox"></th>
							<th>ID</th>
							<th>工程师编号</th>
							<th>客户名称</th>
							<th>手机号</th>
							<th>微信id号</th>
							<th>微信号</th>
							<th>所属公司名称</th>
							<th>类型</th>
							<th>所属地区</th>
							<th >费用</th>
							<th >状态</th>
							<th >备注</th>
							<th >创建时间</th>
							<th>关联用户id</th>
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
							<td><?php echo $vo['engineerCode']; ?></td>
							<td><?php echo $vo['engineerName']; ?></td>
							<td><?php echo $vo['mobile']; ?></td>
							<td><?php echo $vo['openid']; ?></td>
							<td><?php echo $vo['weixin']; ?></td>
							<td><?php echo $vo['company']; ?></td>
							<td><?php echo $vo['type']; ?></td>
							<td><?php echo $vo['province']; ?><?php echo $vo['city']; ?><?php echo $vo['area']; ?></td>
							<td><?php echo $vo['stardfee']; ?></td>
							<td><?php echo $vo['status']; ?></td>
							<td><?php echo $vo['memo']; ?></td>
							<td><?php echo $vo['create_time']; ?></td>
							<td>无</td>
							<td class="td-manage">
							<?php if($vo['status']==1): ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
								<?php else: ?>
								<a style="text-decoration:none" onClick="member_stop(<?php echo $vo['id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>
								<?php endif; ?>
							<a title="编辑" href="javascript:;" onclick="member_edit('<?php echo url('useredit',['id'=>$vo['id']]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
							<a style="text-decoration:none" class="ml-5" onclick="change_password('<?php echo url('changepassword',['id'=>$vo['id']]); ?>')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="member_del(<?php echo $vo['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
				</form>
			</div>
				<?php echo $list->render(); ?>
		</article>
	</div>
</section>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<script type="text/javascript" src="__STATIC__/bootstrap/bootstrap.min.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="../../../public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="../../../public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*密码-修改*/
function change_password(url){
		layer.open({
  type: 2 //Page层类型
  ,area: ['430px', '345px']
  ,title: '用户添加'
  ,shade: 0.6 //遮罩透明度
  ,maxmin: true //允许全屏最小化
  ,anim: 1 //0-6的动画形式，-1不开启
  ,content: url
}); 
}
/*用户-查看*/
function search(){
	var search = $('#search').val();
	window.location.href='searchuser?value='+search;
	// $.post("<?php echo url('user/searchuser'); ?>",{value:search});
}
/*用户-停用*/
function member_stop(id){
	layer.confirm('确认要停用/启用吗？',function(){
		$.post("<?php echo url('user/status'); ?>",{id:id},function(data){
		layer.msg(data.message);
		window.location.replace(location.href);
		});
	});
}
/*用户-编辑*/
function member_edit(url){
	layer.open({
  type: 2 //Page层类型
  ,area: ['770px', '620px']
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
		$.get("<?php echo url('user/userdel'); ?>",{id:id},function(data){
			layer.msg(data.retuls,{icon:1,time:1000});
		});
	window.location.replace(location.href);
	});
}
//批量删除
function datadel(){
	var len=$("input:checkbox:checked").length;
	if($('#checkbox').prop('checked') ){
		len = len-1
	}
	 if(len==0){
	 layer.msg("没有选中用户。");
	}
	 else{
	 	layer.confirm('确定要删除这'+len+'名用户吗？',function(){
	 	$.post("<?php echo url('user/deleteuser'); ?>",$('form').serializeArray(),
	 	 function(data){
	 		layer.msg(data.message);
	 		window.location.replace(location.href);
	 	});
	 })
	}
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>