var cafePublisherApp = angular.module('cafePublisherApp', [
    'ngRoute',
    'cafePublisherControllers'
]);

cafePublisherApp.config(
function($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    
    $routeProvider.
    when('/app/dashboard', {
        templateUrl: 'partials/dashboard.html',
        controller: 'DashboardCtrl'
    }).
    when('/app/fuse', {
        templateUrl: 'partials/fuse.html',
        controller: 'FuseCtrl'
    }).
    when('/app/reports', {
        templateUrl: 'partials/reports.html',
        controller: 'ReportsCtrl'
    }).
    when('/app/accounts', {
        templateUrl: 'partials/accounts.html',
        controller: 'AccountsCtrl'
    }).
    when('/app/settings', {
        templateUrl: 'partials/settings.html',
        controller: 'SettingsCtrl'
    }).
    otherwise({
        redirectTo: '/app/dashboard'
    });
    
});
