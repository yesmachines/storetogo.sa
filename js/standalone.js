	
function initializeANewMap(){
    var _args = {}; // private
    var that;
    
    var distanceUnit;
	var vehicleId;
	var isProvisioner;
    var resourcePath;
    var startLat;
    var startLng;
    var jsonRESTPartnersURL;
    var idForSearchInput;
    var idForMapsContent = "mapContent";
    var showPartners = true;
    var showCenteredOnSortimo = false;
    var openMyLocationWindowOnStartup = false;
    var checkoutSet = false;
    var selectedDistance = 50;
    var partnerData;
    var allMarkers=new Array();
    var activeMarkers = new Array();
    var infos=new Array();
    var sortimoLocationFinderMap;
    var searching = false;
    var allPartners = null;
    var initialLocation = null;
    var initialCenter = false;
    var sortimoLocationFinderMapStyle = [
    	  {
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#f5f5f5"
    		      }
    		    ]
    		  },
    		  {
    		    "elementType": "labels.icon",
    		    "stylers": [
    		      {
    		        "visibility": "off"
    		      }
    		    ]
    		  },
    		  {
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#616161"
    		      }
    		    ]
    		  },
    		  {
    		    "elementType": "labels.text.stroke",
    		    "stylers": [
    		      {
    		        "color": "#f5f5f5"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "administrative.land_parcel",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#bdbdbd"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#eeeeee"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#757575"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi.park",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#e5e5e5"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "poi.park",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#9e9e9e"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#ffffff"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.arterial",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#757575"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.highway",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#dadada"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.highway",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#616161"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "road.local",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#9e9e9e"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "transit.line",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#e5e5e5"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "transit.station",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#eeeeee"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "water",
    		    "elementType": "geometry",
    		    "stylers": [
    		      {
    		        "color": "#c9c9c9"
    		      }
    		    ]
    		  },
    		  {
    		    "featureType": "water",
    		    "elementType": "labels.text.fill",
    		    "stylers": [
    		      {
    		        "color": "#9e9e9e"
    		      }
    		    ]
    		  }
    		];


return {
    init : function(Args) {
    	that = this;
        _args = Args;
       // console.log(_args);
        
        let unitField = $('#distanceUnit');
        if(unitField) {
        	distanceUnit = unitField.val().toLowerCase();
        }
        // some other initialising
        resourcePath = _args.resourcePath;
        startLat = _args.startLat;
        startLng = _args.startLng;
        initialLocation = {
        	lat: _args.startLat,
        	lng: _args.startLng
        };
        jsonRESTPartnersURL = _args.jsonRESTPartnersURL;
        if(_args.showPartners != null && _args.showPartners !=  undefined) {
        	showPartners = _args.showPartners;
        }  
        idForSearchInput=_args.idForSearchInput
        if(_args.idForMapsContent != null && _args.idForMapsContent != undefined) {
        	idForMapsContent = _args.idForMapsContent;
        }
        if(_args.isProcessCheckout != null && _args.isProcessCheckout != undefined) {
        	checkoutSet = _args.isProcessCheckout;
        }
        
        
        showCenteredOnSortimo= _args.showCenteredOnSortimo;
        // prameter ??openMyLocationWindowOnStartup = false;
        jQuery("#"+idForSearchInput).keypress(function(event) {
        	if (event.which == 13) {
        		that.onSearch();
        	}
        });
    	vehicleId = _args.vehicleId;
    	isProvisioner = _args.isProvisioner;
        
    },
    sortimoLocationFinderInitMap: function() {
    	if (showCenteredOnSortimo) {
    		that.setCurrentLat(48.4075095);
    		that.setCurrentLng(10.6029795);
    		
    		sortimoLocationFinderCreateMap(null);
    		
    	} else if(startLat != null && startLng != null) {
    		that.setCurrentLat(startLat);
    		that.setCurrentLng(startLng);
    		
    		sortimoLocationFinderCreateMap(null);
    		
    	} else {
    		that.locateMe();
    	}
    	
    	
	},
	sortimoLocationFinderShowPartnerMap: function(lat, lng) {
		that.setCurrentLat(lat);
		that.setCurrentLng(lng);
		sortimoLocationFinderCreateMap(null);
	},
	onLocateSuccess: function() {
		that.searching = true;
		that.maxZoom = 999;
		activeMarkers = [];
		initialCenter = false;
		// remove highlights???
		sortByDistance(partnerData, that.getCurrentLat(), that.getCurrentLng());
	},
	locateMe: function () {
  		jQuery("#"+idForSearchInput).val("");
  		// reset limit to 50
		that.setSelectedDistance(50);
		that.refreshPartnerFromServer();
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				//console.log("Navigator succeded");
				that.setCurrentLat(position.coords.latitude);
				that.setCurrentLng(position.coords.longitude);
				that.onLocateSuccess();
			}, function() {
//				console.log("Navigator failed, trying Google Geolocation API");
				//googleGeolocation();
			}, {
				maximumAge : 0,
				timeout : 4000,
				enableHighAccuracy : true
			});
		} else {
//			console.log("Navigator.geolocation nicht vorhanden!");
			//googleGeolocation(that);
		}
  	},
  	onSortSuccess: function(data){
  		sortimoLocationFinderCreateMap(data);
	},
	//if a search is triggered 
	onSearch: function(){
		var searchval = jQuery("#"+idForSearchInput).val();
		//console.log("searching for :" + searchval)
		if(searchval && searchval != ''){
			// reset limit to 50
			that.setSelectedDistance(50);
			that.refreshPartnerFromServer();
			var geocoder = new google.maps.Geocoder();
			
			var currentHost = window.location.host;
			var regionShort = currentHost.replace(ACC.config.geocodeReplaceString, '');
			var region = regionShort == 'com' ? '' : regionShort;
			
			geocoder.geocode({ 'address': searchval, 'region': region }, function(results, status){
//				console.log(results);
				if ( status === google.maps.GeocoderStatus.OK){
					that.setCurrentLat(results[0].geometry.location.lat());
					that.setCurrentLng(results[0].geometry.location.lng());
					that.onLocateSuccess();
				}
				else{
//					console.log("ERROR in GeoLocation searching for: " +searchval)
				}
			});
		}
		else {
			that.searching = false;
			that.setCurrentLat(initialLocation.lat);
    		that.setCurrentLng(initialLocation.lng);
			sortimoLocationFinderCreateMap(null);
		}
	},
	setCurrentLat: function(lat) {
		startLat = lat;
	},
	setCurrentLng: function(lng) {
		startLng = lng;
	},
	getCurrentLat: function() {
		//console.log("get current lat: " + startLat);
		return startLat;
	},
	getCurrentLng: function() {
		//console.log("get current lng: " + startLng);
		return startLng;
	},
	getSelectedDistance: function() {
		return selectedDistance;
	},
	setSelectedDistance: function(newDistance) {
		selectedDistance = newDistance;
	},
	refreshPartnerFromServer: function() {
		partnerData = getPartnersFromServer();
		allPartners = partnerData;
		//console.log("partner from server: "+ partnerData.length);
	},
	showMarkerInfo: function(partnerIdx) {
		var selectedPartner = activeMarkers[partnerIdx];
		//console.log(selectedPartner);
		var marker = selectedPartner.marker;
		google.maps.event.trigger(marker, 'click');
	},
	isProcessCheckout: function() {
		//console.log("isProcessCheckout" + checkoutSet);
		return checkoutSet;
	},
	sortimoLocationFinderSetVehicleId: function(provisionerVehicleId) {
		vehicleId = provisionerVehicleId;
	},
	sortimoLocationFinderRefreshPartnerFromURL: function(refreshFromURLWithFilter) {
		jsonRESTPartnersURL = refreshFromURLWithFilter;
		//partnerData = getPartnersFromServer();
	}
	
};
      function sortimoLocationFinderCreateMap(data){
 
  		//get location
  		var pos = new google.maps.LatLng(that.getCurrentLat(), that.getCurrentLng());

  		// create map
  		var mapOptions = {
  			center : pos,
  			zoom : 13,
  			mapTypeId : google.maps.MapTypeId.ROADMAP,
  			disableDefaultUI : true,
  			scaleControl : true,
  			streetViewControl : true,
  			mapTypeControl : true,
  			styles: sortimoLocationFinderMapStyle
  		};
  		sortimoLocationFinderMap = new google.maps.Map(document.getElementById(idForMapsContent), mapOptions);

  		
  		// create marker and infoWindow at current position
  		var marker = null;
  		var content = null;
  		if (_args.sortimoIcon != null
  			&& _args.sortimoIcon==true) {
  			marker = new google.maps.Marker(
  	  				{
  	  					position : pos,
  	  					map : sortimoLocationFinderMap,
  	  					title : 'Sortimo vor Ort',
  	  					animation : google.maps.Animation.DROP,
  	  					icon : getSortimoMarkerS()
  	  				});
  					content = "Sortimo vor Ort";
  		} else {
  			marker = new google.maps.Marker(
  	  				{
  	  					position : pos,
  	  					map : sortimoLocationFinderMap,
  	  					title : 'Standort',
  	  					animation : google.maps.Animation.DROP,
  	  					icon : getLocationMarker()
  	  				});
  					content = "Ihr Standort";
  		}
  		
  		var userMarker = marker;

  		// set content of infowindow
  		if (content!=null) {
  			var infowindow = new google.maps.InfoWindow({
  	  			content : content
  	  		});	
  		}
  		
  		
  		// Add listener and make sure it closes if another marker is clicked
  		google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
  			return function() {
  				//console.log("Marker was clicked");
  				closeInfos();
  				infowindow.setContent(content);
  				infowindow.open(sortimoLocationFinderMap, marker);
  				sortimoLocationFinderMap.panTo(marker.getPosition());
  				infos[0] = infowindow;
  			};
  		})(marker, content, infowindow));
  		
  		
  		
  		// open the infowindow of current location
  		if (openMyLocationWindowOnStartup) {
  			
  			
  			
  			infowindow.open(sortimoLocationFinderMap, marker);
  			infos[0] = infowindow;
      	}
  		
  		//Extend bounds of the map by the position of the users location
  		var bounds = new google.maps.LatLngBounds();
  		bounds.extend(marker.getPosition());
  		
  		if(showPartners) {
	  		addPartnersToMap(data, bounds, userMarker);
	  	
	  		updatePartnerList(partnerData);
	  		
	  		if(partnerData.length > 0){
	  			sortimoLocationFinderMap.fitBounds(bounds);
	  		}
  		}
  		//callback Event
  		//that.mapCreated(sortimoLocationFinderMap);
  		
  		var circle;
  		
  		function handleViewChange(zoomOrDrag) {
  			if(that.searching) {
  				if(!zoomOrDrag) {
  					initialCenter = true;
  				}
  				var center = initialCenter ?
  						{ lat: sortimoLocationFinderMap.getCenter().lat(), lng: sortimoLocationFinderMap.getCenter().lng() }
  						: { lat: that.getCurrentLat(), lng: that.getCurrentLng() };
  				var factor = initialCenter ? 
  						46396.81626760487 // 60km
  						: 38689.02937309146; // 50km
  				var zoom = sortimoLocationFinderMap.getZoom();
  				var distance = factor * Math.cos(center.lat * Math.PI / 180) / Math.pow(2, zoom);
  				that.setSelectedDistance(distance);
  				var data = sortByDistance(allPartners, center.lat, center.lng, true);
  				if(data) {
  					// Filter data for duplicates
  					for(var i = 0; i < data.length; i++) {
  	  					var partner = data[i];
  	  					for(var marker of activeMarkers) {
  	  						if(partner && marker && marker.partner) {
  	  							if(partner.lat == marker.partner.lat && partner.lng == marker.partner.lng) {
  	  								data.splice(i, 1);
  	  								i--;
  	  							}
  	  						}
  	  					}
  	  				}
  					if(showPartners) {
  						addPartnersToMap(data, bounds, userMarker);
  						var palist = [];
  						for(var marker of activeMarkers) {
  							palist.push(marker.partner);
  						}
  						updatePartnerList(palist);
  					}
  				}
  				// Visual border for search radius
  				/*
  				if(circle) {
					circle.setMap(null);
				}
				circle = new google.maps.Circle({
			      strokeColor: '#FF0000',
			      strokeOpacity: 0.8,
			      strokeWeight: 2,
			      fillColor: '#FF0000',
			      fillOpacity: 0.35,
			      map: sortimoLocationFinderMap,
			      center: center,
			      radius: distance * 1000
			    });
			    */
  			}
  		}
  		
  		sortimoLocationFinderMap.addListener('zoom_changed', function() {
  			handleViewChange(true);
  		});
  		
  		sortimoLocationFinderMap.addListener('drag', function() {
  			handleViewChange(false);
  		}); 
  	}

	function addPartnersToMap(data, bounds, userMarker) {
		// Consume Geodata
  		if (data == null) {
  			partnerData = getPartnersFromServer();
  			
  			updatePartnerList(partnerData)
  		} else {
  			partnerData = data;
  		}
  			
  		
  		for ( var i = 0; i < partnerData.length; i++) {

  			var distance = getDistance(that.getCurrentLat(), that.getCurrentLng(), partnerData[i].lat, partnerData[i].lng);
  			distance = Math.floor(distance);
  			
  			// Check if user location is partner location
  			if(distance == 0) {
  				marker = userMarker;
  			}
  			else {
  				//Create new marker
	  			marker = new google.maps.Marker(
	  				{map : sortimoLocationFinderMap,
	  				 position : new google.maps.LatLng(
	  						partnerData[i].lat,
	  						partnerData[i].lng),
	  			});
	  			
	  			partnerData[i].marker = marker;
	  			
	  			//Extend bounds of the map by position of marker
	  			bounds.extend(marker.getPosition());
	  			//determine which icon to use
	  			marker.setIcon(getSortimoMarkerS());		
  			}
  			
  			//Create content for infoWindow
  			//var content = createContent(partnerData[i]);
  			var content = createInfoPopUpContent(partnerData[i]);
  			//Create infoWindow
  			//infowindow = new google.maps.InfoWindow();
  			infowindow = new google.maps.InfoWindow({
  				maxWidth: 1000,
  				disableAutoPan: true
  			});

  			//Add Event on click to marker
  			google.maps.event.addListener(marker, 'click', (function(
  					marker, content, infowindow, partner, isCheckout) {
  				return function() {
  					//console.log("Marker was clicked");
  					//closeInfos();
  					//infowindow.setContent(content);
  					//infowindow.open(sortimoLocationFinderMap, marker);
  					jQuery('.store-filder-entry-'+partner.partner).prop( "checked", true );
  					//infos[0] = infowindow;
  					var getPartnerUrl = ACC.config.encodedContextPath + "/locationfinder/partnerInfo/" + partner.partner;
  					if (isCheckout == true) {
  						getPartnerUrl = getPartnerUrl + "?checkout=true";
  					} else if(isProvisioner == true){
  						getPartnerUrl = getPartnerUrl + "?vehicleId=" + vehicleId;
  					}
  					jQuery.ajax({
  		    		  dataType: "html",
  		    		  async: false, // Makes sure to wait for load
  		    		  url: getPartnerUrl,
  		    		  'success': function (site) {
  		    			  var popup = $(".location-finder-overlay");
  		    			  $(popup).find(".location-finder-popup").html(site);
  		    			  $(popup).show();
  		    		  }
  		    		});
  				};
  			})(marker, content, infowindow, partnerData[i], checkoutSet));
  			//Add mousoverevent
//  			google.maps.event.addListener(marker, 'mouseover', (function(
//  					marker, content, infowindow) {
//  				return function() {
//  					console.log("Marker was clicked");
//  					closeInfos();
//  					infowindow.setContent(content);
//  					infowindow.open(sortimoLocationFinderMap, marker);
//  					infos[0] = infowindow;
//  				};
//  			})(marker, content, infowindow));
  			allMarkers.push(marker);
  			var partner = partnerData[i];
  			var unique = true;
  			for(var pa of activeMarkers) {
  				if(pa && pa.partner) {
  					if(partner.lat == pa.partner.lat && partner.lng == pa.partner.lng) {
  						unique = false;
  					}
  				}
  			}
  			if(unique) {
  				activeMarkers.push({
  	  				partner: partner,
  	  				marker: marker
  	  			});
  			}
  		}
	}
      
      function getLocationMarker() {
    	  return resourcePath + "/red_marker.png";
      }
      function getSortimoMarkerS() {
    	  return resourcePath + "/sortimo_marker.png";
      }
      
      
      function getPartnersFromServer() {
    	  var resultJSON;
    	  jQuery.ajax({
    		  dataType: "json",
    		  async: false, // Makes sure to wait for load
    		  url: jsonRESTPartnersURL,
    		  'success': function (json) {
    			  resultJSON = json.partners;
    		      
    		  }
    		  });
    	  return resultJSON;
      }
      
      
    function createInfoPopUpContent(data) {
    	var content = "";
    	
    	content += "<div class='popup-content'>";
    	content += "<h1>" + data.name + "</h1>";
    	content += "</div>";
    	
    	
    	return content;
    }
  	function createContent (data){	
		//Name
		if(data.name.length > 1){
			var content = "<b>" + data.name + "</b><br>";
		}
		
		//Adress
		if(data.street.length > 1){
			content = content + data.street + "<br>";
			if(data.plz.length > 1){
				content = content + data.plz + " " + data.city + "<br>";
			}
		}
		else{
			if(data.plz.length > 1){
				content = content + data.plz + " " + data.city + "<br>";
			}
		}
		
		//Services
		if(data.services.length > 0){
			content = content + "<br><b>" + translate("SERVICES") + "</b><br>";
			for(var i=0; i<data.services.length; i++){
				content = content + data.services[i] + "<br>";
			}
		}
		
		//Contact
		if((data.phone != null && data.phone.length > 4) || (data.email != null && data.email.length > 1) || (data.website != null && data.website.length > 1)){
			content = content + "<br><b>" + translate("CONTACT") + "</b><br>";
			
			//Phone
			if(data.phone != null && data.phone.length > 4){
				content = content + translate("TEL") +" <a href='tel:" + data.phone + "'>" + data.phone + "</a><br>";
			}
			
			//Email
			if(data.email != null && data.email.length > 1){
				content = content + translate("EMAIL") + " <a href='mailto:" + data.email + "'>" + data.email + "</a><br>";
			}
			
			//Website
			if(data.website != null && data.website.length > 1){
				content = content + "<a href='http://"+ data.website + "'>" + data.website + "</a><br>";
			}
		}
		
		//Link zur Google Maps App
		/* var url = "http://maps.google.de/maps?saddr="+getPropertyOf("location", "/coords/latitude")+","+getPropertyOf("location", "/coords/longitude")+"&daddr="+data.lat+","+data.lng;
		 content = content + "<br><a target='_blank' href='"+url+"'>"+ translate("OPENINGOOGLE") +"</a>";
		*/
		//Return content
		return content;
	}
  	
  	function translate(text) {
  		return text;
  	}
  	
  	function closeInfos() {
  		if (infos.length > 0) {
  			/*
  			 * detach the info-window from the marker ... undocumented in the API
  			 * docs
  			 */
  			infos[0].set("marker", null);

  			/* and close it */
  			infos[0].close();

  			/* blank the array */
  			infos.length = 0;
  		}
  	}
  	
  	function updatePartnerList(partners) {
  		var nav = jQuery(".store__finder--navigation-list");
  		nav.empty();
  		nav.append('<li class="loading toBeRemovedNav"><span class="glyphicon glyphicon-repeat"></span></li>');
  		for ( var i = 0; i < partners.length; i++) {
  			var html = '<li class="list__entry">';
  			html = html+'<input onclick="javascript:sortimoMapUtil.showMarkerInfo('+i+');" type="radio" name="storeNamePost" value="'+partners[i].partner+'" id="store-filder-entry-'+i+'" class="js-store-finder-input store-filder-entry-'+partners[i].partner+'" data-id="0">';
  			html = html+'<label for="store-filder-entry-'+i+'" class="js-select-store-label">';
  			html = html+'<span class="entry__info">';
  			html = html+'<span class="entry__name">'+partners[i].name+'</span>';
  			html = html+'<span class="entry__address">'+partners[i].street+'</span>';
  			html = html+'<span class="entry__city">'+partners[i].plz+' '+partners[i].city+'</span>';
  			html = html+'</span>';
  			html = html+'<span class="entry__distance">';
  			var distance = getDistance(that.getCurrentLat(), that.getCurrentLng(), partners[i].lat, partners[i].lng);
  			//console.log(distance.toFixed(0));
  			html = html+'<span>'+distance.toFixed(0)+' ' + (distanceUnit != null && distanceUnit.length > 0 ? distanceUnit : 'km') + '</span>';
  			html = html+'</span>';
  			html = html+'</label>';
  			html = html+'</li>';
  			nav.append(html);
  		}
  		jQuery(".toBeRemovedNav").remove();
  	}
  	
  
  	function sortByDistance(partnerData, mylat, mylng, preventReload) {
  		// copy array values
  		var data = partnerData.slice(0);
  		//console.log("partnerData : "+partnerData.length);
  		//console.log("sortDistance limit  "+that.getSelectedDistance());
  		// calculate distances from my location and delete every entry over selected
  		// radius
  		for(var i=0; i<data.length; i++){
  			data[i].distance = getDistance(mylat, mylng, data[i].lat, data[i].lng);
  			if(data[i].distance > (that.getSelectedDistance())){
  				// remove entry it is to long distance
  				//console.log("cut of partner: "+data[i].name+" distance = "+data[i].distance);
  				data.splice(i, 1);
  				i = i-1;
  			}
  		}
  		// if there are no results left extend radius and do it again
  		
  		if(data.length < 1 && that.getSelectedDistance()<="10000"){
  			that.setSelectedDistance(that.getSelectedDistance()+50);
  			//console.log("No markers found extend limit to "+that.getSelectedDistance());
  			sortByDistance(partnerData, mylat, mylng, preventReload);
  			// messagetoast for changing the radius?
  			// Im gewünschten Umkreis konnten keine Sortimo Spezialisten gefunden
  			// werden. Die Suche wurde automatisch angepasst.
  			
  			return;
  		}
  		// sort by distance
  		data=data.sort(function(a, b) {
  	        var x = a["distance"]; var y = b["distance"];
  	        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
  	    });
  		// shorten it to 10. Sortimo does not want to display more
  		//if(data.length > 10){
  		//	data.length=10;
  		//}
  		/* services to filter TODO
  		if(that.filters){
  			data = filterModel(data, that.filters);		
  		}
  		*/
  		if(!preventReload) {
  			that.onSortSuccess(data);
  		}
  		else {
  			return data;
  		}
  	}
  	function getDistance(lat1,lon1,lat2,lon2) {
  		//console.log("getDistance("+lat1+","+lon1+","+lat2+","+lon2+")")
  		var R = 6371; // Radius of the earth in km
  		var dLat = deg2rad(lat2-lat1);  // deg2rad below
  		var dLon = deg2rad(lon2-lon1); 
  		var a = 
  			Math.sin(dLat/2) * Math.sin(dLat/2) +
  		    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
  		    Math.sin(dLon/2) * Math.sin(dLon/2); 
  		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  		var d = R * c; // Distance in km
  		// Locale distance unit
  		if(distanceUnit == 'miles') {
  			d *= 0.621371;
  		}
  		return d;
  	}
 // conversion degree to radiant
  	function deg2rad(deg) {
  		return deg * (Math.PI/180)
  	}
};
/*function printInputField() {
	$('.locationFinder .searchLocation').css('left', ($( window ).width() - 270 ) + 'px');
	$('.outerButton').css('left', ($( window ).width() - 480 ) + 'px');
	$('.outerButtonMap').css('left', ($( window ).width() - 213 ) + 'px');
	$('#store__finder--adressBtn').css('left', ($( window ).width() - 480 ) + 'px');
	$('#store__finder--mapBtn').css('left', ($( window ).width() - 213 ) + 'px');
	
}

function checkMapListActive() {
	if ($(".store__finder--navigation").css("display")=="block"
		&& $("#mapContent").css("display")=="block" ) {
			$(".store__finder--navigation").css("display","none");
			$(".store__finder--buttons").css("display","block");
	}
}

function checkButtonActive() {
    if ($("#store__finder--mapBtn").css("display")=="none"
    	&& $("#store__finder--adressBtn").css("display")=="none") {
    	addRemoveClass("#store__finder--adressBtn", "displayBlock", "displayNone");
    	$(".store__finder--navigation").css("display","none");
    }
}

function printInputFieldRight() {
	$('.locationFinder .searchLocation').css('left','');
	$('.outerButton').css('left', '');
	$('.outerButtonMap').css('left', '');
	$("#mapContent").css ("display", "block");
	$(".store__finder--navigation").css("display","block");
	$(".searchLocation").css("display","block");
}

function addRemoveClass(elmStr, addClass, removeClass) {
	$(elmStr).addClass(addClass);
	$(elmStr).removeClass(removeClass);
}*/

