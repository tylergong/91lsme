<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:03:54
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:182490953754d331fad77539-85083151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae3442bc7b79da4a7e9b9865b9baab1c3013ccfe' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/index.shtml',
      1 => 1418324422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182490953754d331fad77539-85083151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d331fadbbf01_79652480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d331fadbbf01_79652480')) {function content_54d331fadbbf01_79652480($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">后台首页</div> 
</div> 
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table2">
		<tr>
			<td class="titleTd">用户数：</td>
			<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['count']->value['user']['count'];?>
</td>
		</tr>
		<tr>
			<td class="titleTd">文章数：</td>
			<td class="mainTd"><?php echo $_smarty_tpl->tpl_vars['count']->value['article']['count'];?>
</td>
		</tr> 
	</table>
</div><?php }} ?>
