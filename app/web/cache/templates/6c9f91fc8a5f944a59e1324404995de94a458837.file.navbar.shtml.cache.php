<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 22:17:55
         compiled from "app/web/templates/newlayout/html/navbar.shtml" */ ?>
<?php /*%%SmartyHeaderCode:38329149359678113ec8953-18203250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9f91fc8a5f944a59e1324404995de94a458837' => 
    array (
      0 => 'app/web/templates/newlayout/html/navbar.shtml',
      1 => 1499955354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38329149359678113ec8953-18203250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59678113ed6f31_06488744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59678113ed6f31_06488744')) {function content_59678113ed6f31_06488744($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
                    data-target="#example-navbar-default-collapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <a href="/" class="navbar-brand navbar-logo vertical-align" title="<?php echo $_smarty_tpl->getConfigVariable('web_title');?>
">
                <div class="vertical-align-middle">
                    <img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/image/logo.png" alt="<?php echo $_smarty_tpl->getConfigVariable('web_title');?>
"
                    title="<?php echo $_smarty_tpl->getConfigVariable('web_title');?>
"/>
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">
            <ul class="nav navbar-nav navbar-right navlist">
                <li><a href="/" title="网站首页" class="link active padding-horizontal-15">网站首页</a></li>
                <li><a href="/articlelist/1" title="感知" class="link padding-left-25 padding-right-15">感知</a></li>
                <li><a href="/articlelist/2" title="觉醒" class="link padding-left-25 padding-right-15">觉醒</a></li>
                <li><a href="/articlelist/3" title="践行" class="link padding-left-25 padding-right-15">践行</a></li>
                <li><a href="/articlelist/4" title="生活随笔" class="link padding-left-25 padding-right-15">生活随笔</a></li>
                <li class="dropdown">
                    <a href="/articlelist/5" title="联系我们" class="dropdown-toggle link padding-left-25 padding-right-15"
                       data-toggle="dropdown" data-hover="dropdown" aria-expanded="false" role="button">
                        联系我们 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right animate" role="menu">
                        <li class="visible-xs-block">
                            <a href="/articlelist/5" title="全部">全部</a>
                        </li>
                        <li><a href="/articlelist/5" class="" title="学校资讯">联系我们</a></li>
                        <li><a href="/articlelist/5" class="" title="教育新闻">联系我们</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
><?php }} ?>
