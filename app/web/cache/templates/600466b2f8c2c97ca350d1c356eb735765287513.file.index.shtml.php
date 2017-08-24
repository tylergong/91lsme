<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-16 10:19:23
         compiled from "D:\upupw\htdocs\projectmode\app\web\templates\default\html\index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:2146254b8752bcb05c2-83116199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600466b2f8c2c97ca350d1c356eb735765287513' => 
    array (
      0 => 'D:\\upupw\\htdocs\\projectmode\\app\\web\\templates\\default\\html\\index.shtml',
      1 => 1419933178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2146254b8752bcb05c2-83116199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_static' => 0,
    'list_gz' => 0,
    'list_jw' => 0,
    'list_jx' => 0,
    'list_sb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b8752c23ca64_37096230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b8752c23ca64_37096230')) {function content_54b8752c23ca64_37096230($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\upupw\\htdocs\\projectmode\\framework\\lib\\smarty\\plugins\\modifier.date_format.php';
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
		<meta name="baidu-site-verification" content="sBgDPEYv7n" />
		<link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/favicon.ico">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/css/css.css" type="text/css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/css/index.css" type="text/css">
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
					<!-- 广告框 -->
					<div class="ad"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/ad.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
					<div class="center">
						<div class="list">
							<div class="news">
								<div class="title">
									<div class="titleImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/news.png"/></div>
									<div class="more"><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/articlelist<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/1_1.shtml<?php } else { ?>?type=1<?php }?>"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/more.png" /></a></div>
								</div>
								<div class="line_1"></div>
								<div class="listMain">
									<ul><!-- 感知 -->
										<li class="listup">
											<span><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/c.png" /></span>
											<a  class="hx"></a>
										</li>
										<! -- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['gz'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['name'] = 'gz';
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_gz']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['gz']['total']);
?> -->
										<li class="<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['up']==1) {?>listup<?php }?>">
											<span>◎</span>
											<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }?>
											<! -- <?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article/<?php echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['id'];?>
.shtml<?php }?>" target="<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['title'];?>
 </a>
											<! -- <?php } else { ?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?id=<?php echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['id'];
}?>" target="<?php if ($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['title'];?>
 </a>
											<! -- <?php }?> -->
											<span class="ctime"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list_gz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gz']['index']]['create_time'],'%m-%d');?>
 </span>
										</li>
										<! -- <?php endfor; endif; ?> -->
									</ul>
								</div>
							</div>
							<div class="study">
								<div class="title">
									<div class="titleImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/study.png"/></div>
									<div class="more"><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/articlelist<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/2_1.shtml<?php } else { ?>?type=2<?php }?>"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/more.png" /></a></div>
								</div>
								<div class="line_1"></div>
								<div class="listMain">
									<ul><!-- 觉悟 -->
										<! -- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jw'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['name'] = 'jw';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_jw']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jw']['total']);
?> -->
										<li class="<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['up']==1) {?>listup<?php }?>">
											<span>◎</span>
											<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }?>
											<! -- <?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article/<?php echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['id'];?>
.shtml<?php }?>" target="<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['title'];?>
 </a>
											<! -- <?php } else { ?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?id=<?php echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['id'];
}?>" target="<?php if ($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['title'];?>
 </a>
											<! -- <?php }?> -->
											<span class="ctime"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list_jw']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jw']['index']]['create_time'],'%m-%d');?>
 </span>
										</li>
										<! -- <?php endfor; endif; ?> -->
									</ul>
								</div>
							</div>
							<div class="speaks">
								<div class="title">
									<div class="titleImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/speaks.png"/></div>
									<div class="more"><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/articlelist<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/3_1.shtml<?php } else { ?>?type=3<?php }?>"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/more.png" /></a></div>
								</div>
								<div class="line_1"></div>
								<div class="listMain">
									<ul><!-- 践行 -->
										<! -- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['name'] = 'jx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_jx']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jx']['total']);
?> -->
										<li class="<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['up']==1) {?>listup<?php }?>">
											<span>◎</span>
											<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }?>
											<! -- <?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article/<?php echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['id'];?>
.shtml<?php }?>" target="<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['title'];?>
 </a>
											<! -- <?php } else { ?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?type=<?php echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['id'];
}?>" target="<?php if ($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['title'];?>
 </a>
											<! -- <?php }?> -->
											<span class="ctime"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list_jx']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jx']['index']]['create_time'],'%m-%d');?>
 </span>
										</li>
										<! -- <?php endfor; endif; ?> -->
									</ul>
								</div>
							</div>
							<div class="suibi">
								<div class="title">
									<div class="titleImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/life.png"/></div>
									<div class="more"><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/articlelist<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/4_1.shtml<?php } else { ?>?type=4<?php }?>"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/default/image/more.png" /></a></div>
								</div>
								<div class="line_1"></div>
								<div class="listMain">
									<ul><!-- 随笔 -->
										<! -- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['name'] = 'sb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_sb']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sb']['total']);
?> -->
										<li class="<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['up']==1) {?>listup<?php }?>">
											<span>◎</span> 
											<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }?>
											<! -- <?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article/<?php echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['id'];?>
.shtml<?php }?>" target="<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['title'];?>
 </a>
											<! -- <?php } else { ?> -->
											<a href="<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['is_link']==1) {
echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['jumpurl'];
} else {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?id=<?php echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['id'];
}?>" target="<?php if ($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['is_link']==1) {?>_blank<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['title'];?>
 </a>
											<! -- <?php }?> -->
											<span class="ctime"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list_sb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sb']['index']]['create_time'],'%m-%d');?>
 </span>
										</li>
										<! -- <?php endfor; endif; ?> -->
									</ul>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="line"></div>
							<div class="rightWord">
								<div class="rW">
									<div class="connect"> Email：286142784@qq.com<br/>
										QQ&nbsp;&nbsp;&nbsp;：286142784 </div>
								</div>
								<div class="line_2"></div>
							</div>
							<div class="rightw">
								扫码关注【<b>听我说</b>】微信公众账号或直接添加【<b>listenme1986</b>】<br/>
								--------------------------<br/>
								想查<b>天气</b>？回复【天气@城市名】既可。天气状况就能跃然眼前哦~~！<br/><br/>
								想查<b>附近</b>？回复【附近@目标关键词】既可。帮你搜索附近5公里的目标哦~~！<br/><br/>
								想查<b>快递</b>？回复【快递@快递单号】即可。方便又快捷~~！<br/><br/>
								想查<b>地铁</b>？直接回复【地铁】~~总能查到方便又可靠的行程路线~~！<br/><br/>
								想听<b>笑话</b>？哈哈！那您就直接输入【笑话】吧~~萌萌哒~~！<br/><br/>
								【隐藏功能】上传你一张您的头像或者是您和他人的合照头像试试吧~~~~~<br/>
								--------------------------<br/>
							</div>
							<div class="rightImg"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/qrcode.jpg" width="200"/> </div>
						</div>
						<div class="cbottom"> 
							<iframe name="kuaidi100" src="http://www.kuaidi100.com/frame/app/index2.html" width="90%" height="300" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
						</div>
						<div class="cbottom"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/bottom_ad.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
					</div>
				</div>
			</div>
			<!-- 低部 -->
			<div class="bottom"> <?php echo $_smarty_tpl->getSubTemplate ("app/web/templates/public/html/footer_index.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				$.ajax({
					type: "GET",
					url: "/default-xh", 
					dataType: "json",
					success: function(data) {
						$('.hx').html(data);
					},
				});
			});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
