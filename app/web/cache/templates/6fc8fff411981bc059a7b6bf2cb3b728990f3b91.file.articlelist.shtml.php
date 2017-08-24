<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:31
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/articlelist.shtml" */ ?>
<?php /*%%SmartyHeaderCode:15938335045966fbdb93f9f4-73804313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc8fff411981bc059a7b6bf2cb3b728990f3b91' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/articlelist.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15938335045966fbdb93f9f4-73804313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clist' => 0,
    'cid' => 0,
    'list' => 0,
    'pageview' => 0,
    'cpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbdbae9868_21749620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbdbae9868_21749620')) {function content_5966fbdbae9868_21749620($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">文章管理</div>
	<div class="add icon" id="add" onclick="menu.tourl('/admin-article?type=add');"></div>
</div> 
<!-- 搜索框 -->
<div class="search">
	<div class="text">
		<select id="searchcid">
			<option value="0">--频道--</option> 
			<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['name'] = 'cl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['clist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total']);
?> -->
			<option value="<?php echo $_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['clist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']]['cname'];?>
</option> 
			<!-- <?php endfor; endif; ?> -->
		</select>
	</div>
	<div id="btnSearch" class="icon"></div>
</div>
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table1">
		<tr>
			<th></th>
			<th>文章ID</th>
			<th>文章标题</th>
			<th>显示</th>
			<th>超链</th> 
			<th>所属频道</th> 
			<th>添加时间</th> 
			<th>操作</th>
		</tr>
		<!-- <?php if ($_smarty_tpl->tpl_vars['list']->value) {?> -->
		<!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
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
		<!-- <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['l']['index']%2==0) {?> -->
		<tr class="odd"><!-- <?php } else { ?> --><tr class="even"><!-- <?php }?> -->
			<td><input type="checkbox" name="chcekId" id="chcekId" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
"></td>
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['up']==1) {?><img src="<?php echo $_smarty_tpl->getConfigVariable('cdn_url');?>
/app/web/templates/public/image/pin_3.gif" /><?php }
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
</td>
			<td><a href="<?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==0) {
echo $_smarty_tpl->getConfigVariable('web_url');?>
/article?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];
} else {
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['jumpurl'];
}?>" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</a></td>
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_show']==0) {?><span style="color:red">否</span><?php } else { ?>是<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==0) {?>否<?php } else { ?>是<div class="show"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['jumpurl'];?>
</div><?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['channel'];?>
</td> 
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['create_time'];?>
</td>
			<td><div class="pic"><a onclick="menu.tourl('/admin-article?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
&type=edit')"></a></div></td>
		</tr>
		<!-- <?php endfor; endif; ?> -->
		<!-- <?php } else { ?> -->
		<tr class="odd"><td colspan=8>暂无数据</td></tr>
		<!-- <?php }?> -->
	</table> 
	<div class="operating">
		<!-- 分页 -->
		<div class="pagination">
			<div class="pagiL">
				<span class="select">选择：<span id="getAll">全选</span>-<span id="getOthers">反选</span></span>
				<input type="button" value="删除" id="delete" />
			</div>
			<div class="pagiR"><?php echo $_smarty_tpl->tpl_vars['pageview']->value;?>
   
				转到<input type="text" name="page" id="page" value="<?php echo $_smarty_tpl->tpl_vars['cpage']->value;?>
" />页
				<input type="button" value="GO" id="go" />
			</div>
		</div>
	</div>
</div>
<!-- 对话框 -->
<div id="alertbg"></div>
<div id="alert">
	<div class="icon" id="close"></div>
	<div class="select">[<a href="#" id="confirm">确认</a><a href="#" id="cancle">取消</a>]</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		//全选  
		$("#getAll").click(function() {
			$(".table1 :checkbox").attr("checked", true);
		});
		//反选  
		$("#getOthers").click(function() {
			$(".table1 :checkbox").each(function() {
				$(this).attr("checked", !$(this).attr("checked"));
			});
		});
		//弹层取消（公用）
		$('#cancle,#close').click(function() {
			$('#alertbg').hide();
			$('#alert').hide();
		});
		//删除操作
		$('#delete').click(function() {
			var valArr = new Array;
			$(".table1 :checkbox[checked]").each(function(i) {
				valArr[i] = $(this).val();
			});
			var vals = valArr.join(',');
			if (vals != '') {
				$('#alertbg').show();
				$('#alert').show();
			} else {
				alert('请勾选删除项！');
			}
		});
		//确认删除
		$('#confirm').click(function() {
			$('#alertbg').hide();
			$('#alert').hide();

			var valArr = new Array;
			$(".table1 :checkbox[checked]").each(function(i) {
				valArr[i] = $(this).val();
			});
			var vals = valArr.join(',');
			if (vals != '') {
				var data = 'ids=' + vals + "&_r=" + Math.random();
				$.ajax({
					type: "POST",
					url: '/admin-articledelete',
					data: data,
					dataType: "json",
					success: function(data) {
						if (data.success) {
							var cp = $('#page').val();
							menu.tourl('/admin-articlelist?page=' + cp);
						} else {
							alert(data.errorMsg);
						}
					}
				})
			}
		});
		// 翻页跳转
		$('#go').click(function() {
			var gv = $('#page').val();
			var reg1 = /^\d+$/;
			if (reg1.test(gv)) {
				menu.tourl('/admin-articlelist?page=' + gv);
			} else {
				alert('请输入正确定的页数');
			}
		});
		// td弹层
		var oTd = document.getElementsByTagName('td');
		for (var i = 0; i < oTd.length; i++) {
			oTd[i].onmouseover = function() {
				if (this.childNodes.length > 1) {
					$(this).find(".show").css('display', 'block');
				}
			}
			oTd[i].onmouseout = function() {
				if (this.childNodes.length > 1) {
					$(this).find(".show").css('display', 'none');
				}
			}
		}
		;
		// 搜索
		$('#btnSearch').click(function() {
			//var gv = $('#page').val();
			var cid = $('#searchcid option:selected').val();
			//var cid = $('input[name=searchcid]').val();
			console.log(cid);
			menu.tourl('/admin-articlelist?page=1&cid=' + cid);
		});
	});
<?php echo '</script'; ?>
><?php }} ?>
