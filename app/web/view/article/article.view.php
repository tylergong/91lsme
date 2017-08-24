<?php

require_once(FRAMEWORK_PATH . 'base/view/smarty.view.php');
require_once(APP_WEB_PATH . 'controller/article.controller.php');
require_once(APP_WEB_PATH . 'controller/ad.controller.php');
require_once(APP_WEB_PATH . 'controller/flinks.controller.php');

class ArticleView extends smartView {

	private $articleController = null;
	private $adController = null;
	private $flinksController = null;

	public function __construct() {
		parent::__construct();

		$this->articleController = new articleController();
		$this->adController = new adController();
		$this->flinksController = new flinksController();
	}

	/**
	 * 缓存模式
	 *  /article?id=n
	 */
	public function index() {
		$this->caching = PAGE_STATIC ? false : PAGE_MODEL;

		$_id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

//		if (!$this->isCached('article.shtml', $_id)) {
//			$this->setpagedata($_id);
//		}
//		$this->display('article.shtml', $_id);

		$this->setpagedatanew($_id);
		$this->display('article2.shtml');
	}

	/**
	 * 静态页模式
	 *    /article/n.shtml
	 */
	public function release() {
		$this->caching = false;
		$_id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;

		$this->setpagedata($_id);

		$html = $this->fetch('article.shtml');
		$file = APP_WEB_PATH . '/templates/article/static/' . $_id . '.shtml';
		FileHelp::BuildHtml($file, $html);
	}

	public function setpagedata($_id) {
		// 获取文章内容
		$data = $this->articleController->C_getArticleById($_id);
		if(empty($data)) {
			BaseCom::ShowError();
		}
		$this->assign('data', $data);

		// 获取上下篇章
		$updown = $this->articleController->C_getArticleByIdForUpDown($_id, $data['cid']);
		$this->assign('updown', $updown);
	}

	// 新版获取详情资料 (2017-7-14)
	public function setpagedatanew($_id) {
		// 获取文章内容
		$data = $this->articleController->C_getArticleById($_id);
		$data['content'] = stripcslashes($data['content']);
		$this->assign('data', $data);

		// 获取频道
		$c_detail = $this->articleController->C_getChannelById($data['cid']);
		$this->assign('cname', $c_detail['cname']);

		$hot_lists = $this->articleController->C_getHotArticle();
		$this->assign('hot_lists', $hot_lists);

		// 获取上下篇章
		$updown = $this->articleController->C_getArticleForPreAndNext($_id, $data['cid']);
		$this->assign('previous', $updown['previous']);
		$this->assign('next', $updown['next']);
	}

	public function text() {
		$this->caching = false;
		$this->articleController->sushu();
//echo 'tesxt';
//		$file_name = LOG_PATH . 'admin/admin_2017.log';
//
//		define("MAX_SHOW", 8192);
//
//		$file_size      = 0;
//		$file_size_new  = 0;
//		$add_size       = 0;
//		$ignore_size    = 0;
//		$fp = fopen($file_name, "r");
//		while(1){
//			clearstatcache();
//			$file_size_new  = filesize($file_name);
//			$add_size       = $file_size_new - $file_size;
//			if($add_size > 0){
//				if($add_size > MAX_SHOW){
//					$ignore_size    = $add_size - MAX_SHOW;
//					$add_size       = MAX_SHOW;
//					fseek($fp, $file_size + $ignore_size);
//				}
//				fwrite(
//					STDOUT,
//					fread($fp, $add_size)
//				);
//				$file_size  = $file_size_new;
//			}
//			sleep(3);
//		}
//
//		fclose($fp);


//
//		echo intval(0.58 * 100);
//
//		$arr1 = array(
//			'a' => 'a',
//			'b' => 'b'
//		);
//		$arr2 = array(
//			'a' => 'c',
//			'b' => 'd'
//		);
//		$a = $arr1 + $arr2;
//		print_r($a);
//		$arr = array_merge($arr1, $arr2);
//		print_r($arr);
//		die;
//		setcookie("a", "value");
//		print $_COOKIE['a'];
//		die;
//
//		$a = 1;
//		for($i = 2; $i <= 100; $i++) {
//			$a = $a ^ $i;
//			echo $i . '_' . $a . '<br>';
//		}
//		echo $a;
//		die;
//
//
//		$array = array(
//			2,
//			3,
//			5,
//			22,
//			1,
//			43,
//			23,
//			44,
//			56,
//			7,
//			8,
//			9,
//			0,
//			18
//		);
//
//		print_r($array);
//		$array = $this->articleController->bubbleSort($array);
//		print_r($array);
//		$k = 18;
//		$aaa = $this->articleController->search2($array, $k, $low = 0, $high = 0);
//		echo $aaa;
	}


}
