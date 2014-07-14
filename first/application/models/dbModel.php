<?php
/*
 * Created on Jun 25, 2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class DbModel extends CI_Model{

   public  function  getBigObject(){
   	$this->load->database();
   	$query =$this->db->query("select * from bigobject a,photo b where a.id = b.pk_bigobject and b.number=1 order by a.number")->result_array();
    return $query;
   }


    public function forward($id){
    	$this->load->database();
       	$number =$this->db->query("select number from bigobject where id=?",array($id))->result_array();
       	$this->db->update('bigobject', array('number'=>$number[0]['number']), array('number'=>($number[0]['number']+1)));
        $this->db->update('bigobject', array('number'=>$number[0]['number']+1), "id = $id");
    }


    public function back($id){
    	$this->load->database();
       	$number =$this->db->query("select number from bigobject where id=?",array($id))->result_array();
       	$this->db->update('bigobject', array('number'=>$number[0]['number']), array('number'=>($number[0]['number']-1)));
        $this->db->update('bigobject', array('number'=>$number[0]['number']-1), "id = $id");
    }

    public function getPhoto($id){
    	$this->load->database();
       	$data['photo']=$this->db->query("select * from photo where pk_bigobject=? order by number",array($id))->result_array();
       	$data['content'] =$this->db->query("select content from bigobject where id=?",array($id))->result_array();
       	return $data;
    }

    public function saveContent($id,$content){
    	$this->load->database();
        $this->db->update('bigobject', array('content'=>$content), array('id'=>$id));
    }


 }



?>
