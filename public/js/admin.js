var app = angular.module('adminAngularApp', ['adminCtrl','adminService'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });