<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:03:54
         compiled from "app/web/templates/admin/html/header.shtml" */ ?>
<?php /*%%SmartyHeaderCode:195627736454d331fa426756-11330674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '818f1b549ff492c6a49f06e57deb03aaa7e46d7c' => 
    array (
      0 => 'app/web/templates/admin/html/header.shtml',
      1 => 1418324418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195627736454d331fa426756-11330674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d331fa43e322_46529615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d331fa43e322_46529615')) {function content_54d331fa43e322_46529615($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/data/home/qxu1141990272/htdocs/framework/lib/smarty/plugins/modifier.date_format.php';
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
