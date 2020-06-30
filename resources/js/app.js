require('./bootstrap');
require('angular');

var myApp = angular.module('myApp',[]);
myApp.controller('itemsController',function ($scope, $http) {
    $scope.items = [];
    $scope.init = function () {
        $http.get('http://homestead.test/getItems')
            .success(function (data) {

            })
    }

});
