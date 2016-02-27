(function() {

angular.module('corApp', [])

.controller('mainController', function($scope, $http) {
	var that = $scope;
	that.hurl = '{"url": "", "oauth":""}';
  that.respy = '';

    that.poster = function() {
      $http({
        method: 'POST',
        url: 'test.php',
        data: that.hurl
      })
      .then(function successCallback(response) {
        that.respy = response.data;
      }, 
      function errorCallback(response) {
          that.respy = response.status;
      }); // End then

    }; // End poster function

  });  // End the controller

})();  // End main
