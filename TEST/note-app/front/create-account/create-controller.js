angular.module('note').controller('createController', function($scope, $http){
  $scope.create = _create;

  function _create() {
   
    if ($scope.username && $scope.password && $scope.email) {
      var newUser = {
        username: $scope.username,
        password: $scope.password,
        email: $scope.email,
        firstName: $scope.firstName,
        lastName: $scope.lastName,
        age: $scope.age
      };

      $http.post('http://localhost:3000/create-account', newUser).then(
        function(response) {
          alert('votre compte a bien été créé');
        },
        function(response) {
          alert(response.data);
        }
      );
    }
    else {
      alert('merci de renseigner les champs obligatoires');
    }
  };
});
