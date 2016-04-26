angular.module('formService',[])
.factory('Comment', function($http){
	return {
		get:function(){
			return $http.get('/index1data');
		}
	}
});