<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-24 15:42:42
         compiled from "/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/JqueryEasyUI/articlelist.shtml" */ ?>
<?php /*%%SmartyHeaderCode:18312696805539f3f25e9f00-38588112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6b8ef420ebd037841b9b7836c353e4ab74097bd' => 
    array (
      0 => '/data/home/qxu1141990272/htdocs/app/web/templates/admin/html/JqueryEasyUI/articlelist.shtml',
      1 => 1418327916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18312696805539f3f25e9f00-38588112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5539f3f2681ce2_06369732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539f3f2681ce2_06369732')) {function content_5539f3f2681ce2_06369732($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/plugin/jquery-easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="/app/web/templates/admin/css/easyui.css">
<link rel="stylesheet" type="text/css" href="/plugin/jquery-easyui/themes/icon.css"> 
<?php echo '<script'; ?>
 type="text/javascript" src="/plugin/jquery-easyui/jquery.easyui.min.js"><?php echo '</script'; ?>
>  
<!-- 详细内容 -->
<div class="detail"> 
	<div style="margin:5px 0 0 2px;"></div>
	<table id="dg" class="easyui-datagrid" title="文章管理" style="width:710px;height:400px" data-options="singleSelect:false,rownumbers:true,singleSelect:true,pagination:true,url:'/admin-JqueryEasyUI-getarticlelist',method:'get',toolbar:'#tb',onClickRow:onClickRow">
		<thead>
			<tr>
				<th data-options="field:'ck',checkbox:true"></th>
				<th data-options="field:'id',width:40,align:'center'" sortable="true">ID</th>
				<th data-options="field:'title',width:300">文章标题</th>
				<th data-options="field:'is_show',width:60,align:'center'" sortable="true">是否显示</th>
				<th data-options="field:'is_link',width:60,align:'center',editor:{ type:'checkbox',options:{ on:'是',off:'' } }" sortable="true">是否超链</th> 
				<th data-options="field:'cid',width:60,align:'left',formatter:function(value,row){ return row.channel; },editor:{ type:'combobox', options:{ valueField:'cid', textField:'channel', method:'get', url:'/admin-JqueryEasyUI-getarticlechannel', required:true } }" sortable="true" >频道</th>
				<th data-options="field:'create_time',width:130,align:'center'">添加时间</th>
			</tr>
		</thead>
	</table>
	<div style="margin:5px 0 0 2px;"></div> 
	<div id="tb" style="padding:2px 5px;">
		Date From: <input class="easyui-datebox" style="width:110px" name="searchst">
		To: <input class="easyui-datebox" style="width:110px" name="searchet">
		频道: 
		<select class="easyui-combobox" panelHeight="auto" style="width:100px" name="searchcid">
			<option value="0">--选择--</option>
			<option value="1">感知</option>
			<option value="2">觉醒</option>
			<option value="3">践行</option>
			<option value="4">生活随笔</option>
			<option value="5">关于</option>
		</select>
		<a href="javascript:void(0)" class="easyui-linkbutton" id="doSearch" iconCls="icon-search">Search</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" id="doDelete" iconCls="icon-remove">Delete</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" id="doEdit" iconcls="icon-edit" plain="true">修改</a>
	</div>
	<div id="dlg" class="easyui-dialog" style="width: 500px; height: 280px; padding: 10px 20px;" closed="true" buttons="#dlg-buttons"> 
		<div class="ftitle"> 
			信息编辑 
		</div> 
		<form id="fm" method="post"> 
			<div class="fitem"> 
				<label> 
					标题
				</label> 
				<input name="title" class="easyui-validatebox" required="true" style="width: 320px;" /> 
			</div>
			<div class="fitem"> 
				<label> 
					显示
				</label> 
				<input name="is_show" class="easyui-validatebox" required="true"  /> 
			</div>
			<div class="fitem"> 
				<label> 
					超链
				</label> 
				<input name="is_link" class="easyui-validatebox" required="true"  /> 
			</div>
			<div class="fitem"> 
				<label> 
					频道
				</label> 
				<input name="cid" class="easyui-validatebox" required="true"  /> 
			</div>
			<input type="hidden" name="id" id="id" /> 
		</form>
	</div>
	<div id="dlg-buttons"> 
		<a href="javascript:void(0)" class="easyui-linkbutton" id="doSave" iconcls="icon-save">保存</a> 
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#dlg').dialog('close')" iconcls="icon-cancel">取消</a> 
	</div> 
	<?php echo '<script'; ?>
 type="text/javascript">
	$('#doSearch').click(function() {
		var _cid = $('input[name=searchcid]').val();
		$('#dg').datagrid('load', {
			cid: _cid,
		});
	});
	$('#doEdit').click(function() {
		var row = $('#dg').datagrid('getSelected');
		if (row) {
			$("#dlg").dialog("open").dialog('setTitle', '文章编辑');
			$("#fm").form("load", row);
			url = '/admin-JqueryEasyUI-savearticle';
		}
	});
	$('#doSave').click(function() {
		$("#fm").form("submit", {
			url: url,
			onsubmit: function() {
				return $(this).form("validate");
			},
			success: function(result) {
				if (result) {
					$.messager.alert("提示信息", "操作成功");
					$("#dlg").dialog("close");
					$("#dg").datagrid("load");
				}
				else {
					$.messager.alert("提示信息", "操作失败");
				}
			}
		});
	});
	$('#doDelete').click(function() {
		var row = $('#dg').datagrid('getSelected');
		if (row) {
			$.messager.confirm('Confirm', '你确认要删除您选中的这条记录么?', function(r) {
				if (r) {
					$.post('/admin-JqueryEasyUI-delarticle', { ids: row.id }, function(result) {
						if (result.success) {
							$('#dg').datagrid('reload');
						} else {
							$.messager.show({
								title: 'Error',
								msg: result.errorMsg
							});
						}
					}, 'json');
				}
			});
		}
	});

	var editIndex = undefined;
	function endEditing() {
		if (editIndex == undefined) {
			return true
		}
		if ($('#dg').datagrid('validateRow', editIndex)) {
			var ed = $('#dg').datagrid('getEditor', { index: editIndex, field: 'cid' });
			var channel = $(ed.target).combobox('getText');
			$('#dg').datagrid('getRows')[editIndex]['channel'] = channel;
			$('#dg').datagrid('endEdit', editIndex);
			editIndex = undefined;
			return true;
		} else {
			return false;
		}
	}
	function onClickRow(index) {
		if (editIndex != index) {
			if (endEditing()) {
				$('#dg').datagrid('selectRow', index).datagrid('beginEdit', index);
				editIndex = index;
			} else {
				$('#dg').datagrid('selectRow', editIndex);
			}
		}
	}
	<?php echo '</script'; ?>
>
</div><?php }} ?>
