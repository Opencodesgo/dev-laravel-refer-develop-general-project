<?php
/**
 * Demo05
 */

namespace App\Http\Controllers;

class Demo05Controller extends BaseController {
	
    public function index() {
		echo 'demo index';
		$db = new \Illuminate\Support\Facades\Db();
		//var_dump($db::connection());
	}
	
	public function func($func) {
		$this->$func();
	}
	
	// localhost:9023/demo05/a1
	public function a1() {
		echo 'a1';
	}
	
}