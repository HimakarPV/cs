angular.module('mainCtrl', []).controller('mainController', function($scope){

	$scope.container1 = true;
	$scope.container3 = false;

	$scope.showcontactform = function(){
		$scope.container1 = false;
		$scope.container3 = true;
	};

});