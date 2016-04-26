var app = angular.module('angularApp', ['mainCtrl','formCtrl','formService'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });