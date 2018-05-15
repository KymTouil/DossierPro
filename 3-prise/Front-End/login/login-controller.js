angular.module('note').controller('loginController', function($scope, $http, $state) {
  console.log('Hello');
  $scope.sendData = _sendData;
  

  var loginUrl = 'http://localhost:8000/login';

  function _sendData(username,password){
    console.log("username",username);
    console.log("password",password);

    $http.post(loginUrl, {username: username, password: password}).then(function (response){
            console.log(response);
            var token = response.data.token[0];
            console.log(token);
            localStorage.setItem('Clef', token);
            localStorage.setItem('Author', username);

            if (token) $state.go('message');
            else $state.go ('create-account');
          }, function(error) {
            console.log('error here', error)
          });
        }
    });