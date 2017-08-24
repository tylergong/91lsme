<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:30
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:21335474985966fbda11b703-27798004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc15f529c3a1218ee05974d5a1f94023500da6e' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/index.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21335474985966fbda11b703-27798004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbda1f0519_07402059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbda1f0519_07402059')) {function content_5966fbda1f0519_07402059($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
