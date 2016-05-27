var app = angular.module('AppControllers', []);

app.controller('HomeController', function ($scope, $location, $http) {

    $http.get('http://localhost:3000/rest_news.json').success(function (result) {
        news = result.news;
        $scope.news = news;
    }).error(function (err) {
        console.log("unable to get news", err);
    });

    $scope.showDetails = function (id) {
        $location.path('/newsDetail/' + id);
    }

});

app.controller('NewsDetailController', function ($scope, $routeParams, $http, $location) {

    var id = $routeParams.id;
    var url = "http://localhost:3000/restnews/view/" + id + ".json";

    $http.get(url).success(function (result) {
        $scope.newsdetail = result.news.News;
    });

    $scope.goBack = function () {
        $location.path('/home/');
    }


});