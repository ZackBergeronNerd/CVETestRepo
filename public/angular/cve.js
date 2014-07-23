var app = angular.module("cve", ['ngSanitize', 'infinite-scroll'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

// Dashboard Controller to controller packages at a glance and most active tables
app.controller("DashboardCtrl", function($scope, $http) {
    var app = this;

    $scope.glance_init = function() {
      $scope.loadWebsites();
    };

    $scope.loadWebsites = function() {
        // Get all the users packages
        $http.get("/user_websites/json")
            .success(function(data) {
                app.websites = data;
                $scope.userWebsites = app.websites[0].id;
                $scope.user_website_id = $scope.userWebsites;
                $scope.get_overview();
            });
    }

    $scope.get_overview = function() {
        $http.get("/user_websites/" + $scope.user_website_id + "/glance")
            .success(function(data) {
                app.overview = data;
            });
    }

    $scope.websiteSelected = function() {
        $scope.user_website_id = $scope.userWebsites;
        $scope.get_overview();
    };
});

// Main timeline controller, only shows package opens
app.controller("TimelineCtrl", function($scope, $http) {
    var app = this;
    var user_website_id = "all"

    $scope.setDefaults = function() {
        $scope.take = 10;
        $scope.skip = 0;
        $scope.busy = true;
        $scope.finished = false;
    }
    $scope.setDefaults();

    $scope.init = function(take, skip) {
        $scope.take = take;
        $scope.skip = skip;
        $scope.get_timeline(user_website_id);
    };

    // Get the timeline for the users packages with
    $scope.get_timeline = function(user_website_id) {
        $http.get("/user_websites/" + user_website_id + "/clearview?take=" + $scope.take + "&skip=" + $scope.skip)
            .success(function(data) {
                app.entries = data;
                $scope.busy = false;
            });
    }

    // Get all the users packages
    $http.get("/user_websites/json")
        .success(function(data) {
            var allPackages = {
                id: "all",
                name: "All Packages"
            }
            app.packages = data;
            app.packages.unshift(allPackages);
            $scope.activityPackage = app.packages[0].id;
        });

    $scope.activitySelected = function() {
        // Reset all defaults for new package scrolling
        $scope.setDefaults();
        $scope.get_timeline($scope.activityPackage);
    };


    $scope.loadMore = function() {
        if($scope.busy || $scope.finished) return;

        $scope.busy = true;
        $scope.skip += $scope.take;

        $http.get("/user_websites/" + $scope.activityPackage + "/clearview?take=" + $scope.take + "&skip=" + $scope.skip)
            .success(function(data) {
                if(data.length) {
                    app.entries.push.apply(app.entries, data);
                } else {
                    $scope.finished = true;
                }
                $scope.busy = false;
            }).error(function() {
                $scope.busy = false;
                $scope.finished = true;
            });
    };

});

// Client Timeline Controller, works slightly different then main timeline controller
app.controller("ClientTimelineCtrl", function($scope, $http) {
    var app = this;

    $scope.setDefaults = function() {
        $scope.take = 10;
        $scope.skip = 0;
        $scope.busy = true;
        $scope.finished = false;
    }
    $scope.setDefaults();

    $scope.init = function(take, skip, client_id) {
        $scope.take = take;
        $scope.skip = skip;
        $scope.client_id = client_id;
        console.log(location.hash);

        $('html, body').animate({
            scrollTop: $(location.hash).offset().top - 160
        }, 1000);

        // Get all the users packages
        $http.get("/user_websites/json/" + $scope.client_id)
            .success(function(data) {
                app.packages = data;
                if(app.packages.length) {
                    $scope.activityPackage = app.packages[0].id;
                    $scope.user_package_id = $scope.activityPackage;
                    $scope.get_timeline();
                    $scope.get_overview();

                    $(".personal-task").addClass('hide');
                    $("#pageviews_" + $scope.activityPackage).removeClass('hide');
                }
            });
    };

    // Get the timeline for the users packages with
    $scope.get_timeline = function() {
        $http.get("/clients/" + $scope.client_id + "/clearview/" + $scope.user_package_id + "?take=" + $scope.take + "&skip=" + $scope.skip)
            .success(function(data) {
                app.entries = data;
                $scope.busy = false;
            });
    }

    $scope.get_overview = function() {
        $http.get("/clients/" + $scope.client_id + "/overview/" + $scope.user_package_id)
            .success(function(data) {
                app.overview = data;
            });
    }

    $scope.activitySelected = function() {
        // Reset all defaults for new package scrolling
        $scope.setDefaults();
        $scope.user_package_id = $scope.activityPackage;
        $scope.get_timeline();
        $scope.get_overview();

        // Reload pageview table too
        $(".personal-task").addClass('hide');
        $("#pageviews_" + $scope.activityPackage).removeClass('hide');
    };


    $scope.loadMore = function() {
        if($scope.busy || $scope.finished) return;

        $scope.busy = true;
        $scope.skip += $scope.take;

        $http.get("/clients/" + $scope.client_id + "/clearview/" + $scope.user_package_id + "?take=" + $scope.take + "&skip=" + $scope.skip)
            .success(function(data) {
                if(data.length) {
                    app.entries.push.apply(app.entries, data);
                } else {
                    $scope.finished = true;
                }
                $scope.busy = false;
            }).error(function() {
                $scope.busy = false;
                $scope.finished = true;
            });
    };

});