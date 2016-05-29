var app = angular.module('AppControllers', []);

app.controller('HomeController', function ($scope, $location, $http) {

    $scope.loading = true;

    $http.get('http://solicitatiecodedor.azurewebsites.net/rest_news.json').success(function (result) {
        news = result.news;
        $scope.news = news;
        $scope.loading = false;
    }).error(function (err) {
        console.log("unable to get news", err);
    });

    $scope.showDetails = function (id) {
        $location.path('/newsDetail/' + id);
    }

});

app.controller('NewsDetailController', function ($scope, $routeParams, $http, $location) {

    $scope.loading = true;

    var id = $routeParams.id;
    var url = "http://solicitatiecodedor.azurewebsites.net/restnews/view/" + id + ".json";

    $http.get(url).success(function (result) {
        $scope.newsdetail = result.news.News;
        $scope.loading = false;
    });

    $scope.goBack = function () {
        $location.path('/home/');
    }


});