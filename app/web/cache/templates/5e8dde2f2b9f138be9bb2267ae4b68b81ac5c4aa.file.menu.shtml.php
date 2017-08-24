<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 11:06:26
         compiled from "app\web\templates\admin\html\menu.shtml" */ ?>
<?php /*%%SmartyHeaderCode:3267254b33a327216a8-24129979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e8dde2f2b9f138be9bb2267ae4b68b81ac5c4aa' => 
    array (
      0 => 'app\\web\\templates\\admin\\html\\menu.shtml',
      1 => 1420775278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267254b33a327216a8-24129979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b33a32740aa8_04156289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b33a32740aa8_04156289')) {function content_54b33a32740aa8_04156289($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="lnav">
	<!-- 菜单标题 -->
	<div class="title"><a onclick="menu.tourl('/admin-status')" style="color: #000">后台管理</a></div>
	<ul class="menu-admin">
		<li class="menu1">
			<div class="icon anno"></div>
			<div class="navWord on">信息管理</div>
			<div class="drop"></div>
		</li>
		<li class="menu2">
			<ul>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-channellist')">频道管理</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-articlelist')">文章管理</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-articlerecyclelist')">文章回收站</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-adlist')">广告管理</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-flinkslist')">友链管理</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-staticinfo')">静态管理</a></div></li>
			</ul>
		</li>
		<li class="menu1">
			<div class="icon product"></div>
			<div class="navWord on">系统管理</div>
			<div class="drop"></div>
		</li>
		<li class="menu2" style="display: none">
			<ul> 
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-config')">模板配置管理</a></div></li> 
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-accountlist')">账号管理</a></div></li> 
			</ul>
		</li>
		<li class="menu1">
			<div class="icon product"></div>
			<div class="navWord on">jQuery EasyUI</div>
			<div class="drop"></div>
		</li>
		<li class="menu2" style="display: none">
			<ul> 
				<!-- <li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-JqueryEasyUI-channellist')">频道管理</a></div></li> -->
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-JqueryEasyUI-articlelist')">文章管理</a></div></li> 
			</ul>
		</li>
		<li class="menu1">
			<div class="icon product"></div>
			<div class="navWord on">HighCharts</div>
			<div class="drop"></div>
		</li>
		<li class="menu2" style="display: none">
			<ul>  
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-HighCharts-pie')">饼状图</a></div></li> 
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-HighCharts-line')">线状图</a></div></li> 
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-HighCharts-column')">柱状图</a></div></li> 
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-HighCharts-column2')">柱状子图</a></div></li>
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-HighCharts-spline')">动态图</a></div></li>  
			</ul>
		</li>
		<li class="menu1">
			<div class="icon product"></div>
			<div class="navWord on">PHPExcel</div>
			<div class="drop"></div>
		</li>
		<li class="menu2" style="display: none">
			<ul>  
				<li><div class="icon"></div><div class="word"><a onclick="menu.tourl('/admin-PHPExcel-index')">excel导出</a></div></li>  
			</ul>
		</li>
	</ul>
</div>
<?php echo '<script'; ?>
 type=text/javascript>
	$(document).ready(function() {
		$(".lnav .menu1:eq(0)").addClass("on");
		$(".lnav .menu2:eq(0)").show();
		$(".lnav li.menu1").click(function() {
			if ($(this).hasClass('on')) {
				// 本身已经展开 则合并
				$(this).removeClass("on").next("li.menu2").slideToggle(300).siblings("li.menu2").slideUp("slow");
			} else {
				// 当前元素展开
				$(this).addClass("on").next("li.menu2").slideToggle(300).siblings("li.menu2").slideUp("slow");
				// 查找当前其他同胞元素 都收起
				$(this).siblings().removeClass("on");
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }} ?>
