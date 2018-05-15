var myApp = angular.module('note', ['ui.router']);

myApp.config(function($stateProvider, $urlRouterProvider) {
  var loginState = {
    name: 'login',
    url: '/login',
    templateUrl: 'login/login-view.html',
    controller: 'loginController'
  }

  var createState = {
    name: 'create-account',
    url: '/create-account',
    templateUrl: 'create-account/create-view.html',
    controller: 'createController'
  }

  var homeState = {
    name: 'homepage',
    url: '/homepage',
    templateUrl: 'homepage/home-view.html',
    controller: 'homeController'
  }

  $urlRouterProvider.otherwise('/login');

  $stateProvider.state(loginState);
  $stateProvider.state(createState);
  $stateProvider.state(homeState);
});
