all:
	make angular

angular:
	cp app/bower_components/angular/angular.min.js dist/client/javascript/
	cp app/bower_components/angular/angular.min.js.map dist/client/javascript/
	cp app/bower_components/angular-resource/angular-resource.min.js dist/client/javascript/
	cp app/bower_components/angular-resource/angular-resource.min.js.map dist/client/javascript/	
	cp app/bower_components/angular/angular.min.js src/client/javascript/
	cp app/bower_components/angular/angular.min.js.map src/client/javascript/
	cp app/bower_components/angular-resource/angular-resource.min.js src/client/javascript/
	cp app/bower_components/angular-resource/angular-resource.min.js.map src/client/javascript/	
