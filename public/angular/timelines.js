var app = angular.module("timeline", ['ngSanitize', 'infinite-scroll'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
  });

app.controller("TimelineCtrl", function($scope, $http) {
  var app = this;
  var user_package_id = "all"
  
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
    $scope.get_timeline(user_package_id);
  };

  // Get the timeline for the users packages with 
  $scope.get_timeline = function(user_package_id) {
    $http.get("/user_packages/" + user_package_id + "/clearview?take=" + $scope.take + "&skip=" + $scope.skip)
      .success(function(data) {
        app.entries = data;
        $scope.busy = false;
    });
  }

  // Get all the users packages
  $http.get("/user_packages/json")
    .success(function(data) {
      app.packages = data;
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
    
    $http.get("/user_packages/" + $scope.activityPackage + "/clearview?take=" + $scope.take + "&skip=" + $scope.skip)
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