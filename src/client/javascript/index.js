angular.module("Expresso", ["ngResource","geolocation"]);
angular.module("Expresso").controller("ExpressoCtrl", function($scope, $resource, geolocation){

    $scope.doGeo = function() {
        
    };
    $scope.doMap = function(message){

        geolocation.getLocation().then(function(data){
           
            var myLatlng = new google.maps.LatLng(data.coords.latitude, data.coords.longitude);
            var myLatlng2 = new google.maps.LatLng(data.coords.latitude + 0.55, data.coords.longitude);
            //var myLatlng = new google.maps.LatLng(7.0723033, 125.61028329999999);
            var mapOptions = {
              zoom: 10,
              center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("mapcon"), mapOptions);
            var image = 'besafe.png';
            // To add the marker to the map, use the 'map' property
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title:"Angelhack Davao"
                //icon: image
            });

            var marker2 = new google.maps.Marker({
                position: myLatlng2,
                map: map,
                title:"Test"
                //icon: image
            });
        });

    };
    $scope.doGeo();
    $scope.doMap();
    
   
});

