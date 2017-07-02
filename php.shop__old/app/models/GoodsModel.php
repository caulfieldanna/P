<?php

class GoodsModel {
	private $db;

	public function __construct() {
		$this->db = DB::getInstance();
	}
}
