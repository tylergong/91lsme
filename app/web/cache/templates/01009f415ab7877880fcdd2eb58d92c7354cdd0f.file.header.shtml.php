<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:29
         compiled from "app/web/templates/admin/html/header.shtml" */ ?>
<?php /*%%SmartyHeaderCode:5236400515966fbd98ae5b0-98342060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01009f415ab7877880fcdd2eb58d92c7354cdd0f' => 
    array (
      0 => 'app/web/templates/admin/html/header.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5236400515966fbd98ae5b0-98342060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbd9962674_55628426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbd9962674_55628426')) {function content_5966fbd9962674_55628426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gm/Documents/www/91lsme/framework/lib/smarty/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="description">欢迎您，<span id="username"><?php echo $_COOKIE['91lsme_uname'];?>
</span>（在线）管理员<span id="date"> <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
</span></div>
<div class="topNav">
	<span class="icon index"></span><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
" target="_blank">站点首页</a> 
	<span class="icon exit"></span><a href="/admin-logout">退出</a>
</div>
<?php }} ?>
