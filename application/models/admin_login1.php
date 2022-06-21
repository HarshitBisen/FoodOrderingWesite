<?php
class admin_login1 extends CI_Model{
	public function login($un,$pw)
	{
		$q=$this->db->select(['un','pw'])->from('admin')->where('un',$un)->where('pw',$pw)->get();
		return $q->row();
	}
}

?>