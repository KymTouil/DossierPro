angular.module('note').controller('createController', function($scope, $http){

     
  
  $scope.checkPass = _checkPass;
  function _checkPass()
  {
    var champA = document.getElementById("password ").value;
    var champB = document.getElementById("rpassword").value;
    var div_comp = document.getElementById("divcomp");
     
    if(champA == champB)
    {
      divcomp.innerHTML = "Correct";
    }
    else
    {
      divcomp.innerHTML = "Erreur !";
      alert('les mots de passe sont différents');
    }
  }

  $scope.create = _create;
  function _create() {

      function _sendData(username,password){

         if(champA == champB)
    {
      divcomp.innerHTML = "Correct";
    }
    else
    {
      divcomp.innerHTML = "Erreur !";
      alert('les mots de passe sont différents');
    }
        }
   
    if ($scope.username && $scope.password && $scope.email) {

// utiliser fonction function _checkPass() et ngchange dans account.html


      var newUser = {
        username: $scope.username,
        password: $scope.password,
        email: $scope.email,
        firstName: $scope.firstName,
        lastName: $scope.lastName,
        age: $scope.age
      };

      $http.post('http://localhost:8000/create-account', newUser).then(
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


