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
   	$query =$this->db->query("select * from bigobject order by number")->result_array();
    return $query;
   }


    public function forward($id){
    	$this->load->database();
       	$number =$this->db->query("select number from bigobject where id=?",array($id))->result_array();
       	$this->db->update('bigobject', array('number'=>$number[0]['number']), array('number'=>($number[0]['number']+1)));
        $this->db->update('bigobject', array('number'=>$number[0]['number']+1), "id = $id");
    }


 }



?>
