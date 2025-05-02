<?php
/**
 * Demo09
 */

namespace App\Http\Controllers;

class Demo01Controller extends BaseController {
	
    public function index() {
		echo 'demo index';
		$db = new \Illuminate\Support\Facades\Db();
		//var_dump($db::connection());
	}
	
	public function func($func) {
		$this->$func();
	}
	
	public function a1() {
		echo 'a1';
	}
	
}