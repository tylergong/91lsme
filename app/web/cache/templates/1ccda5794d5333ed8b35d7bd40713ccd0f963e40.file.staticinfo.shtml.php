<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:03:59
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/staticinfo.shtml" */ ?>
<?php /*%%SmartyHeaderCode:120591682154d331fff2c4e3-24278935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ccda5794d5333ed8b35d7bd40713ccd0f963e40' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/staticinfo.shtml',
      1 => 1420769014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120591682154d331fff2c4e3-24278935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'st_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d33200030d19_51353233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d33200030d19_51353233')) {function content_54d33200030d19_51353233($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">静态管理</div> 
</div> 
<!-- 详细内容 -->
<div class="detail"> 
	<table border="1" class="table2">
		<tr>
			<td class="onceTd" colspan='2' >
				<!--<span class="guan" onclick=''>缓存关闭</span>--> 
				<span class="kai" onclick=''>当前<?php if ($_smarty_tpl->tpl_vars['st_mode']->value) {?>静态<?php } else { ?>缓存<?php }?>模式开启</span>
			</td> 
		</tr>
	</table>
	<div></div>
	<?php if ($_smarty_tpl->tpl_vars['st_mode']->value) {?>
	<table border="1" class="table2"> 
		<tr>
			<td class="titleTd">首页静态页：</td>
			<td class="mainTd"><input type="button" value="点击更新首页静态页" id="clearindex" onclick="menu.upCache('html', 'index', this);" /></td>
		</tr>
		<tr>
			<td class="titleTd">列表页静态页：</td>
			<td class="mainTd"><input type="button" value="点击更新列表页静态页" onclick="menu.upCache('html', 'list', this);"  /></td>
		</tr> 
		<tr>
			<td class="titleTd">文章页静态页：</td>
			<td class="mainTd"><input type="button" value="点击更新文章页静态页" onclick="menu.upCache('html', 'article', this);"  /></td>
		</tr> 
	</table>
	<?php } else { ?>
	<table border="1" class="table2"> 
		<tr>
			<td class="titleTd">首页缓存：</td>
			<td class="mainTd"><input type="button" value="点击更新首页缓存" id="clearindex" onclick="menu.upCache('cache', 'index', this);" /></td>
		</tr>
		<tr>
			<td class="titleTd">列表页缓存：</td>
			<td class="mainTd"><input type="button" value="点击更新列表页缓存" onclick="menu.upCache('cache', 'list', this);"  /></td>
		</tr> 
		<tr>
			<td class="titleTd">文章页缓存：</td>
			<td class="mainTd"><input type="button" value="点击更新文章页缓存" onclick="menu.upCache('cache', 'article', this);"  /></td>
		</tr> 
	</table>
	<?php }?>
</div><?php }} ?>
