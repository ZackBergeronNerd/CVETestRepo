var app = angular.module("cveApp", ['ngSanitize', 'angulartics', 'angulartics.cve'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('~!');
	$interpolateProvider.endSymbol('!~');
});

app.controller("cveCtrl", function($scope, $http, $analytics, $location) {

	// Catching different situations for the way packages are delivered.
	if(typeof $location.search().a == 'undefined' && typeof $location.search().c != 'undefined') {
		$scope.agent = undefined;
		jQuery.removeCookie('cve_agent');
		$scope.client = $location.search().c;
	} else if(typeof $location.search().a != 'undefined' && typeof $location.search().c != 'undefined') {
		$scope.agent = $location.search().a;
		$scope.client = $location.search().c;
	} else if(typeof $location.search().a == 'undefined' && typeof $location.search().c == 'undefined') {
		if(jQuery.cookie('cve_client')) {
			$scope.client = jQuery.cookie('cve_client');
		} else {
			$scope.client = undefined;
		}

		if(jQuery.cookie('cve_agent')) {
			$scope.agent = jQuery.cookie('cve_agent');
		} else {
			$scope.agent = undefined;
		}
	} else if(typeof $location.search().a != 'undefined' && typeof $location.search().c == 'undefined') {
		$scope.client = undefined;
		jQuery.removeCookie('cve_agent');
		$scope.agent = $location.search().a;
	}
	// End of catching logic for package variations

	// Grab the title of the page and that path to the page
	$scope.title = jQuery('title').html();
	$scope.page = window.location.pathname;
	$scope.domain = $location.host(); // Domain of the package for associating with package owner
    if(typeof $location.search().bypass != 'undefined') {
        $scope.bypass = $location.search().bypass;
    } else {
        $scope.bypass = undefined;
    }

    // Debugging output
    console.log("Title: " + $scope.title);
    console.log("Page: " + $scope.page);
    console.log("Domain: " + $scope.domain);
    console.log("client: " + jQuery.cookie('cve_client'));
    console.log("agent: " + jQuery.cookie('cve_agent'));

	// Set cookies determined by case statements above
	jQuery.cookie('cve_client', $scope.client, { expires: 365 });
	jQuery.cookie('cve_agent', $scope.agent, { expires: 365 });

	// Logic if the website contact info has been disabled or not and fetch info
    $http.jsonp("https://cve.io/user_websites/weebly?callback=JSON_CALLBACK",
        {   params: {
                domain: $scope.domain,
                agent: $scope.agent
            }
        }).success(function(json) {
            console.log(json);

            if(json.disable_contact) {
                $scope.disable_contact = json.disable_contact;
                console.log('Contact Information has been disabled..');
            } else {
                $scope.owner = json.owner;
                $scope.agent = json.agent;
            }

            $scope.is_private = json.is_private;

            console.log($scope.is_private);
            // Logic if the website is marked as private
            if($scope.is_private != false && typeof $scope.client == 'undefined' && typeof $scope.bypass == 'undefined') {
                console.log("private");
                // Show popup window
                document.location = "#clientModal";

                // Function for saving the client information from the modal window
                $scope.saveClient = function () {
                    $http.jsonp('https://cve.io/clients/modal?callback=JSON_CALLBACK',
                        {
                            params: {
                                first_name: $scope.client_first_name,
                                last_name: $scope.client_last_name,
                                email: $scope.client_email,
                                phone: $scope.client_phone,
                                domain: $scope.domain,
                                agent: jQuery.cookie('cve_agent')
                            }
                        }).success(function(json) {
                            $scope.client = json.client;
                            jQuery.cookie('cve_client', $scope.client, { expires: 365 });

                            $scope.remoteTrack();
                            // Redirect to clear modal
                            document.location="#!";

                        });
                };
            } else {
                $scope.remoteTrack();
            }

        });

	// Get email ID to send back to mark package_opened
	if(typeof $location.search().e != 'undefined') {
		$scope.email = $location.search().e;
	} else {
		$scope.email = undefined;
	}

	// Logic for sending analytics to CVE
    $scope.remoteTrack = function () {
        $http.jsonp('https://cve.io/remote_track?callback=JSON_CALLBACK',
            {	params: {
                title: $scope.title,
                page: $scope.page,
                domain: $scope.domain,
                email: $scope.email,
                client: jQuery.cookie('cve_client'),
                agent: jQuery.cookie('cve_agent')
            }
            }).success(function(json) {
                console.log(json);
            });
    }
});
