<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-15 15:48:48
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/articlelist/html/search.shtml" */ ?>
<?php /*%%SmartyHeaderCode:18591130215969c8e0aa0206-02388537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3519c865c916c9fb2f3c3c30bd372b9b8efa65' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/articlelist/html/search.shtml',
      1 => 1500104926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18591130215969c8e0aa0206-02388537',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5969c8e0b62e69_77752737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5969c8e0b62e69_77752737')) {function content_5969c8e0b62e69_77752737($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $_smarty_tpl->getConfigVariable('web_title');?>
</title>
	<meta name="renderer" content="webkit">
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="generator" data-variable="http://www.91lsme.com"/>
	<meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('web_keywords');?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('web_description');?>
">
	<link href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/image/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
	<link rel='stylesheet' href='<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/css/metinfo.css'>

	<!--[if lt IE 10]>
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/js/media.match.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/js/respond.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/js/classList.min.js'><?php echo '</script'; ?>
>
	<![endif]-->

</head>
<body class='met-navfixed'>
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
	<p class="browserupgrade font-size-18">
		你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。
	</p>
</div>
<![endif]-->

<nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
	<?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/newlayout/html/navbar.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</nav>

<div id="page-wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/newlayout/html/search.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<footer>
	<?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/newlayout/html/footer.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</footer>

<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide">
	<i class="icon wb-chevron-up" aria-hidden="true"></i>
</button>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/js/metinfo.js"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>