<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:46:25
         compiled from "app/web/templates/public/html/left.shtml" */ ?>
<?php /*%%SmartyHeaderCode:11035420255966fb211feef6-58982686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec7611ede037ac237fba9eaf68f293628896e39' => 
    array (
      0 => 'app/web/templates/public/html/left.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11035420255966fb211feef6-58982686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fb21231755_19609582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fb21231755_19609582')) {function content_5966fb21231755_19609582($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="leftImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/leftImg.png"></div>
<div class="leftWord">
	<div class="titleL"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/listen.png"></div>
	<div class="wordL">
		<div class="tM"><span>⊙</span> 前言阵地 </div>
		<div class="cM" style="text-indent:2em"> 经过很长时间奋战，就要听我说个人网终于建成，还有很多不成熟和欠缺的地方 ，希望大家多多支持和提出好的建议！以后会做的更好 ……</div>
	</div>   
	<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/highcharts/highcharts.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/highcharts/highcharts-more.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/highcharts/themes/grid.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/app/web/templates/public/js/clock.js"><?php echo '</script'; ?>
>
	<div class="lefttime" id="container_clock"></div>
	<div class="leftad"></div>
</div>
<?php }} ?>
