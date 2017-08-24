<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-08 22:48:03
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/account.shtml" */ ?>
<?php /*%%SmartyHeaderCode:4394816285960f0a35cfe55-97427844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20a1e5db1f5a637db8eb576b1000c7fe77e19ed' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/account.shtml',
      1 => 1421004846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4394816285960f0a35cfe55-97427844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5960f0a36a6203_85174713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5960f0a36a6203_85174713')) {function content_5960f0a36a6203_85174713($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">账号管理</div>
	<div class="bank" onclick="menu.tourl('/admin-accountlist')">返回账号列表</div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table2">
		<tr>
			<td class="titleTd">ID：</td>
			<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
"></td>
		</tr>
		<tr>
			<td class="titleTd">管理员账号：</td>
			<td class="mainTd"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['uname'];?>
" id="uname" name="uname" /></td>
		</tr>
		<tr>
			<td class="titleTd">密码：</td>
			<td class="mainTd"><input type="text" id="upwd" name="upwd" /><span style="color: red;"> (注：不改密码请留空)</span></td>
		</tr>
		<tr>
			<td class="titleTd">是否起效：</td>
			<td class="mainTd">
				<label><input type="radio" name="is_show" id="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['account']->value['is_show']==1) {?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="is_show" id="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['account']->value['is_show']==0) {?>checked="checked"<?php }?>/>否 </label></td>
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
		if ($.trim($("#upwd").val()).length > 0) {
			var statu = confirm("你确认要修改账号 " + $('#uname').val() + " 的密码吗?");
			if (!statu) {
				return false;
			}
		}
		var data = 'id=' + $('#id').val() +
				'&uname=' + $('#uname').val() +
				'&upwd=' + $('#upwd').val() +
				'&is_show=' + $('input[name="is_show"]:checked').val() +
				"&_r=" + Math.random();
		$.ajax({
			type: "POST",
			url: '/admin-accountedit',
			data: data,
			dataType: "json",
			success: function(data) {
				if (data > 0) {
					menu.tourl('/admin-accountlist');
				} else {
					alert('对不起，修改失败或暂无权限！！！');
				}
			}
		})
	});
<?php echo '</script'; ?>
><?php }} ?>
