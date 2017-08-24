<?php

require_once(FRAMEWORK_PATH . 'base/view/smarty.view.php');
require_once(APP_WEB_PATH . 'controller/article.controller.php');
require_once(APP_WEB_PATH . 'controller/ad.controller.php');
require_once(APP_WEB_PATH . 'controller/flinks.controller.php');

class ArticlelistView extends smartView {

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
	 *  /articlelist?type=1
	 */
	public function index() {
		$this->caching = PAGE_STATIC ? false : PAGE_MODEL;

//		$_type = (isset($_GET['type'])) ? intval($_GET['type']) : 1;
//		$_p = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
//
//		if (!$this->isCached('articlelist.shtml', $_type . '_' . $_p)) {
//			$this->setpagedata($_type, $_p);
//		}
//		$this->display('articlelist.shtml', $_type . '_' . $_p);

		$cid = (isset($_GET['cid'])) ? intval($_GET['cid']) : 1;
		$c_detail = $this->articleController->C_getChannelById($cid);
		$this->assign('cid', $cid);
		$this->assign('cname', $c_detail['cname']);
		$this->display('articlelist2.shtml');
	}

	/**
	 * 获取频道列表,vue ajax获取 (2017-7-14)
	 */
	public function getLists() {
		$cid = (isset($_GET['cid'])) ? intval($_GET['cid']) : 1;
		$cur = (isset($_GET['cur'])) ? intval($_GET['cur']) : 1;
		$data['lists'] = $this->articleController->C_getArticleListByCidPageNew($cid, $cur);
		$data['lists']['current_page'] = $cur;

		$data['hot_lists'] = $this->articleController->C_getHotArticle();

		die(json_encode($data));
	}

	/**
	 * 静态页模式
	 *    /articlelist/t_p.shtml
	 */
	public function release() {
		$this->caching = false;
		$_type = (isset($_GET['type'])) ? intval($_GET['type']) : 1;
		$_p = (isset($_GET['page'])) ? intval($_GET['page']) : 1;

		$this->setpagedata($_type, $_p);

		$html = $this->fetch('articlelist.shtml');
		$file = APP_WEB_PATH . '/templates/articlelist/static/' . $_type . '_' . $_p . '.shtml';
		FileHelp::BuildHtml($file, $html);
	}

	public function setpagedata($_type, $_p) {
		// 获取文章列表
		$list = $this->articleController->C_getArticleListByCidPage($_type, $_p);
		if(PAGE_STATIC) {
			$page = BaseCom::GetPageListStatic(PAGE_SIZE, $_p, $list['count'], PAGE_SPACE, '/articlelist', $_type);
		} else {
			$page = BaseCom::GetPageList(PAGE_SIZE, $_p, $list['count'], PAGE_SPACE, '/articlelist', 'type=' . $_type);
		}
		$this->assign('type', $_type);
		$this->assign('pageview', $page);
		$this->assign('list', $list['list']);
	}

	// 搜索列表 (2017-7-14)
	public function search() {
		$words = (isset($_GET['words'])) ? trim($_GET['words']) : 1;
		$list = $this->articleController->C_searchArticleList($words);
		$this->assign('words', $words);
		$this->assign('lists', $list);
		$this->display('search.shtml');
	}

}
