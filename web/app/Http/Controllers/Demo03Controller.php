<?php
/**
 * Demo03，读写文件
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class Demo03Controller extends BaseController {
	
    public function index() {
		echo 'demo index';
		$db = new \Illuminate\Support\Facades\Db();
		//var_dump($db::connection());
	}
	
	public function func($func) {
		$this->$func();
	}
	
	// http://localhost:9023/demo03/a1
	public function a1() {
		//app目录
		//$ret = Storage::disk('local')->put('file.txt', '文件测试！');
		$content = Storage::get('file.txt');
		$url = Storage::url('file.txt');
		$files = Storage::files();
		dd($files);
	}

	// http://localhost:9023/demo03/a2
	public function a2() {
		// 新增app/data目录，专门用来存储数据
		$ret = Storage::disk('data')->put('file.txt', 'Data文件测试！');
		dd($ret);
	}

	// http://localhost:9023/demo03/a3
	public function a3() {
		// 新增app/download目录，专门用来存储生成的提供给用户下载文件
		$ret = Storage::disk('download')->put('file.txt', '下载文件测试！');
		dd($ret);
	}	

	// http://localhost:9023/demo03/a4
	public function a4() {
		// 新增app/upload目录，专门用来存储用户上传的文件
		$ret = Storage::disk('upload')->put('file.txt', '上传文件测试！');
		dd($ret);
	}	
	
}