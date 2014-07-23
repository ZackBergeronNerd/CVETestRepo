var app;
app = angular.module("timeline", ['ngSanitize', 'infinite-scroll'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

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
    
    // Get all the users packages
    $http.get("/user_websites/json")
      .success(function(data) {
        app.packages = data;
        $scope.activityPackage = app.packages[0].id;
        $scope.user_package_id = $scope.activityPackage;
        $scope.get_timeline();
        $scope.get_overview();
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