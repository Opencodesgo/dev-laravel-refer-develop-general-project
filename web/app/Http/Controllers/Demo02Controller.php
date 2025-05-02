<?php
/**
 * Demo02，数据库
 */

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;

class Demo02Controller extends BaseController {
	
	
	//http://localhost:9023/demo02/index
	public function index() {
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}

	public function func($func) {
		$this->$func();
	}

	/**
	 * 场景1，连接数据库
	 * http://localhost:9023/demo02/conn
	 */
	public function conn() {
		$db = new DB();
		$obj = $db::connection();
		dd($db::getFacadeApplication());
	}
	
}