<?php

/* base.html.twig */
class __TwigTemplate_9305eadc89e222426ccf31ac3c2710d49891c629838bec62d67c515166d1530a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a010ab5e02f04ff9398de6097e0bac4d81583f87bd80478df80d80ed74c70a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a010ab5e02f04ff9398de6097e0bac4d81583f87bd80478df80d80ed74c70a2b->enter($__internal_a010ab5e02f04ff9398de6097e0bac4d81583f87bd80478df80d80ed74c70a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style type=\"text/css\">
          html,body {
            padding: 0;
            width: 100%;
          }
          #map {
            height: 500px;
            width: 100%;
          }
          div.overall {
            padding: 10px;
            background-color: rgba(0,0,0,.3);
          }
          div.container-col {
            width: 100%;
          }
          div.body {
            padding: 20px;
          }
          div.h3 {
            margin: 20px;
            text-align: center;
          }
          input.btn {
            width: 70%;
            margin-left: 10px;
            border: 1px solid black;
          }
          input.btn1 {
            width: 25%;
            margin: 10px;
            padding: 10px;
            background-color: black;
            color: white;
          }
          input.btn1:hover {
            background-color: blue;
          }
          input.btn2 {
            width: 31%;
          }
          div.address {
            display: inline-block;
            width: 100%;
          }
          
        </style>
        ";
        // line 56
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 60
        echo "    </head>

    <body>
        
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 244
        echo "    </body>
