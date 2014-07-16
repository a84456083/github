<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url();?>" />
	<meta charset="utf-8">
	<title>我的旅遊世界</title>
	<style type="text/css">
     li{list-style-type:none;}
	</style>
    <link rel="stylesheet" href="css/basic.css">

	<script src="js/lightbox.js"></script>
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/hover.css">
    <script type="text/javascript" src="js/jquery.wookmark.js"></script>

    <script type="text/javascript" src="js/jHtmlArea-0.8.min.js">

    </script>
    <link rel="stylesheet" href="css/jHtmlArea.css" type="text/css"   />
     <script language="JavaScript" type="text/javascript" >
        function ajaxFileUpload() {
            $.ajaxFileUpload
        (
            {
                url: 'handler/UploadImageHandler.ashx?userid=1&name=abc',
                secureuri: false,
                fileElementId: 'fileToUpload',
                dataType: 'html',
                beforeSend: function() {

                },
                complete: function() {

                },
                success: function(data, status) {
                    if (typeof (data.error) != 'undefined') {
                        if (data.error != '') {
                            alert(data.error);
                        } else {
                            alert(data.msg);
                        }
                    }
                },
                error: function(data, status, e) {
                    alert(e);
                }
            }
        )
            return false;
        }

  $(document).ready(function() {


        var $handler = $('#imgsplay li');

        $handler.wookmark({
            autoResize: true,
            container: $('.image-row'),
            offset: 0,
            outerOffset:0,
            itemWidth: 180,
            align :'left'
        });



	$("#edit").click(function() {
		$("#showContent").css("display","none");
		$(this).css("display","none");
        $(".content").htmlarea({
        toolbar: [
        ["bold", "italic", "underline"],
        ["h1", "h2", "h3", "h4", "h5", "h6"],
        ["link", "unlink", "image"]
        ]
        });
	});

});

	</script>

	<style type="text/css">
      .uEditor{
      	width:99%;float:right;display:inline-block;height:800px
      }
      .mycontainer{padding:2px;margin-left:4%}

      .h1,.h2,.h3,.h4,.h5,.h6{
      	margin: 0 0 !important
      }

    </style>



</head>
<body style="background-color:#BBB">


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">上传图片</h4>
      </div>

      <div class="modal-body">



<form id='uploadform' action="mainAction/uploadImg" method="post" enctype='multipart/form-data' target="upload">
     <p>名字/简述</p>
     <input type="text" name="photoName" />
     <input type="file" name="file" />
     <input type="hidden" name="id"  value="<?=$id?>"/>
     <input type="submit" class="btn btn-primary" value="確定" />
 </form>
<iframe style="display:none" name="upload">

</iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>


      </div>

    </div>
  </div>
</div>








		<div style="padding:5px;margin-left:4%">
          <button class="btn" onClick="javascript:document.location.reload()">刷新</button>
          <button class="btn" data-toggle="modal" data-target="#myModal">上传图片</button>
        </div>
		<div class="mycontainer">
			<div class="image-row" style="width:50%;display:inline-block;position:relative;" >
				<div class="image-set"  >
				 <ul id="imgsplay">
				    <?php
				    for($i=0;$i<count($photo['photo']);$i++){
				    ?>
					<li><a class="example-image-link" href="<?=$photo['photo'][$i]['path']?>" data-lightbox="example-set" data-title="<?=$photo['photo'][$i]['photo_name']?>"><img width="180" class="example-image shrink" src="<?=$photo['photo'][$i]['smallpath']?>" alt=""/></a></li>
				    <?php
				    }
				    ?>
				</ul>
				</div>
			</div>


	      <div style="width:45%;float:left;display:inline-block" >
	        <form action="mainAction/htmlContent" method="post">
	          <input name="id" value="<?=$id?>" type="hidden" />
	          <div id="showContent" style="width:99%;height:700px;background-color:#FFF"><?=$photo['content'][0]['content']?></div>
              <textarea id="content" style="display:none;width:45%;height:700px;" class="content" name="content" readonly><?=$photo['content'][0]['content']?></textarea>
              <a id="edit" class="btn btn-primary">编辑</a>
              <button id="submit" class="btn btn-primary">确定</button>
            <form>

           </div>

      </div>








	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>




<!-- Modal -->





</body>
</html>