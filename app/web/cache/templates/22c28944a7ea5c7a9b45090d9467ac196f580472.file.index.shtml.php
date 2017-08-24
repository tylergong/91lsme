<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 17:45:07
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/subway/html/index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:89108862954d33ba3b16159-43292861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c28944a7ea5c7a9b45090d9467ac196f580472' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/subway/html/index.shtml',
      1 => 1419532590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89108862954d33ba3b16159-43292861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'platform' => 0,
    'res_city' => 0,
    'info' => 0,
    'cid' => 0,
    'res_line' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d33ba3ba6221_66122911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d33ba3ba6221_66122911')) {function content_54d33ba3ba6221_66122911($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>全国地铁换乘线路查询</title>
		<style type="text/css">
			html,body{ width:100%;height:100% }
			img{ width:100% }
			a{ text-decoration:none; color:#000; }
			#btnjs{ color:#FFF;background-color:#06c3fd;height:40px;line-height:40px;width:90%;border:0;border-radius:4px;font-size:22px }
			.row{ line-height:30px;padding:0;margin:5px 0 }
			.red{ color:#F00 }
			.footer{ width:100%;padding:20px 0;font-size:14px;color:#555;text-align:center }
		</style>
		<?php echo '<script'; ?>
 type="text/javascript">
			var url = "http://www.91lsme.com/subway/";
			var title = "地铁涨价了！快找一条更省钱的线路吧，骚年们！！";
			var content = "那条线路更适合你呢，查查就知道了。赶快动动你们的手指吧，还有意想不到的奇葩线路哦~！";
			var shareimg = "http://imggw.duomi.com/weixin/title2.jpg";
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/app/web/templates/subway/js/tt.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/jquery/jquery-1.6.4.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="headerimg"><?php if ($_smarty_tpl->tpl_vars['platform']->value=='pc') {
} else { ?><img src="/app/web/templates/subway/image/title1.png"><?php }?></div>
		<div class="row">
			<label>切换城市：</label>
			<!-- <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?> -->
			<span>[ <a href='?cid=<?php echo $_smarty_tpl->tpl_vars['info']->value['cid'];?>
' <?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['info']->value['cid']) {?>class='red'<?php }?>><?php echo $_smarty_tpl->tpl_vars['info']->value['city'];?>
</a> ]</span>
			<!-- <?php } ?> -->
		</div>
		<div class="row">
			<label>起点：</label>
			<select id="start_line" onchange="change_start_line(this)">
				<option value=0>--请选择起始线路--</option>
				<!-- <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res_line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?> -->
				<option value=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</option>
				<!-- <?php } ?> -->
			</select>
			<select id="start_site">
				<option value=0>--请选择起始站点--</option>
			</select>
		</div>
		<div class="row">
			<label>终点：</label>
			<select id="end_line" onchange="change_end_line(this)">
				<option value=0>--请选择终点线路--</option>
				<!-- <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res_line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?> -->
				<option value=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</option>
				<!-- <?php } ?> -->
			</select>
			<select id="end_site">
				<option value=0>--请选择终点站点--</option>
			</select>
		</div>
		<input id="btnjs" type="button" value="提交查询" onclick="query_line()" />
		<div class="row">
			<div id="resText"></div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.shtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo '<script'; ?>
 type="text/javascript" src="/app/web/templates/subway/js/subway.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }} ?>
