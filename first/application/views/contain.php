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

     <script language="JavaScript" type="text/javascript" >
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
});

	</script>
</head>
<body style="background-color:#BBB">

		<div class="container">

			<div class="image-row" style="width:50%;display:inline-block;position:relative;" >
				<div class="image-set"  >
				 <ul id="imgsplay">
					<li><a class="example-image-link" href="images/demopage/image-3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img width="180" class="example-image img-rounded shrink" src="images/demopage/thumb-3.jpg" alt=""/></a></li>
					<li><a class="example-image-link" href="images/demopage/image-4.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img width="180" class="example-image img-rounded shrink" src="images/demopage/thumb-4.jpg" alt="" /></a></li>
					<li><a class="example-image-link" href="images/demopage/image-5.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img width="180" class="example-image img-rounded shrink" src="images/demopage/thumb-5.jpg" alt="" /></a></li>
					<li><a class="example-image-link" href="images/demopage/image-6.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img width="180" class="example-image img-rounded shrink" src="images/demopage/thumb-6.jpg" alt="" /></a></li>
				</ul>
				</div>
			</div>


	 <div style="width:45%;float:right;display:inline-block" >
    <textarea style="width:99%;height:800px" class="uEditorCustom" name="textarea"><strong><em>uEditor</em> rocks !</strong></textarea>
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


</body>
</html>