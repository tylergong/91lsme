<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-15 15:52:53
         compiled from "app/web/templates/newlayout/html/search.shtml" */ ?>
<?php /*%%SmartyHeaderCode:1534416095969c8fc2e18a8-73339504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc869c84938d466a955ca21c7a9bd8c944ce0d58' => 
    array (
      0 => 'app/web/templates/newlayout/html/search.shtml',
      1 => 1500105147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534416095969c8fc2e18a8-73339504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5969c8fc34f963_99053411',
  'variables' => 
  array (
    'words' => 0,
    'lists' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5969c8fc34f963_99053411')) {function content_5969c8fc34f963_99053411($_smarty_tpl) {?><div class="met-banner-ny vertical-align text-center" v-cloak>
    <h1 class="vertical-align-middle">搜索结果</h1>
</div>
<section class="met-search animsition">
    <div class="container">
        <div class="row">
            <div class="met-search-body">
                <form method='get' class="page-search-form" role="search" action='/articlelist-articlelist-search'>
                    <div class="input-search input-search-dark">
                        <button type="submit" class="input-search-btn">
                            <i class="icon wb-search" aria-hidden="true"></i></button>
                        <input
                                type="text"
                                class="form-control input-lg"
                                name="words"
                                value="<?php echo $_smarty_tpl->tpl_vars['words']->value;?>
"
                                placeholder="请输入搜索关键词！"
                                data-fv-notempty="true"
                                data-fv-message="不能为空"
                        >
                    </div>
                </form>
                <ul class="list-group list-group-full list-group-dividered met-page-ajax">
                    <!-- <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?> -->
                    <li class="list-group-item">
                        <h4>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['to_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a>
                        </h4>
                        <a class="search-result-link" href="<?php echo $_smarty_tpl->tpl_vars['list']->value['to_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['to_url'];?>
</a>
                        <p><?php echo $_smarty_tpl->tpl_vars['list']->value['content_limit'];?>
</p>
                    </li>
                    <!-- <?php } ?> -->
                </ul>
            </div>
        </div>
    </div>
</section><?php }} ?>
