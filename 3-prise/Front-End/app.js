var myApp = angular.module('note', ['ui.router']);

myApp.config(function($stateProvider, $urlRouterProvider) {
  var loginState = {
    name: 'login',
    url: '/',
    templateUrl: 'login/loginview.html',
    controller: 'loginController'
  }

  var createState = {
    name: 'nouveau',
    url: '/create-account',
    templateUrl: 'nouveau/account.html',
    controller: 'createController'
  }

  var homeState = {
    name: 'message',
    url: '/message/',
    templateUrl: 'message/messageview.html',
    controller: 'messageController'
  }

    var detailState = {
    name: 'detail',
    url: '/detail/',
    templateUrl: 'message/messageview2.html',
    params: {'titre':null, 'contenu':null},
    controller: 'messageController'
  }

  $urlRouterProvider.otherwise('/');

  $stateProvider.state(loginState);
  $stateProvider.state(createState);
  $stateProvider.state(homeState);
  $stateProvider.state(detailState);
});
