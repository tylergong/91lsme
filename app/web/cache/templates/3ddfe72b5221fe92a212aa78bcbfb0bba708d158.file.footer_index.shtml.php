<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 16:57:50
         compiled from "app/web/templates/public/html/footer_index.shtml" */ ?>
<?php /*%%SmartyHeaderCode:59935723954d3308e8bed47-56623421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddfe72b5221fe92a212aa78bcbfb0bba708d158' => 
    array (
      0 => 'app/web/templates/public/html/footer_index.shtml',
      1 => 1418865882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59935723954d3308e8bed47-56623421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_flink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d3308e8ea677_63489835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3308e8ea677_63489835')) {function content_54d3308e8ea677_63489835($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<ul>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
">版权信息</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
">建站说明</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
">设为首页</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('web_url');?>
">加入收藏</a></li>
</ul> 
<br/>
<div class="flink">友情链接：
	<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_flink']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?> -->
	<!-- <?php if ($_smarty_tpl->tpl_vars['list_flink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['is_show']==1) {?> -->
	<span><a href="<?php echo $_smarty_tpl->tpl_vars['list_flink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['flink'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list_flink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['fname'];?>
</a></span>
	<!-- <?php }?> -->
	<!-- <?php endfor; endif; ?> --> 
</div>
<br/>
<div class="bw">Copyright © 2014-2015 tylergong <a href="http://www.91lsme.com" target="_blank">www.91lsme.com</a> All rights reserved. <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备 14059724号</a></div> 
<div style="display: none;">
	<?php echo '<script'; ?>
 type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4e12425c4f2ca16acaab6b2a8cdc8fbc' type='text/javascript'%3E%3C/script%3E"));
	<?php echo '</script'; ?>
>
</div>
<?php }} ?>
