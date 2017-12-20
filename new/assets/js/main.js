// JavaScript Document
require.config({
		baseUrl: "assets/js",
                paths: {
                    jquery: 'jquery',
					slots: [
						'https://vippalace.it/new/slots',
						'slot'
					],
					script: 'script',
					foundation: 'foundation.min',
					foundationEnabler: 'foundationEnabler',
					slick: 'https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min',
					TweenMax: 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min',
					sliderSlickGsap: 'sliderSlickGsap'
                },
		shim: {
        	"foundation": ["jquery"],
    },
            });