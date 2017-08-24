<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:36
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/article.shtml" */ ?>
<?php /*%%SmartyHeaderCode:5188634615966fbe00f3306-42786638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '529271d8470b940d921937c8495549d1d7c91cec' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/article.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5188634615966fbe00f3306-42786638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'clist' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbe01ea904_77449427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbe01ea904_77449427')) {function content_5966fbe01ea904_77449427($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div>
	<div class="word">文章管理</div>
	<div class="bank" onclick="menu.tourl('/admin-articlelist')">返回文章列表</div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table2">
		<tr>
			<td class="titleTd">文章ID：</td>
			<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>

				<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
				<span class="preview">
					<a href="/article?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" target="_blank">预览</a>&nbsp;&nbsp;&nbsp;&nbsp; 
					<!-- <input type="button" value="生成静态页" id="clearindex" onclick="menu.upActicle(<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['article']->value['cid'];?>
, this);" /> -->
				</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd"><span style="color:red">(*)</span>文章标题：</td>
			<td class="mainTd"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" id="title" name="title" size="50" /></td>
		</tr>
		<tr>
			<td class="titleTd"><span style="color:red">(*)</span>文章分类：</td>
			<td class="mainTd">
				<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['name'] = 'cl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['clist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total']);
?> -->
				<label><input type="radio" name="channel" id="channel" value="<?php echo $_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value['cid']==$_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['id']) {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['cname'];?>
</label>
				<!-- <?php endfor; endif; ?> -->
			</td>
		</tr>
		<tr>
			<td class="titleTd">是否超链：</td>
			<td class="mainTd">
				<label><input type="radio" name="is_link" id="is_link" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['is_link']==1) {?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="is_link" id="is_link" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['is_link']==0) {?>checked="checked"<?php }?>/>否</label>
				<br/>
				<input type="text" name="jumpurl" id="jumpurl" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['jumpurl'];?>
" size="50" />
			</td>
		</tr>
		<tr>
			<td class="titleTd">是否显示：</td>
			<td class="mainTd">
				<label><input type="radio" name="is_show" id="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['is_show']==1) {?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="is_show" id="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['is_show']==0) {?>checked="checked"<?php }?>/>否</label>
			</td>
		</tr>		
		<tr>
			<td class="titleTd">是否置顶：</td>
			<td class="mainTd">
				<label><input type="radio" name="is_up" id="is_up" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['up']==1) {?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="is_up" id="is_up" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['up']==0) {?>checked="checked"<?php }?>/>否</label>
			</td>
		</tr>		
		<tr>
			<td class="titleTd">发布日期：</td>
			<td class="mainTd">
				<link rel="stylesheet" type="text/css" href="/plugin/calendar/calendar-blue.css"/>
				<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/calendar/calendar.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/calendar/calendar-setup.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/calendar/lang/calendar-en.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/calendar/lang/calendar-zh.js"><?php echo '</script'; ?>
>
				<input type="text" id="cal-field-1" />
				<button type="submit" id="cal-button-1">...</button>
			</td>
		</tr>
		<tr>
			<td class="titleTd">相关链接：</td>
			<td class="mainTd"> 
				<input type="text" name="rel_link" id="rel_link" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['rel_link'];?>
" size="50" />
			</td>
		</tr>
		<tr>
			<td class="titleTd">内容：</td>
			<td class="mainTd"> 
				<link rel="stylesheet" href="/plugin/editor/themes/default/default.css" />
				<link rel="stylesheet" href="/plugin/editor/plugins/code/prettify.css" type="text/css">
				<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/plugin/editor/kindeditor-min.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/plugin/editor/lang/zh_CN.js"><?php echo '</script'; ?>
>
				<link rel="stylesheet" href="/plugin/editor/plugins/code/prettify.js" type="text/css">
				<textarea name="content" style="width:560px;height:400px;"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
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
</div>
<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			// 日历控件
			Calendar.setup({
				inputField: "cal-field-1",
				button: "cal-button-1",
				align: "Tr"
			});

			// 编辑器
			var editor = KindEditor.create('textarea[name="content"]');

			// 提交数据
			$('#submit').click(function() {
				// 编辑器数据同步
				editor.sync();

				var id = $('#id').val();
				var title = $('#title').val();
				var cid = $('input[name="channel"]:checked').val();
				var is_show = $('input[name="is_show"]:checked').val();
				var is_link = $('input[name="is_link"]:checked').val();
				var is_up = $('input[name="is_up"]:checked').val();
				var jumpurl = $('#jumpurl').val();
				var rel_link = $('#rel_link').val();
				var type = $('#type').val();
				var content = $('textarea[name="content"]').val();
				if (empty_c(title) || empty_c(cid)) {
					alert('请确保*标内容不为空');
					return false;
				}

				KindEditor.ajax('/admin-articleedit', function(data) {
					if (data) {
						alert('操作成功');
						if (type == 'add') {
							type = 'edit';
						}
						menu.tourl('/admin-article?type=' + type + '&id=' + data);
					} else {
						alert('操作失败');
					}
				}, 'POST', {
					id: id,
					title: title,
					cid: cid,
					is_show: is_show,
					is_link: is_link,
					is_up: is_up,
					jumpurl: jumpurl,
					rel_link: rel_link,
					content: content,
				});
			});
			function empty_c(str) {
				return (str == "" || str == null || str == undefined || str == 0) ? true : false
			}
		});
<?php echo '</script'; ?>
>
<?php }} ?>
