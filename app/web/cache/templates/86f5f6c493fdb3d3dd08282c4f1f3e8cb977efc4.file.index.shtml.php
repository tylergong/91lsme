<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 11:06:26
         compiled from "D:\upupw\htdocs\projectmode\app\web\templates\admin\html\index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:2099154b33a32c17058-05560676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f5f6c493fdb3d3dd08282c4f1f3e8cb977efc4' => 
    array (
      0 => 'D:\\upupw\\htdocs\\projectmode\\app\\web\\templates\\admin\\html\\index.shtml',
      1 => 1418353220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2099154b33a32c17058-05560676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b33a32c6cf69_96898526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b33a32c6cf69_96898526')) {function content_54b33a32c6cf69_96898526($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
