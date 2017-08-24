<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 17:16:56
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/config.shtml" */ ?>
<?php /*%%SmartyHeaderCode:210199041059673a889c2295-21661541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c3093401bc77dd20af8b967f60aab5e59c864be' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/config.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210199041059673a889c2295-21661541',
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
  'unifunc' => 'content_59673a88a38a69_02747626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59673a88a38a69_02747626')) {function content_59673a88a38a69_02747626($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
