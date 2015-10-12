(function(){

angular.module('corApp', [])

.controller('mainController', function($scope, $http) {
	var that = $scope;
	that.hurl = '';
  that.respy = '';
	that.success = false;

    that.poster = function() {
      $http({
        method: 'POST',
        url: 'cor.php',
        data: that.hurl
      })
      .then(function successCallback(response) {
        // this callback will be called asynchronously
        // when the response is available
        that.success = true;
        that.respy = response.data;
      }, 
      function errorCallback(response) {
          // called asynchronously if an error occurs
          // or server returns response with an error status.
          that.success = false;
          that.respy = response.status;
      }); // End then

    }; // End poster function

    that.cleaner = function() {
      that.hurl = ''; 
      that.respy = ''; 
    };
	
  });  // End the controller

})();  // End main