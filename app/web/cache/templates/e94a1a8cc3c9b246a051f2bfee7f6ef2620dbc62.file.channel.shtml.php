<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-21 09:41:43
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/channel.shtml" */ ?>
<?php /*%%SmartyHeaderCode:197151344655d681d773f357-45863731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e94a1a8cc3c9b246a051f2bfee7f6ef2620dbc62' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/channel.shtml',
      1 => 1420753484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197151344655d681d773f357-45863731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d681d77f68b8_89808039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d681d77f68b8_89808039')) {function content_55d681d77f68b8_89808039($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">频道管理</div>
	<div class="bank" onclick="menu.tourl('/admin-channellist')">返回频道列表</div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table2">
		<tr>
			<td class="titleTd">频道ID：</td>
			<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
<input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['id'];?>
"></td>
		</tr>
		<tr>
			<td class="titleTd">频道名称：</td>
			<td class="mainTd"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['cname'];?>
" id="cname" name="cname" /></td>
		</tr>
		<tr>
			<td class="titleTd">频道名称：</td>
			<td class="mainTd">
				<label><input type="radio" name="is_show" id="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['channel']->value['is_show']==1) {?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="is_show" id="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['channel']->value['is_show']==0) {?>checked="checked"<?php }?>/>否 </label></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
				<div id="submit" class="icon"></div> 
			</td>
		</tr>
	</table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#submit').click(function() {
		var _type = $('#type').val();
		var data = 'cid=' + $('#cid').val() +
				'&cname=' + $('#cname').val() +
				'&is_show=' + $('input[name="is_show"]:checked').val() +
				"&_r=" + Math.random();
		$.ajax({
			type: "POST",
			url: '/admin-channeledit',
			data: data,
			dataType: "json",
			success: function(data) {
				if (data) {
					alert('操作成功');
					if (_type == 'add') {
						_type = 'edit';
					}
					menu.tourl('/admin-channel?type=' + _type + '&id=' + data);
				} else {
					alert('操作失败');
				}
			}
		})
	});
<?php echo '</script'; ?>
><?php }} ?>
