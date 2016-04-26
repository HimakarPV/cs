angular.module('adminCtrl', []).controller('adminController', function($scope, $http,Step){
    // Step.get().success(function(data){
    //     $scope.steps = data;
    // });
    // console.log("test");
    $scope.formdata = {};

    // $scope.addStep = function(data){
    //     $scope.step = {data};
    //     console.log($scope.step);
    //     $http({
    //         method : 'POST',
    //         url : '/admin/poststep',
    //         data : $.param($scope.step),
    //         headers : {'Content-Type':'application/x-www-form-urlencoded'}
    //     }).success(function(data) {
    //         console.log(data);
    //     });
    // };
    $scope.items = [
    {"itemId":1, "title":"Add Questions", "description":"Google Search Engine", 
    "sublinks":[
    {"title":"To Category 1", "href":""},
    {"title":"To Category 2", "href":""},
    {"title":"To Category 3", "href":""},
    {"title":"To Category 4", "href":""}
    ]}
    ];

    // Defaults
    $scope.sublinks = null;
    $scope.activeItem = null;

    // Default submenu left padding to 0
    $scope.subLeft = {'padding-left':'0px'};
    /*
     * Set active item and submenu links
     */
     $scope.showSubMenu = function(item,pos) {

        // Move submenu based on position of parent
        $scope.subLeft = {'padding-left':(80 * pos)+'px'};
        // Set activeItem and sublinks to the currectly
        // selected item.

        $scope.activeItem = item;
        // $scope.sublinks = item.sublinks;
		// console.log($scope.sublinks);

        if($scope.sublinks == null){
        	$scope.sublinks = item.sublinks ;
        }
        else if($scope.sublinks){
        	$scope.sublinks = null ;
        }
    };


});