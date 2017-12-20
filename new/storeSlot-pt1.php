<?php 
 $img =  $_GET['img']; 
 $url =  $_GET['url'];
 ?>
 <html><head><script>
	 var url = '<?php echo $url ?>';
	 var img = '<?php echo $img ?>';
	 if (url != null && url != '' && img != null && img != '' ){
	 setTimeout(function(){
		 window.location = url + '?img=' + img;
	 },5000)};</script></head><body></body></html>
