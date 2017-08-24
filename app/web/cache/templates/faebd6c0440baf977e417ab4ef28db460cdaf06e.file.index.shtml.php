<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-24 15:42:25
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/PHPExcel/index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:15600048795539f3e17ccc56-71774686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faebd6c0440baf977e417ab4ef28db460cdaf06e' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/PHPExcel/index.shtml',
      1 => 1420764412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15600048795539f3e17ccc56-71774686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5539f3e18ca976_92682775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539f3e18ca976_92682775')) {function content_5539f3e18ca976_92682775($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
