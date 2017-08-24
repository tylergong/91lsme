<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 16:57:50
         compiled from "app/web/templates/public/html/ad.shtml" */ ?>
<?php /*%%SmartyHeaderCode:91665781654d3308e871b81-18111278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75dabee9213f2bff075a786cc6108e53585cbead' => 
    array (
      0 => 'app/web/templates/public/html/ad.shtml',
      1 => 1419205294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91665781654d3308e871b81-18111278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d3308e8a8b64_13913295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3308e8a8b64_13913295')) {function content_54d3308e8a8b64_13913295($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="focus">
	<ul>
		<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ad'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['name'] = 'ad';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list_ad']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ad']['total']);
?> -->
		<li>
			<!-- <?php if ($_smarty_tpl->tpl_vars['list_ad']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ad']['index']]['is_link']==1) {?> -->
			<a href="<?php echo $_smarty_tpl->tpl_vars['list_ad']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ad']['index']]['jumpurl'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list_ad']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ad']['index']]['title'];?>
"><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/<?php echo $_smarty_tpl->tpl_vars['list_ad']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ad']['index']]['imgurl'];?>
"/></a>
			<!-- <?php } else { ?> -->
			<img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/<?php echo $_smarty_tpl->tpl_vars['list_ad']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ad']['index']]['imgurl'];?>
" width="760" height="80"/>
			<!-- <?php }?> -->
		</li>
		<!-- <?php endfor; endif; ?> -->
	</ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/js/ad.js"><?php echo '</script'; ?>
> 
<?php }} ?>
