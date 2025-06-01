<?php
/**
 * Demo18
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class Demo18Controller extends BaseController {
	
    public function index() {
		echo 'demo index';
		$db = new \Illuminate\Support\Facades\Db();
		//var_dump($db::connection());
	}
	
	public function func($func) {
		$this->$func();
	}
	
	// localhost:9023/demo18/a1
	public function a1() {
		echo '检查storage目录是否可写<br/>';
		$storageDir = __DIR__.'../../storage';
		$files = Storage::files($storageDir);
		//dd($files);

		echo '检查APP_KEY是否设置<br/>';
		//$key = env('APP_KEY');
		$key = config('app.key');
		dd($key);
	}
	
}