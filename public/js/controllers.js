var cafePublisherControllers = angular.module('cafePublisherControllers', []);

cafePublisherControllers.controller('DashboardCtrl', ['$scope', '$http',
function ($scope, $http) {
    
}]);

cafePublisherControllers.controller('FuseCtrl', ['$scope', '$http',
function ($scope, $http) {
    
}]);

cafePublisherControllers.controller('ReportsCtrl', ['$scope', '$http',
function ($scope, $http) {
    
}]);

cafePublisherControllers.controller('AccountsCtrl', ['$scope', '$http',
function ($scope, $http, $window) {
	$scope.accounts = 'List';

	$scope.authorizeInstagram = function() {
		console.log('authorize instagram called');
	};
    
	$scope.authorizeTumblr = function() {
		console.log('authorize tumblr called');
	};

	$scope.authorizeTwitter = function() {
		var twitterWindow = window.open('/app/social-accounts/twitter-login', 'Authorize Twitter', "width=800, height=500");
		twitterWindow.callback = function(data) {

		};
	};

}]);

cafePublisherControllers.controller('SettingsCtrl', ['$scope', '$http',
function ($scope, $http) {
	$scope.isSaved = false;
	
	$http.get('/api/users/me')
	.success(function(data) {
		$scope.data = data;
	})
	.error(function(reason) {
		console.log('error while fetching from api');
	});


	$scope.saveSettings = function(data) {
		console.log('settings form submitted');

		$http.post('/api/users/me', $scope.data).
		success(function(data, status, headers, config) {
			$scope.data = data;

			$scope.isSaved = true;
		}).
		error(function(data, status, headers, config) {
			console.log('error while trying to save to the api');
		});

		
	};
}]);