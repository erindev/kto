/*jslint browser: true*/
/* global $, jQuery, alert*/
/*jshint strict: true */
jQuery.browser = {};

$(document).ready(function(){
	"use strict";
	
	

	var map = new GMaps({
		el: '#map1',
		lat: 37.4999072,
		lng: 127.0373932,
		zoom: 0,
		//click: function(e) {alert("google");}
	});

		
	GMaps.geolocate({
		success: function(position) {
			map.setCenter(position.coords.latitude, position.coords.longitude);
		},
		error: function(error) {
			alert('Geolocation failed: ' + error.message);
		},
		not_supported: function() {
			alert("Your browser does not support geolocation");
		},
		always: function() {
			alert("현재 위치 기준으로 지도를 보여드릴게요!");
		}
	});

	$('#geocoding_form').submit(function(e) {
		e.preventDefault();
		GMaps.geocode({
			address: $('#address').val().trim(),
			callback: function(results, status) {
				if (status == 'OK') {
					var latlng = results[0].geometry.location;
					map.setCenter(latlng.lat(), latlng.lng());
					map.addMarker({
						lat: latlng.lat(),
						lng: latlng.lng()
					});
				}
			}
		});
	});

	map.travelRoute({
		origin: [-12.044012922866312, -77.02470665341184],
		destination: [-12.090814532191756, -77.02271108990476],
		travelMode: 'driving',
		step: function(e) {
			$('#instructions').append('<li>' + e.instructions + '</li>');
			$('#instructions li:eq(' + e.step_number + ')').delay(450 * e.step_number).fadeIn(200, function() {
				map.drawPolyline({
					path: e.path,
					strokeColor: '#131540',
					strokeOpacity: 0.6,
					strokeWeight: 6
				});
			});
		}
	});

	map.setContextMenu({
		control: 'map',
		options: [{
			title: 'Add marker',
			name: 'add_marker',
			action: function(e) {
				this.addMarker({
					lat: e.latLng.lat(),
					lng: e.latLng.lng(),
					title: 'New marker'
				});
			}
		}, {
			title: 'Center here',
			name: 'center_here',
			action: function(e) {
				this.setCenter(e.latLng.lat(), e.latLng.lng());
			}
		}]
	});
			
			



	
		
});

