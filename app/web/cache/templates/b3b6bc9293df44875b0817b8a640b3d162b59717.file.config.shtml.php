<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:05:00
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/config.shtml" */ ?>
<?php /*%%SmartyHeaderCode:172610081254d3323c05e112-91030218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b6bc9293df44875b0817b8a640b3d162b59717' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/config.shtml',
      1 => 1421004850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172610081254d3323c05e112-91030218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'cdn_url' => 0,
    'web_title' => 0,
    'admin_title' => 0,
    'web_keywords' => 0,
    'web_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d3323c0b3211_50318315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3323c0b3211_50318315')) {function content_54d3323c0b3211_50318315($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">配置文件</div> 
</div> 
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table2">
		<tr>
			<td class="titleTd">网站路径：</td>
			<td class="mainTd"><input type="text" id="web_url" value="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
"  size="50" /></td>
		</tr>
		<tr>
			<td class="titleTd">图片路径：</td>
			<td class="mainTd"><input type="text" id="cdn_url" value="<?php echo $_smarty_tpl->tpl_vars['cdn_url']->value;?>
" size="50" /></td>
		</tr> 
		<tr>
			<td class="titleTd">网站标题：</td>
			<td class="mainTd"><input type="text" id="web_title" value="<?php echo $_smarty_tpl->tpl_vars['web_title']->value;?>
" size="50"  /></td>
		</tr> 
		<tr>
			<td class="titleTd">后台标题：</td>
			<td class="mainTd"><input type="text" id="admin_title" value="<?php echo $_smarty_tpl->tpl_vars['admin_title']->value;?>
" size="50"  /></td>
		</tr>
		<tr>
			<td class="titleTd">keywords：</td>
			<td class="mainTd"><input type="text" id="web_keywords" value="<?php echo $_smarty_tpl->tpl_vars['web_keywords']->value;?>
" size="50"  /></td>
		</tr> 
		<tr>
			<td class="titleTd">description：</td>
			<td class="mainTd"><input type="text" id="web_description" value="<?php echo $_smarty_tpl->tpl_vars['web_description']->value;?>
" size="70"  /></td>
		</tr> 
		<tr>
			<td colspan="2">
				<div id="submit" class="icon" id="submit"></div>
			</td>
		</tr>
	</table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	function empty_c(str) {
		return (str == "" || str == null || str == undefined || str == 0) ? true : false
	}

	$('#submit').click(function() {
		var web_url = $('#web_url');
		var cdn_url = $('#cdn_url');
		var web_title = $('#web_title');
		var web_keywords = $('#web_keywords');
		var web_description = $('#web_description');
		if (empty_c(web_url.val())
				|| empty_c(cdn_url.val())
				|| empty_c(web_title.val())
				|| empty_c(web_keywords.val())
				|| empty_c(web_description.val())
				) {
			alert('配置不能有空选项');
			return;
		}
		var data = "web_url=" + web_url.val() +
				"&cdn_url=" + cdn_url.val() +
				"&web_title=" + web_title.val() +
				"&web_keywords=" + web_keywords.val() +
				"&web_description=" + web_description.val() +
				"&_r=" + Math.random();
		$.ajax({
			type: "POST",
			url: "/admin-configedit",
			data: data,
			dataType: "json",
			success: function(data) {
				if (data > 0) {
					alert('修改成功');
				} else {
					alert('对不起，修改失败或暂无权限！！！');
				}
			}
		});
	});
<?php echo '</script'; ?>
><?php }} ?>
