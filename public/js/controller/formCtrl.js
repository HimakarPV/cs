angular.module('formCtrl', []).controller('formController', function($scope, $http, Comment){

	Comment.get().success(function(data){
		$scope.crimeTypes = data[0];
	// console.log($scope.comments);
	// angular.forEach(data, function(key,comments){
	// 	$scope.comments = key;
	// 	console.log($scope.comments);
	// }
	// );
});
	$scope.div1 = true;
	$scope.div2 = false;
	$scope.div3 = false;
	$scope.div4 = false;
	$scope.div5 = false;
	$scope.div6 = false;
	$scope.div7 = false;

	$scope.selection = {};

	$scope.selected = {};

	$scope.click1 = function(data){
		console.log(data);
		var id=Object.keys(data);
		console.log({id});
		// console.log(Object.keys(data));
		// var id = [];
		// for(var i in data){

		// 	// if(data[i]==true){      {id:[1,2,3]}
		// 	// 	id = {'id':i};
		// 	// }

		// 	if(data[i]==true){
		// 		console.log(i);
		// 		id.push(i);
		// 	}
		// }
		
		
		
		// $scope.selected = {'id':id};
		// console.log(angular.toJson($scope.selected));

		$http({
			method  : 'POST',
			url     : '/index1',
			data    : $.param({id}),
			headers :{'Content-Type':'application/x-www-form-urlencoded'}
		})
		.success(function(data) {
			console.log(data);

			$scope.step1 = data.step1;
			$scope.step2 = data.step2;
			$scope.step3 = data.step3;
			$scope.step4 = data.step4;
			$scope.step5 = data.step5;
		});

		$scope.div1 = false;
		$scope.div2 = true;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;

	};
	$scope.click2 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = true;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	};
	$scope.click3 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = true;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	};
	$scope.click4 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = true;
		$scope.div6 = false;
		$scope.div7 = false;
	};
	$scope.click5 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = true;
		$scope.div7 = false;
	};
	$scope.click6 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = true;
	};

	$scope.bclick2 = function(){
		$scope.div1 = true;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	}

	$scope.bclick3 = function(){
		$scope.div1 = false;
		$scope.div2 = true;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	}

	$scope.bclick4 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = true;
		$scope.div4 = false;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	}

	$scope.bclick5 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = true;
		$scope.div5 = false;
		$scope.div6 = false;
		$scope.div7 = false;
	}

	$scope.bclick6 = function(){
		$scope.div1 = false;
		$scope.div2 = false;
		$scope.div3 = false;
		$scope.div4 = false;
		$scope.div5 = true;
		$scope.div6 = false;
		$scope.div7 = false;
	}

});