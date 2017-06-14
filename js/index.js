$(document).ready(function() {
	$(".button-collapse").sideNav();
	$("#references").owlCarousel({
      autoPlay: 3000,
      items : 6,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [979,4]
    });
    $('.slider').slider({
    	full_width: true,
    	transition: 1000,
    	interval: 2000});
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(46.445427,3.325194),
            zoom: 7,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
	{
		"featureType": "landscape",
		"stylers": [
			{
				"hue": "#FFBB00"
			},
			{
				"saturation": 43.400000000000006
			},
			{
				"lightness": 37.599999999999994
			},
			{
				"gamma": 1
			}
		]
	},
	{
		"featureType": "road.highway",
		"stylers": [
			{
				"hue": "#FFC200"
			},
			{
				"saturation": -61.8
			},
			{
				"lightness": 45.599999999999994
			},
			{
				"gamma": 1
			}
		]
	},
	{
		"featureType": "road.arterial",
		"stylers": [
			{
				"hue": "#FF0300"
			},
			{
				"saturation": -100
			},
			{
				"lightness": 51.19999999999999
			},
			{
				"gamma": 1
			}
		]
	},
	{
		"featureType": "road.local",
		"stylers": [
			{
				"hue": "#FF0300"
			},
			{
				"saturation": -100
			},
			{
				"lightness": 52
			},
			{
				"gamma": 1
			}
		]
	},
	{
		"featureType": "water",
		"stylers": [
			{
				"hue": "#0078FF"
			},
			{
				"saturation": -13.200000000000003
			},
			{
				"lightness": 2.4000000000000057
			},
			{
				"gamma": 1
			}
		]
	},
	{
		"featureType": "poi",
		"stylers": [
			{
				"hue": "#00FF6A"
			},
			{
				"saturation": -1.0989010989011234
			},
			{
				"lightness": 11.200000000000017
			},
			{
				"gamma": 1
			}
		]
	}
],
        }
        var mapElement = document.getElementById('Sodefemar');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Sodefemar', 'undefined', 'undefined', 'undefined', 'undefined', 46.445427,  3.325194, 'http://img15.hostingpics.net/pics/598890691.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}
});