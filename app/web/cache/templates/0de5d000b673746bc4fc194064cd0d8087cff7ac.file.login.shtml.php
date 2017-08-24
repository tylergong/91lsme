<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:03:46
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/login.shtml" */ ?>
<?php /*%%SmartyHeaderCode:136251437354d331f2d4bc32-65044592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de5d000b673746bc4fc194064cd0d8087cff7ac' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/login.shtml',
      1 => 1418324424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136251437354d331f2d4bc32-65044592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d331f2d846a0_21234742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d331f2d846a0_21234742')) {function content_54d331f2d846a0_21234742($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
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
