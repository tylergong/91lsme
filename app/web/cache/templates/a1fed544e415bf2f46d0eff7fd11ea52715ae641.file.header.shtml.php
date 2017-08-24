<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 11:06:26
         compiled from "app\web\templates\admin\html\header.shtml" */ ?>
<?php /*%%SmartyHeaderCode:3023554b33a325d9455-35938111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1fed544e415bf2f46d0eff7fd11ea52715ae641' => 
    array (
      0 => 'app\\web\\templates\\admin\\html\\header.shtml',
      1 => 1418353217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3023554b33a325d9455-35938111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b33a326bfc11_79210025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b33a326bfc11_79210025')) {function content_54b33a326bfc11_79210025($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\upupw\\htdocs\\projectmode\\framework\\lib\\smarty\\plugins\\modifier.date_format.php';
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
