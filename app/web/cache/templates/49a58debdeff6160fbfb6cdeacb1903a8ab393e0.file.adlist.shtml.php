<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-13 12:49:33
         compiled from "/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/adlist.shtml" */ ?>
<?php /*%%SmartyHeaderCode:2962226095966fbdd051092-24555670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a58debdeff6160fbfb6cdeacb1903a8ab393e0' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/admin/html/adlist.shtml',
      1 => 1499920500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2962226095966fbdd051092-24555670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'pageview' => 0,
    'cpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5966fbdd1c4134_64977770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5966fbdd1c4134_64977770')) {function content_5966fbdd1c4134_64977770($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 标题 -->
<div class="title">
	<div class="icon manager"></div><div class="word">广告管理</div>
	<div class="add icon" id="add" onclick="menu.tourl('/admin-ad?type=add');"></div>
</div> 
<!-- 详细内容 -->
<div class="detail">
	<table border="1" class="table1">
		<tr> 
			<th></th>
			<th>ID</th>
			<th>广告图(670*80)</th>
			<th>是否链接</th> 
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
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
</td> 
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['imgurl'];?>
" height="40" /><div class="show"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</div></td> 
			<td><?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['is_link']==0) {?><span style="color:red">否</span><?php } else { ?>是<div class="show"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['jumpurl'];?>
</div><?php }?></td>  
			<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['create_time'];?>
</td>
			<td><div class="pic"><a onclick="menu.tourl('/admin-ad?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
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
					url: '/admin-addelete',
					data: data,
					dataType: "json",
					success: function(data) {
						if (data.success) {
							var cp = $('#page').val();
							menu.tourl('/admin-adlist?page=' + cp);
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
				menu.tourl('/admin-adlist?page=' + gv);
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
	});
<?php echo '</script'; ?>
><?php }} ?>
