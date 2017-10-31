/*jslint browser: true*/
/* global $, jQuery, alert*/
/*jshint strict: true */
jQuery.browser = {};

$(document).ready(function(){
	
	"use strict";
	
			
	var map = new GMaps({
		el: '#map2',
		lat: 37.321927,
		lng: 127.993889,
		zoom: 0,
		
		
	});
	
	//		map.addMarker({
	//			lat: 37.4999072,
	//			lng: 127.0373932,
	//			title: 'WELCOME! COMPANY!',
	//			infoWindow: {content: '<a href="http://www.google.com">google</a>'}
	//		});
	//	

	map.addMarker({
		lat: 37.321927,
		lng: 127.993889,
		title: '한국관광공사',
//				click: function(e) {
//					alert('You clicked in this marker');
//				},
		infoWindow: {
			content: "<span><img src='./images/logo.jpg'></span>"
		}
	});
			

	
});