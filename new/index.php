<?php include("config.php") ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/css/foundationFLEX.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
<link rel="stylesheet" href="assets/css/sliderSlickGsap.css">
<style>
	#mainSlider{
		max-width: none;
	}
	#mainSlider .slick-list{
		height: 500px;
	}
	#mainSlider .slick-slider, #slotSlider, #slotSlider .slick-slider{
		height: auto;
	}
	
	#other2{
		    max-width: 90%!important;
	}
	#other2 .slot {
    padding: .9375rem;
}
	#slotSlider .slider--item{
		height: auto
	}
	#main.active{
		/*display:none*/
	}
	@media all and (max-width: 1024px){
		.menu, #main{
			width: 100%!important
		}
		body{
			    background-image: none;
		}
		#menu .sticky.is-stuck{
			left:0%
		}
	}
	
	@media all and (max-width: 1024px) and (orientation: portrait){
		#mainSlider .slick-list {
    		height: 50vw;
		}
	}
	</style>
</head>
<body>

<?php include ('menu.php'); ?>
<div id="main">
	<?php include ('mainSlider.php'); ?>
	<?php include ('game.php'); ?>
</div>
<div id="popup-slot" style="display:none">
	<div class="content"></div>
	<img onclick="close()"  class="close-game" src="assets/img/close.svg">
</div>
<script src="assets/js/require.js"></script>
<?php include('requireConfig.php'); ?>
</body>
</html>
