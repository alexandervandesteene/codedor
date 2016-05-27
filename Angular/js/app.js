var orderApp = angular.module('AppCodedor', ['ngRoute', 'ngMaterial', 'AppControllers']);

orderApp.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'HomeController'
        })
        .when('/newsDetail/:id', {
            templateUrl: 'views/newsdetail.html',
            controller: 'NewsDetailController'
        })
        .otherwise({
            redirectTo: '/'
        });
});