</html>
";
        
        $__internal_a010ab5e02f04ff9398de6097e0bac4d81583f87bd80478df80d80ed74c70a2b->leave($__internal_a010ab5e02f04ff9398de6097e0bac4d81583f87bd80478df80d80ed74c70a2b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_83788cf5070e5ccb9f178c0165a692ffb6909048165776f8a828d9f1d51c3332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83788cf5070e5ccb9f178c0165a692ffb6909048165776f8a828d9f1d51c3332->enter($__internal_83788cf5070e5ccb9f178c0165a692ffb6909048165776f8a828d9f1d51c3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Geolocation Services";
        
        $__internal_83788cf5070e5ccb9f178c0165a692ffb6909048165776f8a828d9f1d51c3332->leave($__internal_83788cf5070e5ccb9f178c0165a692ffb6909048165776f8a828d9f1d51c3332_prof);

    }

    // line 56
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d63387aa30ee56750a1e96d4aa16fb67999ba3679cea4497bea9983fb9ddbc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63387aa30ee56750a1e96d4aa16fb67999ba3679cea4497bea9983fb9ddbc5b->enter($__internal_d63387aa30ee56750a1e96d4aa16fb67999ba3679cea4497bea9983fb9ddbc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 57
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        
        $__internal_d63387aa30ee56750a1e96d4aa16fb67999ba3679cea4497bea9983fb9ddbc5b->leave($__internal_d63387aa30ee56750a1e96d4aa16fb67999ba3679cea4497bea9983fb9ddbc5b_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98f873d199631003c8460cb9597b939c94032a0ce500a4dca9a490c5016b059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98f873d199631003c8460cb9597b939c94032a0ce500a4dca9a490c5016b059->enter($__internal_e98f873d199631003c8460cb9597b939c94032a0ce500a4dca9a490c5016b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e98f873d199631003c8460cb9597b939c94032a0ce500a4dca9a490c5016b059->leave($__internal_e98f873d199631003c8460cb9597b939c94032a0ce500a4dca9a490c5016b059_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17a8d794e99932056b65e49d1ee8e1bbb3b0532c20ec0addc246027c14952cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a8d794e99932056b65e49d1ee8e1bbb3b0532c20ec0addc246027c14952cba->enter($__internal_17a8d794e99932056b65e49d1ee8e1bbb3b0532c20ec0addc246027c14952cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "            
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
          <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q&callback=initMap\">
          </script>
          <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q&libraries=places&callback=initAutocomplete\"
          async defer></script>
          <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
  
          <script type=\"text/javascript\">
                
            var map;
            var markers = [];

              function initMap() {

                var geocoder = new google.maps.Geocoder();
                var markerIcon = 'http://www.googlemapsmarkers.com/v1/0000FF/';
                var address = {lat: 65.012088800, lng: 25.465077200};

                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: address,
                    mapTypeId: 'roadmap'
                });

                // This event listener will call addMarker() when the map is clicked.
                map.addListener('click', function(event) {
                    addMarker(event.latLng);
                });

                // Event handler for changing marker color
                document.getElementById('provide-color').addEventListener('click', function() {
                    markerIcon = 'http://www.googlemapsmarkers.com/v1/' + document.getElementById('marker-color').value.slice(1) + '/';
                });

                // Event handler for changing marker icon
                document.getElementById('provide-icon').addEventListener('click', function() {
                    markerIcon = document.getElementById('marker-icon').value;
                });

                // Event handler for add marker to address
                document.getElementById('provide-location').addEventListener('click', function() {
                    geocodeAddress(geocoder, map, markerIcon);
                });

                // Event handler for clearing markers
                document.getElementById('hide-marker').addEventListener('click', function() {
                    hideMarker();
                });

                // Event handler for showing markers
                document.getElementById('show-marker').addEventListener('click', function() {
                    showMarker();
                });

                // Event handler for deleting markers
                document.getElementById('delete-marker').addEventListener('click', function() {
                    deleteMarker();
                });

                // Adds a marker at the center of the map.
                addMarker(address);

                //Find latlong from address
                function geocodeAddress(geocoder, resultsMap, markerIcon) {
                  var address = document.getElementById('address').value;
                  geocoder.geocode({'address': address}, function(results, status) {
                    if (status === 'OK') {
                      resultsMap.setCenter(results[0].geometry.location);
                      addMarker(results[0].geometry.location);

                    } else {
                      alert('Geocode was not successful for the following reason: ' + status);
                    }
                  });
                }

                // Adds a marker to the map and push to the array.
                function addMarker(location) {
                  var marker = new google.maps.Marker({
                  position: location,
                  map: map
                });
                  marker.setIcon(markerIcon);
                  markers.push(marker);
                }

                // Sets the map on all markers in the array.
                function setMapOnAll(map) {
                  for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                  }
                }

                // Removes the markers from the map, but keeps them in the array.
                function hideMarker() {
                  setMapOnAll(null);
                }

                // Shows any markers currently in the array.
                function showMarker() {
                  setMapOnAll(map);
                }

                // Deletes all markers in the array by removing references to them.
                function deleteMarker() {
                  hideMarker();
                  markers = [];
                }
              }

              // Call Geocode
              //geocode();

              // Get location form
              var locationForm = document.getElementById('location-form');

              // Listen for submiot
              locationForm.addEventListener('submit', geocode);

              function geocode(e){
                // Prevent actual submit
                e.preventDefault();

                var location = document.getElementById('address').value;

                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                  params:{
                    address:location,
                    key:'AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q'
                  }
                })
                .then(function(response){
                  // Log full response
                  console.log(response);

                  // Formatted Address
                  var formattedAddress = response.data.results[0].formatted_address;
                  var formattedAddressOutput = `
                    <ul class=\"list-group\">
                      <li class=\"list-group-item\">\${formattedAddress}</li>
                    </ul>
                  `;

                  // Address Components
                  var addressComponents = response.data.results[0].address_components;
                  var addressComponentsOutput = '<ul class=\"list-group\">';
                  for(var i = 0;i < addressComponents.length;i++){
                    addressComponentsOutput += `
                      <li class=\"list-group-item\"><strong>\${addressComponents[i].types[0]}</strong>: \${addressComponents[i].long_name}</li>
                    `;
                  }
                  addressComponentsOutput += '</ul>';

                  // Geometry
                  var lat = response.data.results[0].geometry.location.lat;
                  var lng = response.data.results[0].geometry.location.lng;
                  var geometryOutput = `
                    <ul class=\"list-group\">
                      <li class=\"list-group-item\"><strong>Latitude</strong>: \${lat}</li>
                      <li class=\"list-group-item\"><strong>Longitude</strong>: \${lng}</li>
                    </ul>
                  `;

                  // Output to app
                  document.getElementById('formatted-address').innerHTML = formattedAddressOutput;
                  document.getElementById('address-components').innerHTML = addressComponentsOutput;
                  document.getElementById('geometry').innerHTML = geometryOutput;
                })
                .catch(function(error){
                  console.log(error);
                });
              }

          </script>

        ";
        
        $__internal_17a8d794e99932056b65e49d1ee8e1bbb3b0532c20ec0addc246027c14952cba->leave($__internal_17a8d794e99932056b65e49d1ee8e1bbb3b0532c20ec0addc246027c14952cba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 66,  137 => 64,  128 => 57,  122 => 56,  110 => 8,  101 => 244,  99 => 66,  96 => 65,  94 => 64,  88 => 60,  86 => 56,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <title>{% block title %}Geolocation Services{% endblock %}</title>
        <style type=\"text/css\">
          html,body {
            padding: 0;
            width: 100%;
          }
          #map {
            height: 500px;
            width: 100%;
          }
          div.overall {
            padding: 10px;
            background-color: rgba(0,0,0,.3);
          }
          div.container-col {
            width: 100%;
          }
          div.body {
            padding: 20px;
          }
          div.h3 {
            margin: 20px;
            text-align: center;
          }
          input.btn {
            width: 70%;
            margin-left: 10px;
            border: 1px solid black;
          }
          input.btn1 {
            width: 25%;
            margin: 10px;
            padding: 10px;
            background-color: black;
            color: white;
          }
          input.btn1:hover {
            background-color: blue;
          }
          input.btn2 {
            width: 31%;
          }
          div.address {
            display: inline-block;
            width: 100%;
          }
          
        </style>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endblock %}
    </head>

    <body>
        
        {% block body %}{% endblock %}

        {% block javascripts %}
            
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
          <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q&callback=initMap\">
          </script>
          <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q&libraries=places&callback=initAutocomplete\"
          async defer></script>
          <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
  
          <script type=\"text/javascript\">
                
            var map;
            var markers = [];

              function initMap() {

                var geocoder = new google.maps.Geocoder();
                var markerIcon = 'http://www.googlemapsmarkers.com/v1/0000FF/';
                var address = {lat: 65.012088800, lng: 25.465077200};

                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: address,
                    mapTypeId: 'roadmap'
                });

                // This event listener will call addMarker() when the map is clicked.
                map.addListener('click', function(event) {
                    addMarker(event.latLng);
                });

                // Event handler for changing marker color
                document.getElementById('provide-color').addEventListener('click', function() {
                    markerIcon = 'http://www.googlemapsmarkers.com/v1/' + document.getElementById('marker-color').value.slice(1) + '/';
                });

                // Event handler for changing marker icon
                document.getElementById('provide-icon').addEventListener('click', function() {
                    markerIcon = document.getElementById('marker-icon').value;
                });

                // Event handler for add marker to address
                document.getElementById('provide-location').addEventListener('click', function() {
                    geocodeAddress(geocoder, map, markerIcon);
                });

                // Event handler for clearing markers
                document.getElementById('hide-marker').addEventListener('click', function() {
                    hideMarker();
                });

                // Event handler for showing markers
                document.getElementById('show-marker').addEventListener('click', function() {
                    showMarker();
                });

                // Event handler for deleting markers
                document.getElementById('delete-marker').addEventListener('click', function() {
                    deleteMarker();
                });

                // Adds a marker at the center of the map.
                addMarker(address);

                //Find latlong from address
                function geocodeAddress(geocoder, resultsMap, markerIcon) {
                  var address = document.getElementById('address').value;
                  geocoder.geocode({'address': address}, function(results, status) {
                    if (status === 'OK') {
                      resultsMap.setCenter(results[0].geometry.location);
                      addMarker(results[0].geometry.location);

                    } else {
                      alert('Geocode was not successful for the following reason: ' + status);
                    }
                  });
                }

                // Adds a marker to the map and push to the array.
                function addMarker(location) {
                  var marker = new google.maps.Marker({
                  position: location,
                  map: map
                });
                  marker.setIcon(markerIcon);
                  markers.push(marker);
                }

                // Sets the map on all markers in the array.
                function setMapOnAll(map) {
                  for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                  }
                }

                // Removes the markers from the map, but keeps them in the array.
                function hideMarker() {
                  setMapOnAll(null);
                }

                // Shows any markers currently in the array.
                function showMarker() {
                  setMapOnAll(map);
                }

                // Deletes all markers in the array by removing references to them.
                function deleteMarker() {
                  hideMarker();
                  markers = [];
                }
              }

              // Call Geocode
              //geocode();

              // Get location form
              var locationForm = document.getElementById('location-form');

              // Listen for submiot
              locationForm.addEventListener('submit', geocode);

              function geocode(e){
                // Prevent actual submit
                e.preventDefault();

                var location = document.getElementById('address').value;

                axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                  params:{
                    address:location,
                    key:'AIzaSyDlBTAasMorwfqZ01Anl9F74R72kJNjP9Q'
                  }
                })
                .then(function(response){
                  // Log full response
                  console.log(response);

                  // Formatted Address
                  var formattedAddress = response.data.results[0].formatted_address;
                  var formattedAddressOutput = `
                    <ul class=\"list-group\">
                      <li class=\"list-group-item\">\${formattedAddress}</li>
                    </ul>
                  `;

                  // Address Components
                  var addressComponents = response.data.results[0].address_components;
                  var addressComponentsOutput = '<ul class=\"list-group\">';
                  for(var i = 0;i < addressComponents.length;i++){
                    addressComponentsOutput += `
                      <li class=\"list-group-item\"><strong>\${addressComponents[i].types[0]}</strong>: \${addressComponents[i].long_name}</li>
                    `;
                  }
                  addressComponentsOutput += '</ul>';

                  // Geometry
                  var lat = response.data.results[0].geometry.location.lat;
                  var lng = response.data.results[0].geometry.location.lng;
                  var geometryOutput = `
                    <ul class=\"list-group\">
                      <li class=\"list-group-item\"><strong>Latitude</strong>: \${lat}</li>
                      <li class=\"list-group-item\"><strong>Longitude</strong>: \${lng}</li>
                    </ul>
                  `;

                  // Output to app
                  document.getElementById('formatted-address').innerHTML = formattedAddressOutput;
                  document.getElementById('address-components').innerHTML = addressComponentsOutput;
                  document.getElementById('geometry').innerHTML = geometryOutput;
                })
                .catch(function(error){
                  console.log(error);
                });
              }

          </script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\my_project_task\\templates\\base.html.twig");
    }
}
