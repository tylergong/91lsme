<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 17:17:06
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/PHPExcel/index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:75704428259673a92844159-90571637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6749c0385d1a7e45790441d3da3c924ac4325102' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/PHPExcel/index.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75704428259673a92844159-90571637',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59673a928ed961_63354689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59673a928ed961_63354689')) {function content_59673a928ed961_63354689($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">PHPExcel</div> 
</div>
<!-- 详细内容 -->
<div class="detail"> 
	<div style="text-align: center;"> 
		<input type="button" value="导出Excel" id="pedown">
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#pedown').click(function() {
		window.location.href = '/admin-PHPExcel-down';
	});
<?php echo '</script'; ?>
>
<?php }} ?>
