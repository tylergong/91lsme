<?php

require_once('abstract.php');

class Database_pdomysql extends Adapter_Pdo_Abstract {

	public function insert($table, $data, $replace = false) {
		$fields = array();
		$values = array();
		foreach ($data as $key => $val) {
			$fields[] = '`' . $key . '`';
			$values[] = $this->escape($val);
		}
		return ($replace ? 'REPLACE' : 'INSERT') . ' INTO ' . $this->_table($table) . ' (' . implode(', ', $fields) . ') VALUES (' . implode(', ', $values) . ')';
	}

	public function duplicateInsert($table, $data, $prkey) {
		$fields = array();
		$values = array();
		foreach ($data as $key => $val) {
			$fields[] = '`' . $key . '`';
			$values[] = $this->escape($val);
			if ($key != $prkey) {
				$up .= '`' . $key . '`=' . $this->escape($val) . ',';
			}
		}
		$up = substr($up, 0, -1);
		return 'INSERT INTO ' . $this->_table($table) . ' (' . implode(', ', $fields) . ') VALUES (' . implode(', ', $values) . ') ON DUPLICATE KEY UPDATE ' . $up;
	}

	public function update($table, $data, $where) {
		$fields = array();
		foreach ($data as $key => $val) {
			$fields[] = '`' . $key . "` = " . $this->escape($val);
		}
		return 'UPDATE ' . $this->_table($table) . ' SET ' . implode(', ', $fields) . ' WHERE ' . implode(" ", $where);
	}

	public function delete($table, $where) {
		return 'DELETE FROM ' . $this->_table($table) . ' WHERE ' . implode(" ", $where);
	}

	// 格式化数据
	public function escape($str) {
		switch (gettype($str)) {
			case 'string' : $str = "'" . $this->escape_str($str) . "'";
				break;
			case 'boolean' : $str = ($str === FALSE) ? 0 : 1;
				break;
			default : $str = ($str === NULL) ? 'NULL' : $str;
				break;
		}

		return $str;
	}

	// 执行sql语句
	public function query($sql) {
		try {
			$this->execute($sql);
		} catch (Exception $e) {
			
		}
		return $this;
	}

	// 得到最好一次插入的id 
	public function insert_id() {
		return $this->lastInsertId();
	}

	// 得到受影响行数
	public function affected_rows() {
		return $this->affectedRows();
	}

	// 过滤
	public function _parse($str) {
		$str = trim($str);
		if (!preg_match("/(\s|<|>|!|=|is null|is not null)/i", $str)) {
			return false;
		}

		return true;
	}

	public function limit($limit, $offset) {
		if ($offset == 0) {
			$offset = '';
		} else {
			$offset .= ", ";
		}

		return " LIMIT " . $offset . $limit;
	}

	public function fetch_one($n = 0, $type = 'assoc') {
		$array = $this->_fetch_one($type);

		if (is_numeric($n)) {
			return $array;
		}

		return $array[$n];
	}

}
