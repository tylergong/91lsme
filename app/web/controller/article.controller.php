<?php

require_once(FRAMEWORK_PATH . 'base/controller/Base.controller.php');

class articleController extends BaseController {

	private $IDBModel = null;

	public function init() {
		$defaultDbConfig = '';
		require(APP_WEB_PATH . 'config/db.conf.php');
		$this->IDBModel = new IDBModel($defaultDbConfig);

	}

	/**
	 * 根据文章id获取文章信息
	 *
	 * @param type $id
	 *
	 * @return type
	 */
	public function C_getArticleById($id, $is_admin = false) {
		$arr['where'] = array(
			'id' => $id,
			'is_del' => 0
		);
		if(!$is_admin) {
			$arr['where']['is_show'] = 1;
		}
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_getRow($arr);
		return $res;
	}

	/**
	 * 根据文章id获取文章上下篇
	 *
	 * @param $id
	 * @param $cid
	 *
	 * @return mixed
	 */
	public function C_getArticleByIdForUpDown($id, $cid) {
		$c['select'] = 'id';
		$c['where'] = array(
			'cid' => $cid,
			'is_del' => 0,
			'is_show' => 1
		);
		$c['by'] = array('id' => 'desc');
		$c['table'] = 'ls_article';
		$updown['c'] = $this->IDBModel->M_getLimit($c);
		foreach($updown['c'] as $k => $v) {
			if($id == $v['id']) {
				$upk = $k - 1;
				$downk = $k + 1;
				break;
			}
		}
		$upid = $updown['c'][$upk]['id'];
		$downid = $updown['c'][$downk]['id'];

		$up['select'] = 'id,title';
		$up['where'] = array(
			'id' => $upid,
			'cid' => $cid,
			'is_del' => 0,
			'is_show' => 1
		);
		$up['table'] = 'ls_article';
		$updown['up'] = $this->IDBModel->M_getRow($up);

		$down['select'] = 'id,title';
		$down['where'] = array(
			'id' => $downid,
			'cid' => $cid,
			'is_del' => 0,
			'is_show' => 1
		);
		$down['table'] = 'ls_article';
		$updown['down'] = $this->IDBModel->M_getRow($down);

		//print_r($updown);
		//die;
		return $updown;
	}

	/**
	 * 根据文章类型获取 文章数量
	 *
	 * @param cid $cid
	 *
	 * @return type
	 */
	public function C_getArticleCountByCid($cid = 0, $is_del = 0, $is_admin = false) {
		$arr = array();
		if($cid != 0) {
			$arr['where']['cid'] = $cid;
		}
		$arr['where']['is_del'] = $is_del;
		if(!$is_admin) {
			$arr['where']['is_show'] = 1;
		}
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_getCount($arr);
		return $res;
	}

	/**
	 * 根据文章类型获取 分页数据
	 *
	 * @param type $type
	 * @param type $limit
	 * @param type $offset
	 *
	 * @return type
	 */
	public function C_getArticleListByCid($cid = 0, $is_del = 0, $limit = 10, $offset = 0, $is_admin = false) {
		if($cid != 0) {
			$arr['where']['cid'] = $cid;
		}
		$arr['where']['is_del'] = $is_del;
		if(!$is_admin) {
			$arr['where']['is_show'] = 1;
		}
		$arr['by'] = array(
			"up" => "desc",
			"id" => "desc"
		);
		if($limit > 0) {
			$arr['limit'] = array(
				$limit,
				$offset
			);
		}
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_getLimit($arr);
		return $res;
	}

	/**
	 * 按照文章分类获取分页数据（前台使用）
	 *
	 * @param type $type
	 * @param type $page
	 *
	 * @return type
	 */
	public function C_getArticleListByCidPage($cid = 0, $page = 1) {
		$count = $this->C_getArticleCountByCid($cid, 0, false);

		$limit = PAGE_SIZE;
		$offset = intval($page - 1) * $limit;
		$res = $this->C_getArticleListByCid($cid, 0, $limit, $offset, false);

		$data['count'] = $count['count'];
		$data['list'] = $res;
		return $data;
	}

