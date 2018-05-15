angular.module('note').controller('loginController', function($scope, $http, $state) {
  console.log('Hello');


  templateUrl: "login/loginview.html",
  $scope.sendData = _sendData;


  var loginUrl = 'http://localhost:3000/login';

  function _sendData(){
    console.log($scope.username);
    console.log($scope.password);

    $http.post(loginUrl, {username: $scope.username, password: $scope.password}).then(function (response){
            console.log(response);
            var token = response.data.token[0];
            console.log(token);
            localStorage.setItem('Clef', token);
            localStorage.setItem('Author', $scope.username);

            if (token) $state.go('message');
            else $state.go ('nouveau');
          }, function(error) {
            console.log('error here', error)
          });
        }
    });
