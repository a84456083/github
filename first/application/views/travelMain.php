<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url();?>" />
	<meta charset="utf-8">
	<title>我的旅遊世界</title>

	<style type="text/css">
	.big-td{width:310px}
    .big-td img{width:300px}
    .center{margin:1% auto;text-align:center;}
    .min-td img{height:100px ; width:150px}
    .min-td{  width:160px}
    .mask div {
            filter: alpha(opacity=60);
            z-index: 1002; left: 0px;
            opacity:0.6; -moz-opacity:0.6;
     }
	</style>
    <link rel="stylesheet" href="css/basic.css">

	<script language="JavaScript" type="text/javascript">



	</script>
</head>
<body>



<h1>我的旅遊世界</h1>
<div >
  <table class="center"  >
  <?php
  $rowNum =count($bigObject)/3;
  $colum = count($bigObject)%3;
  for($i=0;$i<$rowNum;$i++){
  ?>
    <tr>
    <?php
    if($i+1>=$rowNum){
    	$columNum=$colum;
    }
    else{
    	$columNum=3;
    }
    for($j=0;$j<3;$j++){
     if($i%2==0)
      $number=	$i*3+$j ;
     else
      $number=  $i*3+ (2-$j);
     if($number-$i*3<$columNum){
    ?>
      <td class="big-td">
      <div class="row
      <?php if($bigObject[$number]['end']==0) echo 'mask';?>
      ">
       <div class="col-lg-span">
         <div class="thumbnail">
          <img src="images/t_1_1.jpg" alt="...">
           <div class="caption">
             <h3><?=$bigObject[$number]['object_name']?></h3>
              <p>
              <?php if( !($i+1>=$rowNum&&$number==count($bigObject)-1) ){ ?>
              <a href="mainAction/forward?id=<?=$bigObject[$number]['id']?>" class="btn-sm btn-primary" role="button">前进</a>
              <?php } ?>
              <?php if( !($i==0&&$j==0) ){ ?>
              <a href="#" class="btn-sm btn-default" role="button">后退</a>
              <?php } ?>
              <a href="#" class="btn-sm btn-warning" role="button">修改</a>
               <?php if($bigObject[$number]['end']==0){ ?>
               <a href="#" class="btn-sm btn-info" role="button">激活</a>
               <?php } ?>
              </p>
           </div>
         </div>
      </div>
     </div>
      </td>
    <?php
    }
    else{
    ?>
      <td class="big-td">
      <div class="row">
       <div class="col-lg-span">
         <div class="thumbnail">
          <img src="images/quest.png" alt="...">
         </div>
      </div>
     </div>
      </td>
    <?php
    }
    if($j!=2){
    ?>
      <td class="min-td"> <img  src="images/arrowhead<?=$i%2?>.png" /> </td>
   <?php
    }
    }
    if($i%2==0){
    ?>
    <tr>
    <td></td><td></td><td></td><td></td> <td class="min-td"> <img  src="images/arrowhead2.png" /> </td>
    </tr>
   <?php
     }
     else{
    ?>
    <tr>
    <td class="min-td"> <img  src="images/arrowhead2.png" /> </td> <td></td><td></td><td></td><td></td>
    </tr>
   <?php
     }
   ?>
    </tr>
   <?php
     }
   ?>
  </table>
</div>

</body>
</html>