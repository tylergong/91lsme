<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-14 00:13:16
         compiled from "app/web/templates/newlayout/html/detail.shtml" */ ?>
<?php /*%%SmartyHeaderCode:2113572885596796d5419379-64446425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c668ddac374a6cafac0bee0fe9fdb46bf3205f' => 
    array (
      0 => 'app/web/templates/newlayout/html/detail.shtml',
      1 => 1499962394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2113572885596796d5419379-64446425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_596796d5455774_44571649',
  'variables' => 
  array (
    'cname' => 0,
    'data' => 0,
    'previous' => 0,
    'next' => 0,
    'hot_lists' => 0,
    'hot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596796d5455774_44571649')) {function content_596796d5455774_44571649($_smarty_tpl) {?><div class="met-banner-ny vertical-align text-center" style="background-color:;">
    <h1 class="vertical-align-middle"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</h1>
</div>


<section class="met-shownews animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-9 met-shownews-body">
                <div class="row">
                    <div class="met-shownews-header">
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
                        <div class="info">
							<span>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['create_time'];?>

							</span>
							<span>
								<i class="icon wb-eye margin-right-5" aria-hidden="true"></i>370
							</span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
                        <div>
                            <div id="article_body">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                            </div>
                            <p><br/></p>
                            <div id="metinfo_additional"></div>
                        </div>
                        <div class="center-block met_tools_code"></div>
                    </div>

                    <div class="met-shownews-footer">
                        <ul class="pager pager-round">
                            <!-- <?php if ($_smarty_tpl->tpl_vars['previous']->value) {?> -->
                            <li class="previous">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['to_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['previous']->value['title'];?>
">
                                    Previous <span aria-hidden="true"
                                                   class='hidden-xs'>：<?php echo $_smarty_tpl->tpl_vars['previous']->value['title'];?>
</span>
                                </a>
                            </li>
                            <!-- <?php } else { ?> -->
                            <li class="previous disabled">
                                <a href="javascript:;" title="没有了">
                                    Previous <span aria-hidden="true"
                                                   class='hidden-xs'>：没有了</span>
                                </a>
                            </li>
                            <!-- <?php }?> -->
                            <!-- <?php if ($_smarty_tpl->tpl_vars['next']->value) {?> -->
                            <li class="next">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['next']->value['to_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
">
                                    Next <span aria-hidden="true" class='hidden-xs'>：<?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
</span>
                                </a>
                            </li>
                            <!-- <?php } else { ?> -->
                            <li class="next disabled">
                                <a href="javascript:;" title="没有了">
                                    Next <span aria-hidden="true" class='hidden-xs'>：没有了</span>
                                </a>
                            </li>
                            <!-- <?php }?> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="met-news-bar">

                        <form method='get' action="/search">
                            <div class="form-group">
                                <div class="input-search">
                                    <button type="submit" class="input-search-btn">
                                        <i class="icon wb-search" aria-hidden="true"></i>
                                    </button>
                                    <input type="text" class="form-control" name="words" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <div class="recommend news-list-md">
                            <h3>热门推荐</h3>
                            <ul class="list-group list-group-bordered">
                                <!-- <?php  $_smarty_tpl->tpl_vars['hot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hot']->key => $_smarty_tpl->tpl_vars['hot']->value) {
$_smarty_tpl->tpl_vars['hot']->_loop = true;
?> -->
                                <li class="list-group-item">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['hot']->value['to_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hot']->value['title'];?>
" target='_blank'><?php echo $_smarty_tpl->tpl_vars['hot']->value['title'];?>
</a>
                                </li>
                                <!-- <?php } ?> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="met-news-bar">
                        <img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/newlayout/image/qrcode.jpg" width="150"/><br/>
                        扫码关注【<b>听我说</b>】微信公众账号或直接添加【<b>listenme1986</b>】<br/>
                        --------------------------<br/>
                        想查<b>天气</b>？回复【天气@城市名】既可。天气状况就能跃然眼前哦~~！<br/><br/>
                        想查<b>附近</b>？回复【附近@目标关键词】既可。帮你搜索附近5公里的目标哦~~！<br/><br/>
                        想查<b>快递</b>？回复【快递@快递单号】即可。方便又快捷~~！<br/><br/>
                        想查<b>地铁</b>？直接回复【地铁】~~总能查到方便又可靠的行程路线~~！<br/><br/>
                        【隐藏功能】上传你一张您的头像或者是您和他人的合照头像试试吧~~~~~<br/>
                        --------------------------<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }} ?>
