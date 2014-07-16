<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<link rel="stylesheet" href="css/animate.css" />



 <script src="js/jquery.fittext.js"></script>
 <script src="js/jquery.lettering.js"></script>
 <script src="js/jquery.textillate.js"></script>
 <script language="JavaScript" type="text/javascript" >
 $(document).ready(function(){

  $('.tlt').textillate({
   in: {
   callback: function () {
    $("#tr1 span").fadeIn(1500,function(){
      $("#tr2 span").fadeIn(1500,function(){
      	$("#tr3 span").fadeIn(1500,function(){


      	});
      });
    });
   }
   }
  });





  $('#myTab a').click(function (e) {
   e.preventDefault()
   $(this).tab('show')
  })

  $(".tab-content b").tooltip();
  $('.collapse').collapse();



 });

 </script>

	<style type="text/css">
      td span{
      	display:none;
      	font-size:110%;
      	float:left;
      	padding:5px 0;
      }


      #main{
      	margin:auto auto;text-align:center;width:70%;border:1px solid black;min-height:1000px
      }
      .sTd{
      	width:80px

      }

      .bigTd{
      	width:22%
      }

      .title{background-color:#EEE;padding:5px;font-size:130%;font-weight:bold; }

      .tab-pane div{text-align:left;padding:10px}

	</style>
</head>
<body>
 <div id="main" style="background-color:#FFFFF9">
  <h1 class="tlt" data-in-effect="rollIn">簡&nbsp;&nbsp;歷</h1>

  <div id="title1" class="title">基本資訊</div>

  <table style="margin:2% 2%;table-layout:fixed" >
    <tr id="tr1">
      <td class="sTd"> <span >姓名：</span> </td><td  class="bigTd"> <span>梁家榮</span>  </td>
      <td class="sTd">  <span >年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;齡：</span>   </td>  <td class="bigTd"><span>23</span></td>
      <td class="sTd"><span >身份證：</span></td><td  class="bigTd"><span>澳門居民身份證</span></td>
    </tr>
    <tr id="tr2">
       <td class="sTd"> <span >學歷：</span> </td><td  class="bigTd"> <span>本科</span>  </td>
       <td class="sTd">  <span >畢業院校：</span>   </td>  <td class="bigTd"><span>華南理工大學</span></td>
       <td class="sTd"><span>專&nbsp;&nbsp;&nbsp;&nbsp;業：</span></td><td  class="bigTd"><span>計算機科學工程</span></td>
    </tr>
    <tr id="tr3">
       <td class="sTd"> <span >電話：</span> </td><td  class="bigTd"> <span>63616425</span>  </td>
       <td class="sTd"> <span >email：</span>   </td>  <td class="bigTd"><span>463911468@qq.com</span></td>
       <td class="sTd"> </span></td><td  class="bigTd"><span> </span></td>
    </tr>
  </table>

   <div id="title2" class="title">技能</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">前端技能</a></li>
  <li><a href="#profile" role="tab" data-toggle="tab">後台技能</a></li>
  <li><a href="#messages" role="tab" data-toggle="tab">數據庫技能</a></li>
  <li><a href="#settings" role="tab" data-toggle="tab">其它技能</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content" style="margin-bottom:20px">
  <div class="tab-pane active" id="home">
  <div>
  <span> 熟悉
    <b  data-toggle="tooltip" data-placement="left" title="製作網頁的基本技術，能熟悉的使用，并對HTML5也有所了解"> HTML </b>,
    <b  data-toggle="tooltip" data-placement="left" title="個人喜歡jquery框架代替js，因其語法簡單，插件豐富"> JavaScript/JQUERY </b>,
    <b  data-toggle="tooltip" data-placement="left" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> CSS </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> Ajax </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解">Bootstrap</b>
  </span>
  </div>
  <div>
  <span>
    掌握開發網頁的技術，并多次自我或參與項目開發網頁。
  </span>
  </div>
  </div>
  <div class="tab-pane" id="profile">SPRING,HIBERNATE</div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>


   <div id="title3" class="title">工作經歷</div>



<div class="panel-group" id="accordion" style="text-align:left">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                 廣州華南資訊有限公司 --- JAVA程序員
        <span style="float:right">2013-06~2013-09</span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          埃森哲廣州分公司---JAVA程序員
        <span style="float:right">2013-09~2013-12</span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse  in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          澳門松昇科技公司---外派澳門理工學院資訊部程序員
       <span style="float:right">2014-03~現今</span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse  in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>


 <div id="title4" class="title">獲獎情況</div>






 </div>


</body>
</html>