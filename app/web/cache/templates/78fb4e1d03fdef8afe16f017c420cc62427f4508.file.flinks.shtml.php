<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-14 11:30:43
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/flinks.shtml" */ ?>
<?php /*%%SmartyHeaderCode:1336510113570f0ee3e38045-39346990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78fb4e1d03fdef8afe16f017c420cc62427f4508' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/flinks.shtml',
      1 => 1419203722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336510113570f0ee3e38045-39346990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flinks' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_570f0ee3f13522_41413873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570f0ee3f13522_41413873')) {function content_570f0ee3f13522_41413873($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">友链管理</div>
	<div class="bank" onclick="menu.tourl('/admin-flinkslist')">返回友链列表</div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<form id="formToUpdate" method="post" action="#">
		<table border="1" class="table2">
			<tr>
				<td class="titleTd">ID：</td>
				<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['flinks']->value['id'];?>
<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['flinks']->value['id'];?>
"></td>
			</tr>
			<tr>
				<td class="titleTd">名称：</td>
				<td class="mainTd"><input type="text" id="fname" name="fname"  value="<?php echo $_smarty_tpl->tpl_vars['flinks']->value['fname'];?>
"/></td>
			</tr>
			<tr>
				<td class="titleTd">链接：</td>
				<td class="mainTd"><input type="text" id="flink" name="flink"  value="<?php echo $_smarty_tpl->tpl_vars['flinks']->value['flink'];?>
" size="50"/></td>
			</tr>
			<tr>
				<td class="titleTd">显示顺序：</td>
				<td class="mainTd"><input type="text" id="orderby" name="orderby"  value="<?php echo $_smarty_tpl->tpl_vars['flinks']->value['orderby'];?>
"/></td>
			</tr>
			<tr>
				<td class="titleTd">是否有效：</td>
				<td class="mainTd">
					<label><input type="radio" name="is_show" id="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['flinks']->value['is_show']==1) {?>checked="checked"<?php }?> />是</label>
					<label><input type="radio" name="is_show" id="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['flinks']->value['is_show']==0) {?>checked="checked"<?php }?>/>否 </label>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
					<div id="submit" class="icon"></div> 
				</td>
			</tr>
		</table>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#submit').click(function() {
		var _type = $('#type').val();
		$("#formToUpdate").ajaxSubmit({
			type: 'post',
			url: '/admin-flinksedit',
			dataType: "json",
			success: function(data) {
				console.log(data);
				if (data) {
					alert('操作成功');
					if (_type == 'add') {
						_type = 'edit';
					}
					menu.tourl('/admin-flinks?type=' + _type + '&id=' + data);
				} else {
					alert('操作失败');
				}
			},
			error: function(XmlHttpRequest, textStatus, errorThrown) {
				console.log(XmlHttpRequest);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	});
<?php echo '</script'; ?>
><?php }} ?>
