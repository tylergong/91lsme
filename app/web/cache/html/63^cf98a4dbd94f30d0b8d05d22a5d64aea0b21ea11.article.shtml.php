<?php /*%%SmartyHeaderCode:100325781759678d053aea58-89995510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf98a4dbd94f30d0b8d05d22a5d64aea0b21ea11' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/templates/article/html/article.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
    '145682e79168b6326381717d9c7baee9e922a72f' => 
    array (
      0 => '/Users/gm/Documents/www/91lsme/app/web/config/smarty.conf',
      1 => 1499941442,
      2 => 'file',
    ),
    '44abb5987dc677bb287e1f623b693d3b874052e8' => 
    array (
      0 => 'app/web/templates/public/html/header.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
    '2bb30ad402c999ab9b03b4fb19862e01b9d5dd16' => 
    array (
      0 => 'app/web/templates/public/html/nav.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
    'bec7611ede037ac237fba9eaf68f293628896e39' => 
    array (
      0 => 'app/web/templates/public/html/left.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
    '8160550d1ea5fea5a4900c52b18027c378029a7d' => 
    array (
      0 => 'app/web/templates/public/html/bottom_ad.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
    '9c05b187a877267feb81b2852108012419a26f2b' => 
    array (
      0 => 'app/web/templates/public/html/footer.shtml',
      1 => 1499920560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100325781759678d053aea58-89995510',
  'variables' => 
  array (
    'data' => 0,
    'updown' => 0,
    'is_static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59678d059b6be2_56930424',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59678d059b6be2_56930424')) {function content_59678d059b6be2_56930424($_smarty_tpl) {?><!--  -->
<!doctype html>
<html>
	<head>
		<title>phpExcel 各种使用大全——就要听我说 91lsme.com</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="就要听我说,听我说,91lsme,listen me">
		<meta name="description" content="就要听我说个人网站，分感知、觉醒、践行、随笔4大主题，内容充实丰富，思想充满创意，作品精益求精。">
		<link rel="shortcut icon" type="image/ico" href="http://gm.91lsme.com/app/web/templates/public/image/favicon.ico">
		<link rel="stylesheet" href="http://gm.91lsme.com/app/web/templates/public/css/css.css" type="text/css">
		<link rel="stylesheet" href="http://gm.91lsme.com/app/web/templates/article/css/article.css" type="text/css">
		<link rel="stylesheet" href="http://gm.91lsme.com/plugin/editor/plugins/code/prettify.css" type="text/css">
		<script type="text/javascript" src="http://gm.91lsme.com/plugin/jquery/jquery-1.6.4.min.js"></script>
	</head>

	<body>
		<div class="main"> 
			<!-- 顶部 -->
			<div class="top"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="logo"><a href="http://gm.91lsme.com"><img src="http://gm.91lsme.com/app/web/templates/public/image/logo.png"></a></div>
<div class="Qme"><a href="tencent://message/?uin=286142784&Menu=yes"><img src="http://gm.91lsme.com/app/web/templates/public/image/Qme.png"></a></div>
 </div>
			<!-- 导航 -->
			<div class="nav"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<ul class="navMain">
	<li><a href="http://gm.91lsme.com/"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav1.png"/></a></li>
	<li><a href="http://gm.91lsme.com/articlelist?type=1"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav2.png"/></a></li>
	<li><a href="http://gm.91lsme.com/articlelist?type=2"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav3.png"/></a></li>
	<li><a href="http://gm.91lsme.com/articlelist?type=3"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav4.png"/></a></li>
	<li><a href="http://gm.91lsme.com/articlelist?type=4"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav5.png"/></a></li>
	<li><a href="http://gm.91lsme.com/article?id=14"><img src="http://gm.91lsme.com/app/web/templates/public/image/nav6.png"/></a></li>
</ul>
 </div>
			<div class="content"> 
				<!-- 左边框 -->
				<div class="left"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="leftImg"><img src="http://gm.91lsme.com/app/web/templates/public/image/leftImg.png"></div>
<div class="leftWord">
	<div class="titleL"><img src="http://gm.91lsme.com/app/web/templates/public/image/listen.png"></div>
	<div class="wordL">
		<div class="tM"><span>⊙</span> 前言阵地 </div>
		<div class="cM" style="text-indent:2em"> 经过很长时间奋战，就要听我说个人网终于建成，还有很多不成熟和欠缺的地方 ，希望大家多多支持和提出好的建议！以后会做的更好 ……</div>
	</div>   
	<script type="text/javascript" src="/plugin/highcharts/highcharts.js"></script>  
	<script type="text/javascript" src="/plugin/highcharts/highcharts-more.js"></script>
	<script type="text/javascript" src="/plugin/highcharts/themes/grid.js"></script>
	<script type="text/javascript" src="/app/web/templates/public/js/clock.js"></script>
	<div class="lefttime" id="container_clock"></div>
	<div class="leftad"></div>
</div>
 </div>
				<div class="centerAndRight"> 
					<!-- 空白框 -->
					<div class="ad">  </div>
					<div class="center">
						<div class="title">
							<div class="titleImg">
								<img src="http://gm.91lsme.com/app/web/templates/default/image/speaks.png"/>
							</div>
						</div>  
						<div class="articleTitle">phpExcel 各种使用大全</div>
						<div class="time">2015-01-09</div>
						<div class="line_1"></div>
						<div class="articleMain"><p>
	关于 phpexcel 的使用规则，经过一段时间的整理。
</p>
<p>
	直接贴代码，效果更直观，以下代码通过测试，可以直接使用。
</p>
<pre class=\"prettyprint lang-php\">&lt;?php
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties 设置文档的属性
$objPHPExcel-&gt;getProperties()
	-&gt;setCreator(\"Maarten Balliauw\")//创建人
	-&gt;setLastModifiedBy(\"Maarten Balliauw\")//最后修改人
	-&gt;setTitle(\"Office 2007 XLSX Test Document\")//标题
	-&gt;setSubject(\"Office 2007 XLSX Test Document\")//题目
	-&gt;setDescription(\"Test document for Office 2007 XLSX.\")//描述
	-&gt;setKeywords(\"office 2007 openxml php\")//关键字
	-&gt;setCategory(\"Test result file\"); //种类
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel-&gt;setActiveSheetIndex(0);

// Rename worksheet 设置sheet的name
$objPHPExcel-&gt;getActiveSheet()-&gt;setTitle(\'One Sheet\');

// Add some data 设置单元格的值 方式1
$objPHPExcel-&gt;setActiveSheetIndex(0)
	-&gt;setCellValue(\'A1\', \'Hello\')
	-&gt;setCellValue(\'A2\', \'world!\')
	-&gt;setCellValue(\'A3\', \'world!\')
	-&gt;setCellValue(\'A4\', \'world!\')
	-&gt;setCellValue(\'B1\', \'你好\')
	-&gt;setCellValue(\'B2\', \'你好\');
// Add some data 设置单元格的值 方式2
$objPHPExcel-&gt;getActiveSheet()
	-&gt;setCellValue(\'C1\', \'120.3325\')
	-&gt;setCellValue(\'C2\', \'523.2\')
	-&gt;setCellValue(\'C3\', \'33\')
	-&gt;setCellValue(\'C4\', \'0.252\')
	-&gt;setCellValue(\'C5\', \'0.252\')
	-&gt;setCellValue(\'C6\', \'0.252\');

// 合并单元格
$objPHPExcel-&gt;getActiveSheet()-&gt;mergeCells(\'A18:E22\');

// 设置单元格font
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B2\')-&gt;getFont()-&gt;setName(\'Candara\');
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B2\')-&gt;getFont()-&gt;setSize(20);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B2\')-&gt;getFont()-&gt;setBold(true);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B2\')-&gt;getFont()-&gt;setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B2\')-&gt;getFont()-&gt;getColor()-&gt;setARGB(PHPExcel_Style_Color::COLOR_RED);

// 设置单元格格式
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'C1\')-&gt;getNumberFormat()-&gt;setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

// 格式刷 其他单元区域
$objPHPExcel-&gt;getActiveSheet()-&gt;duplicateStyle($objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'C1\'), \'C2:C4\');

// 设置单元格 水平 align
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'A1\')-&gt;getAlignment()-&gt;setHorizontal(PHPExcel_Style_Alignment::VERTICAL_CENTER);

// 设置单元格 垂直 align
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'A2\')-&gt;getAlignment()-&gt;setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

// 设置单元格 边框
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getLeft()-&gt;setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getTop()-&gt;setBorderStyle(PHPExcel_Style_Border::BORDER_DOUBLE);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getRight()-&gt;setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getBottom()-&gt;setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

// 设置单元格 边框颜色
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getLeft()-&gt;getColor()-&gt;setARGB(\'FF0000FF\');
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'B1\')-&gt;getBorders()-&gt;getTop()-&gt;getColor()-&gt;setARGB(\'FF0000FF\');

// 设置单元格 背景色
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'C4\')-&gt;getFill()-&gt;setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel-&gt;getActiveSheet()-&gt;getStyle(\'C4\')-&gt;getFill()-&gt;getStartColor()-&gt;setARGB(\'FF00FF00\');

// 设置宽单元格width
$objPHPExcel-&gt;getActiveSheet()-&gt;getColumnDimension(\'A\')-&gt;setAutoSize(true);
$objPHPExcel-&gt;getActiveSheet()-&gt;getColumnDimension(\'C\')-&gt;setWidth(60);


// 创建一个新的 sheet
$objPHPExcel-&gt;createSheet();
// 设置第二个 sheet 为当前，新增sheet时，数字递增
$objPHPExcel-&gt;setactivesheetindex(1);
// Rename worksheet 设置sheet的name
$objPHPExcel-&gt;getActiveSheet()-&gt;setTitle(\'Sec Sheet\');
// 为新 sheet 赋值
$objPHPExcel-&gt;getActiveSheet()-&gt;setCellValue(\'A1\', \'New\');

// 设置保护工作表 Needs to be set to true in order to enable any worksheet protection! 
$objPHPExcel-&gt;getActiveSheet()-&gt;getProtection()-&gt;setSheet(true);
// 设置允许用户编辑区域
$objPHPExcel-&gt;getActiveSheet()-&gt;protectCells(\'A3:E13\', \'PHPExcel\');


// Redirect output to a client’s web browser (Excel2007)
header(\'Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\');
header(\'Content-Disposition: attachment;filename=\"01simple.xlsx\"\');
header(\'Cache-Control: max-age=0\');
// If you\'re serving to IE 9, then the following may be needed
header(\'Cache-Control: max-age=1\');

// If you\'re serving to IE over SSL, then the following may be needed
header(\'Expires: 0\'); // Date in the past
header(\'Last-Modified: \' . gmdate(\'D, d M Y H:i:s\') . \' GMT\'); // always modified
header(\'Cache-Control: cache, must-revalidate\'); // HTTP/1.1
header(\'Pragma: public\'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, \'Excel2007\');
$objWriter-&gt;save(\'php://output\');
exit;
?&gt;</pre>
<p>
	效果图实例如下：
</p>
<p>
	<img src=\"/attached/image/20150109/20150109151545_13941.jpg\" alt=\"\" width=\"600\" height=\"414\" title=\"\" align=\"\" />
</p></div> 
						<div class="articlelink">相关链接：<a href="" target="_blank"></a></div> 
						<div class="articlefooter">亲们~！有事就点“<a href="tencent://message/?uin=286142784&Menu=yes">就Q我</a>"，多支持和提出好的建议！以后会做的更好 ……</div>
						<div class="articleother">
							<div>上一篇：没有了</div>
							<div>下一篇：<a href="http://gm.91lsme.com/article?id=61">PHP计算字符串长度</a></div>
						</div>
					</div>
					<div class="cbottom"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 </div>
				</div>
			</div>
			<!-- 低部 -->
			<div class="bottom"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<ul>
	<li><a href="http://gm.91lsme.com">版权信息</a></li>
	<li><a href="http://gm.91lsme.com">建站说明</a></li>
	<li><a href="http://gm.91lsme.com">设为首页</a></li>
	<li><a href="http://gm.91lsme.com">加入收藏</a></li>
</ul> 
<br/><br/>
<div class="bw">Copyright © 2014-2015 tylergong <a href="http://www.91lsme.com" target="_blank">www.91lsme.com</a> All rights reserved. <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备 14059724号</a></div> 
<div style="display: none;">
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4e12425c4f2ca16acaab6b2a8cdc8fbc' type='text/javascript'%3E%3C/script%3E"));
	</script>
</div>
 </div>
		</div>
	</body>
</html><?php }} ?>
