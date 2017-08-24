<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:29
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/admin.shtml" */ ?>
<?php /*%%SmartyHeaderCode:9483317845966fbd9678292-92926918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf30ca7f5853a7352f5ef7f85a8c551cac917e3' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/admin.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9483317845966fbd9678292-92926918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbd977da65_36017140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbd977da65_36017140')) {function content_5966fbd977da65_36017140($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
<!doctype html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->getConfigVariable('admin_title');?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="/app/web/templates/public/image/favicon.ico">
		<link rel="stylesheet" href="/app/web/templates/admin/css/admin.css" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/jquery/jquery-1.6.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/jquery/jquery.form.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/app/web/templates/admin/js/admin.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="all">
			<!-- 顶部 -->
			<div class="top"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/admin/html/header.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
			<!-- 内容 -->
			<div class="content">
				<!-- 左边菜单 -->
				<div class="left"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/admin/html/menu.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
				<!-- 主要内容-->
				<div class="main"></div>
			</div>
			<div class="footer"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/admin/html/footer.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			menu.tourl('/admin-status');
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