function printMapAndList() {
	$(".location-finder-overlay").css("top", "0");
	$("#mapContent").css("display","block");
	$(".store__finder--navigation").css("display","block");
}

function hideList() {
	if ($(".store__finder--navigation").css("display")=="block"
		&& $("#mapContent").css("display")=="block" ) {
			$(".store__finder--navigation").css("display","none");
	}
}

$( window ).resize(function() {
	if ($(window).width() > 1024) {
		printMapAndList();
	} else {
		hideList();
	}
	
});

if ($(window).width() > 1024) {
	printMapAndList();
} else {
	hideList();
}
	
$(document).ready(function() {
	$('#store__finder--adressBtn').click(function () {
		$('#store__finder--mapBtn').removeClass("active");
		$(this).addClass("active");
		
		$("#mapContent").hide();
		$(".store__finder--navigation").show();
		$(".searchLocation").hide();
		$(".location-finder-overlay").hide();
		//$(".location-finder-overlay").css("top", "20px");
		//$(".partner-info-location").css("top","54px");
	});		
	$('#store__finder--mapBtn').click(function () {
		$('#store__finder--adressBtn').removeClass("active");
		$(this).addClass("active");
		
		$("#mapContent").show();
		$(".store__finder--navigation").hide();
		$(".searchLocation").show();
		$(".location-finder-overlay").hide();
		//$(".location-finder-overlay").css("top", "0");
		//$(".partner-info-location").css("top","72px");
	});
	$('.list__entry').click(function() {
		//console.log("\$(window).width()", $(window).width());
	});
});


function closeLocationFinderPopupOverlay(element) {
	$(element).parent().parent().parent().parent().hide();
	$(".list__entry input").prop('checked', false);
}
