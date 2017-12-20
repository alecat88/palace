// JavaScript Document
define(['jquery'],function(){
	

function close(){
	console.log('clicked');
		alert('close');
	}

var other = $('#other');
$(document).ready(function(){
	//fullscreen
	windowWidth= window.innerWidth;
	windowHeight= window.innerHeight;
	
	
	//Insert slots on the page
	for (var i = 0; i < slots.length; i++){
		
		
		switch(i){
			case 0:
				var slot  = '<div class="slot columns best1" iframe="'+ slots[i].iframe +'" bg="'+ slots[i].bg +'"><img alt="Vip Palace - '+ slots[i].name +'" 	src="'+ slots[i].img +'"></div>';
				$('#best .best1').replaceWith(slot);
				break;
			case 1:
				var slot  = '<div class="slot columns best2" iframe="'+ slots[i].iframe +'" bg="'+ slots[i].bg +'"><img alt="Vip Palace - '+ slots[i].name +'" 	src="'+ slots[i].img +'"></div>';
				$('#best .best2').replaceWith(slot);
				break;
				break;
			case 2:
				var slot  = '<div class="slot columns best3" iframe="'+ slots[i].iframe +'" bg="'+ slots[i].bg +'"><img alt="Vip Palace - '+ slots[i].name +'" 	src="'+ slots[i].img +'"></div>';
				$('#best .best3').replaceWith(slot);
				break;
				break;
			case 3:
				var slot  = '<div class="slot columns best4" iframe="'+ slots[i].iframe +'" bg="'+ slots[i].bg +'"><img alt="Vip Palace - '+ slots[i].name +'" 	src="'+ slots[i].img +'"></div>';
				$('#best .best4').replaceWith(slot);
				break;
				break;
			default:
				var slot  = '<div class="slot small-4 large-3 columns" iframe="'+ slots[i].iframe +'" bg="'+ slots[i].bg +'"><img alt="Vip Palace - '+ slots[i].name +'" 	src="'+ slots[i].img +'"></div>';
				$('#other').append(slot);
				
		}
		
	}
	
	//Click on iframe
	$('.slot').on('click',function(){
		if (!$('#main').hasClass('active')){
			var iframe = '<iframe src="'+ $(this).attr('iframe') +'">';
			var bg = $(this).attr('bg');	
			console.log(bg);
			$('#popup-slot .content').append(iframe);
			$('#popup-slot').css('background-image',bg);
			$('#popup-slot').show();
			$('#main').addClass('active');
			//$('#main').css('height',(windowHeight - $('#menu').css('height').replace('px','')) + 'px');
		}
	});
	
	function closePopupSlot(){
		$('#popup-slot').hide();
		$('#popup-slot .content').html('');
		$('#main').removeClass('active');
		//$('#main').css('height','auto');
	}
	
	$('.close-game').on('click',function(){
		closePopupSlot();
	});
	
	
});
});


