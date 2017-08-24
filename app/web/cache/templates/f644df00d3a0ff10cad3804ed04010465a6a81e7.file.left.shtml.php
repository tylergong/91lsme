<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-16 10:19:24
         compiled from "app\web\templates\public\html\left.shtml" */ ?>
<?php /*%%SmartyHeaderCode:751554b8752c6f3bf0-42339060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f644df00d3a0ff10cad3804ed04010465a6a81e7' => 
    array (
      0 => 'app\\web\\templates\\public\\html\\left.shtml',
      1 => 1420534955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '751554b8752c6f3bf0-42339060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b8752c843b48_65341126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b8752c843b48_65341126')) {function content_54b8752c843b48_65341126($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<div class="leftad">
		<?php echo '<script'; ?>
 src="http://finead.cn/page/s.php?s=10663&w=120&h=270"><?php echo '</script'; ?>
>
	</div>
</div>
<?php }} ?>
