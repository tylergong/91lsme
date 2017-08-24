<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-14 00:59:09
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/articlelist/html/articlelist.shtml" */ ?>
<?php /*%%SmartyHeaderCode:13257354405967a6dd485c75-87119415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6301be36aaca64b29292e3cbd4b56f8d51619429' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/articlelist/html/articlelist.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13257354405967a6dd485c75-87119415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'list' => 0,
    'is_static' => 0,
    'pageview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5967a6dd75b654_59720263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5967a6dd75b654_59720263')) {function content_5967a6dd75b654_59720263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gm/Documents/www/91lsme/framework/lib/smarty/plugins/modifier.date_format.php';
?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
<!doctype html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->getConfigVariable('web_title');?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('web_keywords');?>
">
		<meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('web_description');?>
">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/favicon.ico">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/css/css.css" type="text/css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/articlelist/css/articlelist.css" type="text/css">
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/plugin/jquery/jquery-1.6.4.min.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="main"> 
			<!-- 顶部 -->
			<div class="top"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/header.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
			<!-- 导航 -->
			<div class="nav"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/nav.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
			<div class="content"> 
				<!-- 左边框 -->
				<div class="left"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/left.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
				<div class="centerAndRight"> 
					<!-- 空白框 -->
					<div class="ad">  </div>
					<div class="center">
						<div class="title">
							<div class="titleImg">
								<img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>news.png<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2) {?>study.png<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==3) {?>speaks.png<?php } else { ?>life.png<?php }?>"/>
							</div>
						</div> 
						<div class="line_1"></div> 
						<div class="listMain">
							<ul>
								<! -- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> -->
								<li class="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['up']==1) {?>listup<?php }?>">
									<span>◎</span>
									<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }?>
									<! -- <?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?> -->
									<a href="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
.shtml<?php }?>" target="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 </a>
									<! -- <?php } else { ?> -->
									<a href="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];
}?>" target="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 </a>
									<! -- <?php }?> -->
									<span class="ctime"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['create_time'],'%Y-%m-%d');?>
 </span>
								</li>
								<! -- <?php endfor; endif; ?> -->
							</ul>
						</div> 
					</div>
					<div class="listpage"><?php echo $_smarty_tpl->tpl_vars['pageview']->value;?>
</div> 
					<div class="cbottom"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/bottom_ad.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
				</div>
			</div>
			<!-- 低部 -->
			<div class="bottom"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/footer.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
		</div>
	</body>
</html><?php }} ?>
