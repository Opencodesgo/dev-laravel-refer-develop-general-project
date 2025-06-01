<?php
/**
 * Demo02，数据库
 */

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;

class Demo02Controller extends BaseController {
	
	
	//http://localhost:9023/demo02/index
	public function index() {
		echo 'demo index';
		$db = new \Illuminate\Support\Facades\DB();
		//dd($db::connection());
	}

	public function func($func) {
		$this->$func();
	}

	//http://localhost:9023/demo02/a1
	public function a1() {
		$user = DB::table('user')->get();
		foreach($user as $val) {
			echo $val->name;
		}
	}

	// http://localhost:9023/demo02/a2
	public function a2() {
		//方法1，原生
		$data = DB::select('select * from user');
		//dd($data);
		
		//DB::beginTransaction();
		//$data = DB::update("update user set name='李四2' where id=2");
		//DB::commit();
		//var_dump($data);
	}

	// http://localhost:9023/demo02/a3
	public function a3() {
		//方法2，查询构建器
		$data = DB::table('user')->get();
		$data = DB::table('user')->where('id',2)->first();
		$data = DB::table('user')->find(1);
		$data = DB::table('user')->pluck('name');

		$data = DB::table('user')->join('course','user.code','=','course.user_code')->get();
		$data = DB::table('user')->leftJoin('course','user.code','=','course.user_code')->get();
		
		$first = DB::table('user');
		$data = DB::table('course')->union($first)->get();
		
		$ret = DB::table('user')->insert(['code'=>'ww','name'=>'王五']);
		//dd($ret);
	}


	// http://localhost:9023/demo02/a4
	public function a4() {
		//实现分页
		$data = DB::table('user')->paginate(5);
		$data = DB::table('user')->simplePaginate(5);
		dd($data);
	}
	
}