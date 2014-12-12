var cafePublisherApp = angular.module('cafePublisherApp', [
    'ngRoute',
    'cafePublisherControllers'
]);

cafePublisherApp.config(['$routeProvider',
function($routeProvider) {
    $routeProvider.
    when('/dashboard', {
        templateUrl: 'partials/dashboard.html',
        controller: 'DashboardCtrl'
    }).
    otherwise({
        redirectTo: '/dashboard'
    });
}]);
