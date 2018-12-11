<?php
//非法访问
if (!defined('BASECHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}
/* 考勤管理 */
class TestController extends Controller{	
	protected function _init(){
		$this->TestModel=$this->GetModel('Test');
	}
	function run(){
		$this->Render('pagetest');
	}
	function test_ajax_data(){
		$name = $this->input->post('name');
		if($this->input->post('p')){
			$p=$this->input->post('p');// 当前页码数 默认第1页
		}else{
			$p=1;
		}
		$ppc=3;// 每页显示多少条
		$start=($p-1)*$ppc;  //第几条开始查询
		$arrRet=array();
		$data = $this->TestModel->user_page_data($start,$ppc,$name);
		$count = $this->TestModel->uesr_page_data_count($name);
		$arrRet['data']=$data;//数据
		$arrRet['p']=$p;//当前页
		$arrRet['ppc']=$ppc;	//每页显示数
		$arrRet['all']=$count;//总条数
		$arrRet['entries']=ceil($count/$ppc);//总页数
		echo json_encode($arrRet);
	}
	function hehe(){}
	function haha(){}
	function select2_type(){
		$q = $this->input->get('q');
		$data = $this->TestModel->select2_type($q);
		// var_dump($data);
		foreach ($data as $val){
			$result[]=array('id'=>$val['id'],'text'=>$val['name']);
		}
		echo json_encode($result);
	}
	function select2test(){
		$this->Render('select2test');
	}
	function from_sub(){
		$name = $this->input->post('select2');
		echo $name;
	}
	function upload_load(){
		$this->Render('upload');
	}
	function upload(){
		$files = $_FILES['file'];
		$this->TestModel->upload($files);
	}
	function datatable(){
		$this->Render('datatable');
	}
	//datatable表格
	function get_datatable(){
		$get   = $this->input->get();
		$info  = array();
		$where = array(
			"or"=>array("id","name"),
			);
		$select = array(
			"id",
			'name',
			);
		$order = array(
			"id",	//相当于占位，为了保证序号列设置为可排序而发生的错误，如不设置则排序错乱，设置为表里不存在字段则取不到相应数据
			"id",
			'name',
			);
		$a = new DataTable($get, array("select" => $select, "sum" => "id", "table" => 'user', "order" => $order, "where" => $where),'');
		// var_dump($a->output());
		echo json_encode($a->output());
	}
	//icheck
	function icheck(){
		$this->Render('icheck');
	}

	public function test(){
		echo $this->getThemesUrl();
	}

	public function getThemesUrl(){
		return HTTP_ROOT_PATH.'/'.VIEW_THEMES_PATH_NAME.'/'.$this->getThemes();
	}
}