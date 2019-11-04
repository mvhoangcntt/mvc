<?php 
class App{
	//http://localhost/english/home/sayhi/1/2/3
	protected $controller="Home";//home
	protected $action = "SayHi";//sayhi
	protected $params = [];//1/2/3
	function __construct(){
		//Array ( [0] => home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
		$arr = $this->UrlProcess();
		// print_r($arr);
		// xử lý controller
		if (file_exists("./mvc/controllers/".$arr[0].".php")) {
			$this->controller = $arr[0];
			unset($arr[0]);
		}
		require_once "./mvc/controllers/".$this->controller.".php";
		// nhiều controller nên phải gọi đúng
		$this->controller = new $this->controller;
		// xu lý function
		if (isset($arr[1])) {
			// kiểm tra metho tồn tại
			if (method_exists($this->controller,$arr[1] )) {
				$this->action = $arr[1];
			}
			unset($arr[1]);
		}
		// Xử lý params giống if
		$this->params = $arr?array_values($arr):[];
		
		// gọi và chạy 
		call_user_func_array([$this->controller, $this->action], $this->params);
	}
	function UrlProcess(){
		// lấy url
		if (isset($_GET["url"])) {
			// cắt chuôi explode(,)
			// trim xóa khoảng trắng
			return explode("/", filter_var(trim($_GET['url'], "/")));
			
		}
	}
}


 ?>