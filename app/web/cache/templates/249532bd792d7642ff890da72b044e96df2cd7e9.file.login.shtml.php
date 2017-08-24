<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 11:06:16
         compiled from "D:\upupw\htdocs\projectmode\app\web\templates\admin\html\login.shtml" */ ?>
<?php /*%%SmartyHeaderCode:2227254b33a28c4b793-94122768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249532bd792d7642ff890da72b044e96df2cd7e9' => 
    array (
      0 => 'D:\\upupw\\htdocs\\projectmode\\app\\web\\templates\\admin\\html\\login.shtml',
      1 => 1418353222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227254b33a28c4b793-94122768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b33a28e10a00_30449496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b33a28e10a00_30449496')) {function content_54b33a28e10a00_30449496($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
<!doctype html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->getConfigVariable('web_title');?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="/app/web/templates/public/image/favicon.ico">
		<link rel="stylesheet" href="/app/web/templates/admin/css/login.css" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/jquery/jquery-1.6.4.min.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="loginBox">
			<div class="content">  
				<label>用户：</label><input type="text" id="username" name="username" /><br />
				<label>密码：</label><input type="password" id="password" name="password" /><br />
				<div class="btn">
					<input type="image" src="/app/web/templates/admin/image/loginBtn.png" id="loginBtn" />
					<div class="btnBottom"><img src="/app/web/templates/admin/image/loginBtnBottom.png" /></div>
				</div>
				<div class="warn"></div> 
				<?php echo '<script'; ?>
 type="text/javascript" src="/app/web/templates/admin/js/login.js"><?php echo '</script'; ?>
>
			</div>
		</div>
	</body>
</html><?php }} ?>
