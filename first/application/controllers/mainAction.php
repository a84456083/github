<?php
/*
 * Created on Jun 25, 2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

  class MainAction extends CI_Controller{
         public function index(){
         	   $data=array();
         	   $this->load->helper('url');
         	   $this->load->model("dbModel");
               $data['bigObject']=$this->dbModel->getBigObject();
         	   $this->load->view('head',$data);
               $this->load->view('travelMain',$data);

         }


         public function forward(){
         	$this->load->helper('url');
         	$this->load->model("dbModel");
         	$this->dbModel->forward($_GET['id']);
            $data['bigObject']=$this->dbModel->getBigObject();
         	$this->load->view('head',$data);
            $this->load->view('travelMain',$data);


         }
  }

?>