	/**
	 * 按照文章分类获取分页数据（后台使用）
	 *
	 * @param type $type
	 * @param type $page
	 *
	 * @return type
	 */
	public function C_getArticleListAdminPage($cid = 0, $page = 1) {
		$count = $this->C_getArticleCountByCid($cid, 0, true);

		$channle_t = $this->C_getChannelList();
		foreach($channle_t as $k => $v) {
			$channle[$v['id']] = $v['cname'];
		}

		$limit = PAGE_ADMIN_SIZE;
		$offset = intval($page - 1) * $limit;
		$res = $this->C_getArticleListByCid($cid, 0, $limit, $offset, true);
		foreach($res as $k => $v) {
			$res[$k]['channel'] = $channle[$v['cid']];
		}

		$data['count'] = $count['count'];
		$data['list'] = $res;
		return $data;
	}

	/**
	 * 按照文章分类获取删除的分页数据（后台使用）
	 *
	 * @param type $type
	 * @param type $page
	 *
	 * @return type
	 */
	public function C_getArticleListRecycleAdminPage($cid = 0, $page = 1) {
		$count = $this->C_getArticleCountByCid($cid, 1, true);

		$channle_t = $this->C_getChannelList();
		foreach($channle_t as $k => $v) {
			$channle[$v['id']] = $v['cname'];
		}

		$limit = PAGE_ADMIN_SIZE;
		$offset = intval($page - 1) * $limit;
		$res = $this->C_getArticleListByCid($cid, 1, $limit, $offset, true);
		foreach($res as $k => $v) {
			$res[$k]['channel'] = $channle[$v['cid']];
		}

		$data['count'] = $count['count'];
		$data['list'] = $res;
		return $data;
	}

	/**
	 * 新增文章
	 *
	 * @param type $data
	 *
	 * @return type
	 */
	public function C_addArticle($data) {
		$res = $this->IDBModel->M_add('ls_article', $data);
		return $res;
	}

	/**
	 * 修改文章
	 *
	 * @param type $id
	 * @param type $data
	 *
	 * @return type
	 */
	public function C_upArticle($id, $data) {
		$arr['where'] = array('id' => $id);
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_update($data, $arr);
		return $res;
	}

	/**
	 * 删除文章（逻辑删除）
	 *
	 * @param type $ids
	 *
	 * @return type
	 */
	public function C_delArticle($ids) {
		$data = array('is_del' => 1);
		$arr['in'] = array('id' => $ids);
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_update($data, $arr);
		return $res;
	}

	/**
	 * 恢复被删除的文章（逻辑删除）
	 *
	 * @param type $ids
	 *
	 * @return type
	 */
	public function C_recArticle($ids) {
		$data = array('is_del' => 0);
		$arr['in'] = array('id' => $ids);
		$arr['table'] = 'ls_article';
		$res = $this->IDBModel->M_update($data, $arr);
		return $res;
	}

	/**
	 * 根据id 获取频道信息
	 *
	 * @param type $id
	 */
	public function C_getChannelById($id) {
		$arr['where'] = array("id" => $id);
		$arr['table'] = 'ls_channel';
		$res = $this->IDBModel->M_getRow($arr);
		return $res;
	}

	/**
	 * 频道数量
	 *
	 * @return type
	 */
	public function C_getChannelCount() {
		$arr['table'] = 'ls_channel';
		return $this->IDBModel->M_getCount($arr);
	}

	/**
	 * 频道列表数据
	 *
	 * @param type $limit
	 * @param type $offset
	 *
	 * @return type
	 */
	public function C_getChannelList($limit = 10, $offset = 0, $isadmin = true) {
		if($limit > 0) {
			$arr['limit'] = array(
				$limit,
				$offset
			);
		}
		if(!$isadmin) {
			$arr['where'] = array('isshow' => 1);
		}
		$arr['table'] = 'ls_channel';
		$list = $this->IDBModel->M_getLimit($arr);
		return $list;
	}

	/**
	 * 频道分页数据（后台使用）
	 *
	 * @param type $page
	 *
	 * @return type
	 */
	public function C_getChannelListAdminPage($page = 1) {

		$count = $this->C_getChannelCount();

		$limit = PAGE_ADMIN_SIZE;
		$offset = intval($page - 1) * $limit;
		$res = $this->C_getChannelList($limit, $offset);

		$data['count'] = $count['count'];
		$data['list'] = $res;
		return $data;
	}

