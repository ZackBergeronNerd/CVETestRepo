angular.module('angulartics.cve', ['angulartics'])
	.config(['$analyticsProvider', function ($analyticsProvider) {
		$analyticsProvider.virtualPageviews(false);
		$analyticsProvider.registerPageTrack(function (path) {
			//console.log(path);
		});

		$analyticsProvider.registerEventTrack(function (action, properties) {
			//console.log(action);
			//console.log(properties);
		});
 }]);
