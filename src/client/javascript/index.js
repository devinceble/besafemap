angular.module("Expresso", ["ngResource","geolocation"]);
angular.module("Expresso").controller("ExpressoCtrl", function($scope, $resource, $http, geolocation){
    $scope.mapGeo = null;
    $scope.doGeo = function() {
        var latlong = new google.maps.LatLng(7.0723033, 125.61028329999999);
        var mapOptions = {
                  zoom: 10,
                  center: latlong
            }
        var map = new google.maps.Map(document.getElementById("mapcon"), mapOptions);
        var infowindow = new google.maps.InfoWindow();
        var spip = $http.get('/people').then(function(data){
            angular.forEach(data.data.results,function(value,index){
               var latlng = new google.maps.LatLng(value.latitude, value.longtidue);
               var name = value.firstname + ' ' + value.middlename + ' ' + value.lastname;
               var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    title: name,
                    icon: 'img/32/alive.png'
                  });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(value.cell_number+'--Need Help-->'+name);
                    infowindow.open(map, this);
                });

           });
        });
        var latlongb = new google.maps.LatLng(7.0723033 + 0.55, 125.61028329999999);
        var marker = new google.maps.Marker({
                    position: latlongb,
                    map: map,
                    title: 'BeSafeMap',
                    icon: 'img/logo.png'
        });

        $scope.mapGeo = map;
    };

    $scope.doUp = function(){
        var infowindow = new google.maps.InfoWindow();
        var latlongb = new google.maps.LatLng(7.0723033 + 0.55, 125.61028329999999);
        var marker = new google.maps.Marker({
                    position: latlongb,
                    map: $scope.mapGeo,
                    title: 'Dead Corpse --> Validate Photo For ID',
                    icon: 'img/32/corpse.png'
        });
        google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent('Dead Corpse --> Validate Photo For ID');
                    infowindow.open($scope.mapGeo, this);
                });
    };

    $scope.doSearch = function(){
        console.log($scope.txtSearch);
    };
    
    $scope.getLoc = function(){
        geolocation.getLocation().then(function(data){
            $scope.txtLat = data.coords.latitude;
            $scope.txtLon = data.coords.longitude;
        });
    };

    $scope.doHelp = function(){
        var data = {'firstname': $scope.txtName, 'latitude': $scope.txtLat, 'longtidue': $scope.txtLon}
        $http.post('/people/store', data).success(function(data){
            console.log(data);
        });

        var infowindow = new google.maps.InfoWindow();
        var latlongb = new google.maps.LatLng($scope.txtLat, $scope.txtLon);
        var marker = new google.maps.Marker({
                    position: latlongb,
                    map: $scope.mapGeo,
                    title: $scope.txtName,
                    icon: 'img/32/alive.png'
        });
        google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent($scope.txtMsg);
                    infowindow.open($scope.mapGeo, this);
                });

        
    };

    $scope.doGeo();
    $scope.doUp();
    $scope.getLoc();
});

