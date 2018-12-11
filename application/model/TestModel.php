<?php
class TestModel extends Model{
	function __construct($controller, $param=array()){
		parent::__construct($controller, $param);
		$this->db = GetDb();
	}
	function user_page_data($start,$ppc,$name){
		// $res = $this->db->Query("select * from user order by id DESC limit ".$start.",".$ppc);
		// $res = is_array($res)?$res:array();
		// return $res;
		$sql = "select * from user where (name like '%".$name."%' OR id like '%".$name."%') order by id DESC limit ?,?";
		$query = $this->db->GetAll($sql,array($start,$ppc));
		return $query;
	}
	function uesr_page_data_count($name){
		// return $this->db->Query("select count('id') AS count from user");
		$sql = "select * from user where (name like '%".$name."%' OR id like '%".$name."%')";
		$query = $this->db->GetAll($sql);
		return count($query);
	}
	function select2_type($q){
		$res = $this->db->Query("select * from user where name like '%".$q."%'");
		// $res = $this->db->Qeury("select * from user where name like ?", array('%'.$q.'%'));
		return $res;
	}
	function upload($files){
		var_dump($files);
	}
	
}