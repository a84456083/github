<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/style.css" media="screen" />


 <script src="js/jquery.fittext.js"></script>
 <script src="js/jquery.lettering.js"></script>
 <script src="js/jquery.textillate.js"></script>
 <script src="js/jquery.timelinr-0.9.54.js"></script>
 <script language="JavaScript" type="text/javascript" >
 $(document).ready(function(){
  $().timelinr({
	  arrowKeys: 'true'
  })

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

      span{
      	font-size:110%;
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
  <div class="tab-pane" id="profile">
<div>
  <span> 熟悉
    <b  data-toggle="tooltip" data-placement="left" title="製作網頁的基本技術，能熟悉的使用，并對HTML5也有所了解"> java/j2ee </b>,
    <b  data-toggle="tooltip" data-placement="left" title="個人喜歡jquery框架代替js，因其語法簡單，插件豐富"> spring/spring mvc/struts/hibernate/ibatis </b>,
    <b  data-toggle="tooltip" data-placement="left" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> php/CI框架 </b>,
       了解
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> C++ </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解">SOA</b>
  </span>
  </div>
  <div>
  <span>
    掌握java開發系統的後台技術，能完整的開發一個系統和掌握php開發網站和系統的基本方法
  </span>
  </div>
  </div>
  <div class="tab-pane" id="messages">
  <div>
  <span> 熟悉
    <b  data-toggle="tooltip" data-placement="left" title="製作網頁的基本技術，能熟悉的使用，并對HTML5也有所了解"> mysql </b>,
    <b  data-toggle="tooltip" data-placement="left" title="個人喜歡jquery框架代替js，因其語法簡單，插件豐富"> oracle</b>,
    <b  data-toggle="tooltip" data-placement="left" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> ms sql </b>,
       了解
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> DB2 </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解">Mongodb</b>
  </span>
  </div>
  <div>
  <span>
    能熟練編寫常用的sql，對各數據庫也有使用經驗，對PL/SQL也有基礎的了解。
  </span>
  </div>
  </div>
  <div class="tab-pane" id="settings">
   <div>
  <span> 能熟練使用
    <b  data-toggle="tooltip" data-placement="left" title="製作網頁的基本技術，能熟悉的使用，并對HTML5也有所了解"> tomcat/weblogic </b>,
       了解
    <b  data-toggle="tooltip" data-placement="left" title="個人喜歡jquery框架代替js，因其語法簡單，插件豐富">svn/git</b>,
    <b  data-toggle="tooltip" data-placement="left" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> photoshop </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解"> AE </b>,
    <b  data-toggle="tooltip" data-placement="right" title="CSS美化頁面的重要技術，CSS3動畫技術也有所了解">MS office</b>
  </span>
  </div>
  <div>
  <span>
    因大學參加多次比賽，需要製作視頻和圖片，所以對AE和PS都有基本的使用。
  </span>
  </div>
  </div>
</div>


   <div id="title3" class="title">工作經歷（共一年）</div>



<div class="panel-group" id="accordion" style="text-align:left">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                 廣州華南資訊有限公司(實習) --- JAVA程序員
        <span style="float:right">2013-06~2013-09</span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body"><span>
        在公司主要擔任開發和測試系統，主要擔任開發蔬菜管理系統部分功能，和部分前端動態效果展示，該系統使用GWT,SSH，mysql等技術搭建。在該公司還對PHP語言開發的開源系統Teamtoy進行二次開發增加考勤功能。
      </span></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          埃森哲廣州分公司(實習)---JAVA程序員
        <span style="float:right">2013-09~2013-12</span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse  in">
      <div class="panel-body"><span>
         埃森哲是全球500強公司之一，自己也很榮幸很去到該公司實習，在該公司主要負責為廣東南方電網開發PMO管理系統，包括部分功能的後台功能和前端功能，該系統採用ssh框架，Oracle數據庫等技術搭建,並且有接觸關於SOA服務的接口開發。在公司表現良好，深得同事和上司稱讚。
      </span></div>
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
      <div class="panel-body"><span>
        外派到澳門理工學院，曾工作關於開源排課系統二次開發，研究Jasperreport，和輔助用友軟件在理工搭建和部署NC管理系統。在搭建NC系統時候，主要幫忙對數據庫數據進行導入和修正，和開發觸發器和排查系統問題等。
     </span> </div>
    </div>
  </div>
</div>


 <div id="title4" class="title">獲獎情況</div>



<div id="timeline">
		<ul id="dates">
			<li><a href="#1900">1900</a></li>
			<li><a href="#1930">1930</a></li>
			<li><a href="#1944">1944</a></li>
			<li><a href="#1950">1950</a></li>
			<li><a href="#1971">1971</a></li>
			<li><a href="#1977">1977</a></li>
			<li><a href="#1989">1989</a></li>
			<li><a href="#1999">1999</a></li>
			<li><a href="#2001">2001</a></li>
			<li><a href="#2011">2011</a></li>
		</ul>
		<ul id="issues">
			<li id="1900">
				<img src="images/1.png" width="256" height="256" />
				<h1>1900</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1930">
				<img src="images/2.png" width="256" height="256" />
				<h1>1930</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1944">
				<img src="images/3.png" width="256" height="256" />
				<h1>1944</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1950">
				<img src="images/4.png" width="256" height="256" />
				<h1>1950</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1971">
				<img src="images/5.png" width="256" height="256" />
				<h1>1971</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1977">
				<img src="images/6.png" width="256" height="256" />
				<h1>1977</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1989">
				<img src="images/7.png" width="256" height="256" />
				<h1>1989</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="1999">
				<img src="images/8.png" width="256" height="256" />
				<h1>1999</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="2001">
				<img src="images/9.png" width="256" height="256" />
				<h1>2001</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
			<li id="2011">
				<img src="images/10.png" width="256" height="256" />
				<h1>2011</h1>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
			</li>
		</ul>
		<div id="grad_left"></div>
		<div id="grad_right"></div>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
	</div>












 </div>


</body>
</html>