	/**
	 * 新增频道
	 *
	 * @param type $data
	 *
	 * @return type
	 */
	public function C_addChannel($data) {
		$res = $this->IDBModel->M_add('ls_channel', $data);
		return $res;
	}

	/**
	 * 修改频道
	 *
	 * @param type $cid
	 * @param type $data
	 *
	 * @return type
	 */
	public function C_upChannel($id, $data) {
		$arr['where'] = array('id' => $id);
		$arr['table'] = 'ls_channel';
		$res = $this->IDBModel->M_update($data, $arr);
		return $res;
	}

	/**
	 * 获取置顶文章 (2017-7-14)
	 *
	 * @return mixed
	 */
	public function C_getHotArticle() {
		$arr['select'] = 'id,title,is_link,jumpurl';
		$arr['where'] = array(
			'is_del' => 0,
			'is_show' => 1,
			'up' => 1
		);
		$arr['by'] = array('id' => 'desc');
		$arr['table'] = 'ls_article';
		$list = $this->IDBModel->M_getLimit($arr);
		foreach($list as $k => $v) {
			$list[$k]['to_url'] = ($v['is_link'] == 0) ? '/article/' . $v['id'] : $v['jumpurl'];
		}
		return $list;
	}

	/**
	 * 获取文章上一篇\下一篇 (2017-7-14)
	 *
	 * @param $id
	 * @param $cid
	 */
	public function C_getArticleForPreAndNext($id, $cid) {
		// 上一篇\下一篇
		$previous['select'] = 'id,title,is_link,jumpurl';
		$previous['where'] = array(
			'cid' => $cid,
			'is_del' => 0,
			'is_show' => 1,
			'id > ' . $id => null
		);
		$previous['by'] = array('id' => 'asc');
		$previous['table'] = 'ls_article';
		$previous['limit'] = 1;
		$data['previous'] = $this->IDBModel->M_getRow($previous);
		if($data['previous'])
			$data['previous']['to_url'] = ($data['previous']['is_link'] == 0) ? '/article/' . $data['previous']['id'] : $data['previous']['jumpurl'];


		$next['select'] = 'id,title,is_link,jumpurl';
		$next['where'] = array(
			'cid' => $cid,
			'is_del' => 0,
			'is_show' => 1,
			'id < ' . $id => null
		);
		$next['by'] = array('id' => 'desc');
		$next['table'] = 'ls_article';
		$next['limit'] = 1;
		$data['next'] = $this->IDBModel->M_getRow($next);
		if($data['next'])
			$data['next']['to_url'] = ($data['next']['is_link'] == 0) ? '/article/' . $data['next']['id'] : $data['next']['jumpurl'];

		return $data;
	}

	/**
	 * 按照文章分类获取分页数据（前台使用）(2017-7-14)
	 *
	 * @param type $type
	 * @param type $page
	 *
	 * @return type
	 */
	public function C_getArticleListByCidPageNew($cid = 0, $page = 1) {
		$count = $this->C_getArticleCountByCid($cid, 0, false);

		$limit = PAGE_SIZE;
		$offset = intval($page - 1) * $limit;
		$res = $this->C_getArticleListByCid($cid, 0, $limit, $offset, false);
		foreach($res as $k => $v) {
			$res[$k]['to_url'] = ($v['is_link'] == 0) ? '/article/' . $v['id'] : $v['jumpurl'];
			$tmp = preg_replace(array(
				'/<img(.*?)>/',
				'/<(.*?)>/',
				'/<\/(.*?)>/',
				'/<br \/>/',
				'/&nbsp;/',
				'/&lt;(.*?)&gt;/',
			), array(
				'',
				'',
				'',
				'',
				'',
				'',
			), $v['content']);
			$res[$k]['content_limit'] = mb_substr($tmp, 0, 100, 'utf-8');
		}

		$data['count'] = $count['count'];
		$data['last_page'] = ceil($count['count'] / $limit);
		$data['list'] = $res;
		return $data;
	}

