<?php
/**
 * Index
 */


namespace App\Http\Controllers;

class IndexController extends BaseController {
	
	// localhost:9023/index
    public function index() {
		echo '这是框架的默认index界面，欢迎你！9023!';
	}

	// localhost:9023/index/checkenv
	public function checkEnv() {
		echo '检查环境是否满足运行laravel6！';
		$waitCheck = [];
		$waitCheck['phpVersion'] = '7.2';
		$waitCheck['phpExt'] = ['bcmath','ctype','json','mbstring','openssl','pdo','tocknizer','xml'];
		echo '<br/><br/>开始检查PHP环境！';
		echo '<br/>1、需要的php版本为：'.$waitCheck['phpVersion'];
		echo '<br/>当前版本为：'.PHP_VERSION;
		
		echo '<br/><br/>2、开始检查PHP扩展：';
		$able=get_loaded_extensions();
		foreach($waitCheck['phpExt'] as $key=>$val) {
			$flag = in_array($val,$waitCheck['phpExt']) ? true : false;
			$flagMsg = $flag ? '通过' : '不通过';
			echo '<br/>'.$key.' ==> '.$val;
			echo ' ==> '.$flagMsg;
		}

	}

}