<?php include("config.php") ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Untitled Document</title>

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
		#mainSlider .slider--item, #mainSlider .slick-track{
			height: 100%!important;
		}
	}
	</style>
	<style>
		#preLoader{
			position: fixed;
			width: 100vw;
			height: 100vh;
			background: black;
			top: 0;
			left: 0;
			z-index: 999;
			display: flex
		}
		#preLoader svg{
			width: 100px;
  		 	height: 100px;
    		margin: auto;
		}
		#preLoader svg path{
			fill: #fff;
		}
	</style>
</head>
<body>
<div id="preLoader">
	<svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
 <path fill="#fff" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="2s" 
         from="0 50 50"
         to="360 50 50" 
         repeatCount="indefinite" />
  </path>
 <path fill="#fff" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
  c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="1s" 
         from="0 50 50"
         to="-360 50 50" 
         repeatCount="indefinite" />
  </path>
 <path fill="#fff" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
  L82,35.7z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="2s" 
         from="0 50 50"
         to="360 50 50" 
         repeatCount="indefinite" />
  </path>
</svg>
</div>
<?php include ('menu.php'); ?>
<div id="main">
	<?php include ('mainSlider.php'); ?>
	<?php include ('game.php'); ?>
</div>
<div id="popup-slot" style="display:none">
	<div class="content"></div>
	<img onclick="close()"  class="close-game" src="assets/img/close.svg">
</div>
<link rel="stylesheet" href="assets/css/foundationFLEX.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
<link rel="stylesheet" href="assets/css/sliderSlickGsap.css">
<script src="assets/js/require.js"></script>
<?php include('requireConfig.php'); ?>
</body>
</html>
