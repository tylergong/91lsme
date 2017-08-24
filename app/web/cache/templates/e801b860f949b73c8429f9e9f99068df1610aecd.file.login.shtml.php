<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:53
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/login.shtml" */ ?>
<?php /*%%SmartyHeaderCode:1302631075966fbf1b232e2-76594112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e801b860f949b73c8429f9e9f99068df1610aecd' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/login.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302631075966fbf1b232e2-76594112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbf1b730c6_55009816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbf1b730c6_55009816')) {function content_5966fbf1b730c6_55009816($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
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
