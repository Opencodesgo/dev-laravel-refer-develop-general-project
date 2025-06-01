<?php
/**
 * Demo01，通用
 */

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\APP;

class Demo01Controller extends BaseController {
	
    public function index() {
		echo 'demo01 index';
		$db = new \Illuminate\Support\Facades\Db();
		dd($db::connection());
	}
	
	//localhost:9023/demo01
	public function func($func) {
		$this->$func();
	}
	
	//localhost:9023/demo01/a1
	public function a1() {
		$enviroment = App::environment();
		var_dump($enviroment);
		$value = config('app.timezone');
		var_dump($value);
	}
	
}