var cafePublisherApp = angular.module('cafePublisherApp', [
    'ngRoute',
    'cafePublisherControllers'
]);

cafePublisherApp.config(
function($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    
    $routeProvider.
    when('/app/dashboard', {
        templateUrl: 'js/partials/dashboard.html',
        controller: 'DashboardCtrl'
    }).
    when('/app/reports', {
        templateUrl: 'js/partials/reports.html',
        controller: 'ReportsCtrl'
    }).
    when('/app/accounts', {
        templateUrl: 'js/partials/accounts.html',
        controller: 'AccountsCtrl'
    }).
    when('/app/settings', {
        templateUrl: 'js/partials/settings.html',
        controller: 'SettingsCtrl'
    }).
    otherwise({
        redirectTo: '/app/dashboard'
    });
    
});
