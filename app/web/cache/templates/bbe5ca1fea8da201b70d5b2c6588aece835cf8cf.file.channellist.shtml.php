<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-25 11:41:15
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/channellist.shtml" */ ?>
<?php /*%%SmartyHeaderCode:176508010054ed445b0a7b05-66509252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe5ca1fea8da201b70d5b2c6588aece835cf8cf' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/channellist.shtml',
      1 => 1418324412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176508010054ed445b0a7b05-66509252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'pageview' => 0,
    'cpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ed445b154f32_69871665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ed445b154f32_69871665')) {function content_54ed445b154f32_69871665($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">频道管理</div>
	<div class="add icon" id="add" onclick="menu.tourl('/admin-channel?type=add');"></div>
</div> 
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table1">
		<tr> 
			<th>频道ID</th>
			<th>频道名称</th> 
			<th>是否前台显示</th> 
			<th>操作</th>
		</tr>
		<!-- <?php if ($_smarty_tpl->tpl_vars['list']->value) {?> -->
		<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> -->
		<!-- <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['l']['index']%2==0) {?> -->
		<tr class="odd"><!-- <?php } else { ?> --><tr class="even"><!-- <?php }?> --> 
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cname'];?>
</td> 
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_show']==1) {?>是<?php } else { ?>否<?php }?></td> 
			<td><div class="pic"><a onclick="menu.tourl('/admin-channel?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
&type=edit')"></a></div></td>
		</tr>
		<!-- <?php endfor; endif; ?> -->
		<!-- <?php } else { ?> -->
		<tr class="odd"><td colspan=4>暂无数据</td></tr>
		<!-- <?php }?> -->
	</table> 
	<div class="operating">
		<!-- 分页 -->
		<div class="pagination"> 
			<div class="pagiR"><?php echo $_smarty_tpl->tpl_vars['pageview']->value;?>
  
				转到<input type="text" name="page" id="page" value="<?php echo $_smarty_tpl->tpl_vars['cpage']->value;?>
" />页
				<input type="button" value="GO" id="go" />
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#go').click(function() {
		var gv = $('#page').val();
		var reg1 = /^\d+$/;
		if (reg1.test(gv)) {
			menu.tourl('/admin-channellist?page=' + gv);
		} else {
			alert('请输入正确定的页数');
		}
	});
<?php echo '</script'; ?>
>
<?php }} ?>
