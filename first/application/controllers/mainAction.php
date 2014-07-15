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
         	   $this->load->view('head');
               $this->load->view('travelMain',$data);

         }

         public function contain(){
         	   $data=array();
         	   $data['photo']=$this->dbModel->getPhoto($_GET['id']);
         	   $data['id']=$_GET['id'];
         	   $this->load->view('head');
               $this->load->view('contain',$data);

         }

         public function forward(){
         	$this->dbModel->forward($_GET['id']);
            redirect(URLPATH.'mainAction');
         }

         public function back(){
         	$this->dbModel->back($_GET['id']);
            redirect(URLPATH.'mainAction');
         }

         public function htmlContent(){
           $this->dbModel->saveContent($_POST['id'],$_POST['content']);
           $data['photo']=$this->dbModel->getPhoto($_POST['id']);
           redirect(URLPATH.'mainAction/contain?id='.$_POST['id']);

         }


         public function uploadImg(){


         	$uid=md5(time() . mt_rand(1,1000000));
         	move_uploaded_file( $_FILES['file']['tmp_name'],'images/private/'.$uid.'.jpg');
         	$filename = 'images/private/'.$uid.'.jpg';
            // 获取图片的宽高
            list($width, $height) = getimagesize($filename);
            $percent = 300 / $width ;
            $newwidth = $width * $percent;
            $newheight = $height * $percent;
            // 创建一个图片。接收参数分别为宽高，返回生成的资源句柄
            $thumb = imagecreatetruecolor($newwidth, $newheight);
            //获取源文件资源句柄。接收参数为图片路径，返回句柄
            $source = imagecreatefromjpeg($filename);
            // 将源文件剪切全部域并缩小放到目标图片上。前两个为资源句柄
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,'images/private/small/'.$uid.'.jpg');

            $this->dbModel->savePhoto($_POST['id'],'images/private/'.$uid.'.jpg','images/private/'.$uid.'.jpg',$_POST['photoName']);

         }




  }

?>
