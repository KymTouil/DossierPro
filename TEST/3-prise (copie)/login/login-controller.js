angular.module('note').controller('loginController', function($scope, $http, $state) {
  console.log('Hello');
  $scope.sendData = _sendData;


  var loginUrl = 'http://localhost:8000/login';

  function _sendData(){
    console.log($scope.username);
    console.log($scope.password);

    $http.post(loginUrl, {username: $scope.username, password: $scope.password}).then(function (response){
            console.log(response);
            var token = response.data.token[0];
            console.log(token);
            localStorage.setItem('Clef', token);
            localStorage.setItem('Author', $scope.username);

            if (token) $state.go('homepage');
            else $state.go ('create-account');
          }, function(error) {
            console.log('error here', error)
          });
        }
    });