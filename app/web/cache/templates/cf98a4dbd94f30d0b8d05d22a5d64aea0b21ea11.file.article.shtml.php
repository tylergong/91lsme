<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 22:06:46
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/article/html/article.shtml" */ ?>
<?php /*%%SmartyHeaderCode:137301434559677e76cf9554-83305982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf98a4dbd94f30d0b8d05d22a5d64aea0b21ea11' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/article/html/article.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137301434559677e76cf9554-83305982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'updown' => 0,
    'is_static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59677e76eea512_17023449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59677e76eea512_17023449')) {function content_59677e76eea512_17023449($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/gm/Documents/www/91lsme/framework/lib/smarty/plugins/modifier.date_format.php';
?><!-- <?php  $_config = new Smarty_Internal_Config("smarty.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> -->
<!doctype html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
——<?php echo $_smarty_tpl->getConfigVariable('web_title');?>
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
/app/web/templates/article/css/article.css" type="text/css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/plugin/editor/plugins/code/prettify.css" type="text/css">
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
/app/web/templates/default/image/<?php if ($_smarty_tpl->tpl_vars['data']->value['cid']==1) {?>news.png<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['cid']==2) {?>study.png<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['cid']==3) {?>speaks.png<?php } else { ?>life.png<?php }?>"/>
							</div>
						</div>  
						<div class="articleTitle"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</div>
						<div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],'%Y-%m-%d');?>
</div>
						<div class="line_1"></div>
						<div class="articleMain"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div> 
						<div class="articlelink">相关链接：<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['rel_link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['data']->value['rel_link'];?>
</a></div> 
						<div class="articlefooter">亲们~！有事就点“<a href="tencent://message/?uin=286142784&Menu=yes">就Q我</a>"，多支持和提出好的建议！以后会做的更好 ……</div>
						<div class="articleother">
							<div>上一篇：<?php if ($_smarty_tpl->tpl_vars['updown']->value['up']) {?><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/article<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['updown']->value['up']['id'];?>
.shtml<?php } else { ?>?id=<?php echo $_smarty_tpl->tpl_vars['updown']->value['up']['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['updown']->value['up']['title'];?>
</a><?php } else { ?>没有了<?php }?></div>
							<div>下一篇：<?php if ($_smarty_tpl->tpl_vars['updown']->value['down']) {?><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
/article<?php if ($_smarty_tpl->tpl_vars['is_static']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['updown']->value['down']['id'];?>
.shtml<?php } else { ?>?id=<?php echo $_smarty_tpl->tpl_vars['updown']->value['down']['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['updown']->value['down']['title'];?>
</a><?php } else { ?>没有了<?php }?></div>
						</div>
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
