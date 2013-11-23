
  var defaultZoom = 13; // Why zoomed in? Because it looks good.
  
  // create map and add controls
  var mapOptions = {
    center: new google.maps.LatLng(-33.8688, 151.2195),
    zoom: defaultZoom,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map'),mapOptions);

  // I'm Centering the map in Bangkok
  // '13.731547730050778'
  // '100.56798934936523'
  var mylat = document.getElementById("lat").value;
  var mylng = document.getElementById("lng").value;
  if (jQuery.isEmptyObject(mylat)) {
    var mylat = '40.70459';
    var mylng = '-74.02091';
    var defaultZoom = 13; // decrease zoom to 13 if there is no selection from user.
  };

  // set center point of map to be of the Marker or the Default City
  var centrePoint = new google.maps.LatLng(mylat, mylng);
  
  map.setCenter(centrePoint);
  map.setZoom(defaultZoom); 

  // add a draggable marker
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: centrePoint
  });
  var defaultImage = new google.maps.MarkerImage(
      "http://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
      new google.maps.Size(71, 71),
      new google.maps.Point(0, 0),
      new google.maps.Point(17, 34),
      new google.maps.Size(35, 35));
  marker.setIcon(defaultImage);

  google.maps.event.addListener(marker, 'click', toggleBounce);

  // create Info window for marker
  var infowindow = new google.maps.InfoWindow();
  
  // Address Autocomplete
  var input = document.getElementById('location_search');
  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);
  
  // add a drag listener to the map
  google.maps.event.addListener(marker, "dragend", function() {
    var point = marker.getPosition();
    map.panTo(point);
    document.getElementById("lat").value = point.lat();
    document.getElementById("lng").value = point.lng();
    infowindow.close();
    marker.setIcon(defaultImage);
  });
  
  // Autocomplete Listener
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    var place = autocomplete.getPlace();
    marker.setPosition(place.geometry.location);
    map.panTo(place.geometry.location);
    map.setZoom(16);
    document.getElementById("lat").value = place.geometry.location.lat();
    document.getElementById("lng").value = place.geometry.location.lng();

    // Sets the proper image on the marker. ie. school/hospital marker
    var image = new google.maps.MarkerImage(
        place.icon,
        new google.maps.Size(71, 71),
        new google.maps.Point(0, 0),
        new google.maps.Point(17, 34),
        new google.maps.Size(35, 35));
    marker.setIcon(image);
    marker.setPosition(place.geometry.location);

    var address = '';
    if (place.address_components) {
      address = [(place.address_components[0] &&
                  place.address_components[0].short_name || ''),
                 (place.address_components[1] &&
                  place.address_components[1].short_name || ''),
                 (place.address_components[2] &&
                  place.address_components[2].short_name || '')
                ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
    
    // Autofill the fields in the form. TODO: improve parsing of the returned JSON data.
    var address = place.address_components;
    var zipcode = address[address.length - 1].long_name;
    var country = address[address.length - 2].long_name;
    var city = address[address.length - 3].long_name;
    var sublocality = address[address.length - 4].long_name;
    var streetname = address[0].long_name;
    
    var location_name = place.name;
    var formatted_address = place.formatted_address;
    var formatted_phone_number = place.formatted_phone_number;
    
    document.getElementById("zipcode").value =place.zipcode;
    document.getElementById("city").value = sublocality;
    //document.getElementById("event_location_attributes_country").value = country;
    document.getElementById("state").value = city;
    document.getElementById("address").value = formatted_address;
    document.getElementById("venue_name").value = location_name;
    document.getElementById("phone").value = formatted_phone_number;

  });
  
  // This is the function to animate the marker after dropping it.
  function toggleBounce() {
    if (marker.getAnimation() != null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  };

//-->