	public function C_searchArticleList($words) {
		$arr['select'] = 'id,title,is_link,jumpurl,content';
		$arr['where'] = array(
			'is_del' => 0,
			'is_show' => 1,
			"title LIKE '%" . $words . "%'" => null,
		);
		$arr['limit'] = 30;
		$arr['table'] = 'ls_article';
		$list = $this->IDBModel->M_getLimit($arr);
		foreach($list as $k => $v) {
			$list[$k]['to_url'] = ($v['is_link'] == 0) ? WEB_SITES_URL . '/article/' . $v['id'] : $v['jumpurl'];
			$tmp = preg_replace(array(
				'/<img(.*?)>/',
				'/<(.*?)>/',
				'/<\/(.*?)>/',
				'/<br \/>/',
				'/&nbsp;/',
				'/&lt;(.*?)&gt;/',
			), array(
				'',
				'',
				'',
				'',
				'',
				'',
			), $v['content']);
			$list[$k]['content_limit'] = mb_substr($tmp, 0, 100, 'utf-8');
		}
		return $list;
	}

	// 求素数
	public function sushu() {
		$n = 100;
		$t_n = sqrt($n);// 平方根
		$k = 0;
		for($i = 1; $i <= $n; $i++) {
			$is_ok = true;
			for($j = 2; $j <= $t_n; $j++) {
				$k++;
				if($i == $j)
					continue;
				if($i % $j == 0) {
					$is_ok = false;
					break;
				}
			}
			if($is_ok) {
				$tmp[] = $i;
			}
		}
		print_r($tmp);
		echo $n . '以内素数,循环' . $k . '次';
	}


	// 冒泡排序
	public function bubbleSort($arr) {
		$count = count($arr);
		for($i = 1; $i < $count; $i++) {
			for($j = 0; $j < $count - $i; $j++) {
				if($arr[$j] > $arr[$j + 1]) {
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j + 1];
					$arr[$j + 1] = $tmp;
				}
			}
		}
		return $arr;
	}

	// 快速排序
	public function quickSort($arr) {
		$length = count($arr);
		if($length <= 1)
			return $arr;
		$base = $arr[0];
		$max = [];
		$min = [];
		for($i = 1; $i < $length; $i++) {
			if($base > $arr[$i]) {
				$max[] = $arr[$i];
			} else {
				$min[] = $arr[$i];
			}
		}
		$max = $this->quickSort($max);
		$min = $this->quickSort($min);
		return array_merge($min, array($base), $max);
	}


	// 二分法查询(递归模式)
	public function search($arr, $k, $low = 0, $high = 0) {
		if(is_array($arr) && $high == 0) {
			$high = count($arr) - 1;
		}

		if($low <= $high) {
			$mid = ceil(($low + $high) / 2);
			$tmp = $arr[$mid];
			echo $mid . '[' . $tmp . ']_';
			if($k == $tmp) {
				return $mid;
			} else if($k < $tmp) {
				return $this->search($arr, $k, $low, $mid - 1);
			} else {
				return $this->search($arr, $k, $mid + 1, $high);
			}
		}
	}

	// 二分法查询(while模式)
	public function search2($arr, $k, $low = 0, $high = 0) {
		$high = count($arr) - 1;
		while($low <= $high) {
			$mid = ceil(($low + $high) / 2);
			$tmp = $arr[$mid];
			echo $mid . '[' . $tmp . ']_';
			if($k == $tmp) {
				return $mid;
			} else if($k > $tmp) {
				$high = $mid - 1;
			} else {
				$low = $mid + 1;
			}
		}
	}





















//	public function bubbleSort($array) {
//	$count = count($array);
//	for($i = 1; $i < $count; $i++) {
//		for($j = 0; $j < $count - $i; $j++) {
//			if($array[$j] > $array[$j + 1]) {
//				$tmp = $array[$j];
//				$array[$j] = $array[$j + 1];
//				$array[$j + 1] = $tmp;
//			}
//		}
//	}
//	return $array;
//}
//
//	public function search($array, $k, $low = 0, $high = 0) {
//		static $n = 0;
//		$n++;
//		if(count($array) != 0 and $high == 0) {
//			$high = count($array)-1;
//		}
//		if($low <= $high) {
//			$mid = intval(($low + $high) / 2);
//			$tmp = $array[$mid];
//			echo $n . '_' . $low . '_' . $high . '_' . $mid . '_[' . $tmp . ']+';
//			if($k == $tmp) {
//				return $mid;
//			} else if($k < $tmp) {
//				return $this->search($array, $k, $low, $mid - 1);
//			} else {
//				return $this->search($array, $k, $mid + 1, $high);
//			}
//		}
//		return '无';
//	}
}
