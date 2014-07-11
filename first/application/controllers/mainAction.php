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
               $data['bigObject']=$this->dbModel->getBigObject();
         	   $this->load->view('head',$data);
               $this->load->view('travelMain',$data);

         }

         public function contain(){
         	   $data=array();
         	   $this->load->view('head',$data);
               $this->load->view('contain',$data);

         }

         public function forward(){
         	$this->dbModel->forward($_GET['id']);
            redirect('mainAction');
         }

         public function back(){
         	$this->dbModel->back($_GET['id']);
            redirect('mainAction');
         }

  }

?>
