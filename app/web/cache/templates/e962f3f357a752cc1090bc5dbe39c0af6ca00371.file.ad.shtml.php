<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-21 09:41:07
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/ad.shtml" */ ?>
<?php /*%%SmartyHeaderCode:169341560955d681b34d4079-83779712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e962f3f357a752cc1090bc5dbe39c0af6ca00371' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/ad.shtml',
      1 => 1418928166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169341560955d681b34d4079-83779712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d681b3646688_54030542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d681b3646688_54030542')) {function content_55d681b3646688_54030542($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">广告管理</div>
	<div class="bank" onclick="menu.tourl('/admin-adlist')">返回广告列表</div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<form id="formToUpdate" method="post" action="#" enctype="multipart/form-data">
		<table border="1" class="table2">
			<tr>
				<td class="titleTd">ID：</td>
				<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['ad']->value['id'];?>
<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['id'];?>
"></td>
			</tr>
			<tr>
				<td class="titleTd">广告图：</td>
				<td class="mainTd">
					<img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['imgurl'];?>
" height="50"/>
					<br/>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['imgurl'];?>
" id="imgurl" name="imgurl" size="60"  />
					<br/>
					<input type="file" name="cimgurl">(尺寸：670*80)
				</td>
			</tr>
			<tr>
				<td class="titleTd">说明：</td>
				<td class="mainTd"><input type="text" id="title" name="title"  value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
"/></td>
			</tr>
			<tr>
				<td class="titleTd">是否链接：</td>
				<td class="mainTd">
					<label><input type="radio" name="is_link" id="is_link" value="1" <?php if ($_smarty_tpl->tpl_vars['ad']->value['is_link']==1) {?>checked="checked"<?php }?> />是</label>
					<label><input type="radio" name="is_link" id="is_link" value="0" <?php if ($_smarty_tpl->tpl_vars['ad']->value['is_link']==0) {?>checked="checked"<?php }?>/>否 </label>
					<br/>
					<input type="text" name="jumpurl" id="jumpurl" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['jumpurl'];?>
" size="50" />
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
			url: '/admin-adedit',
			dataType: "json",
			success: function(data) {
				if (data) {
					alert('操作成功');
					if (_type == 'add') {
						_type = 'edit';
					}
					menu.tourl('/admin-ad?type=' + _type + '&id=' + data);
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
