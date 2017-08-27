angular.module('CrudApp', []).
  config(['$routeProvider', function($routeProvider) {
  //redirect page
  $routeProvider.
      when('/', {templateUrl: 'assets/tpl/lists.html', controller: ListCtrl}).
      when('/add-user', {templateUrl: 'assets/tpl/add-new.html', controller: AddCtrl}).
      when('/edit/:id', {templateUrl: 'assets/tpl/edit.html', controller: EditCtrl}).
      otherwise({redirectTo: '/'});
}]);

//List Control
function ListCtrl($scope, $http) {
  $http.get('api/users').success(function(data) {
    $scope.users = data;
  });
}

//Add Control
function AddCtrl($scope, $http, $location) {
  $scope.master = {};
  $scope.activePath = null;
  $scope.add_new = function(user, AddNewForm) {
    $http.post('api/add_user', user).success(function(){
      $scope.reset();
      $scope.activePath = $location.path('/');
    });

    $scope.reset = function() {
	  //Copy Value
      $scope.user = angular.copy($scope.master);
    };
    $scope.reset();
  };
}

function EditCtrl($scope, $http, $location, $routeParams) {
  var id = $routeParams.id;
  $scope.activePath = null;
  $http.get('api/users/'+id).success(function(data) {
    $scope.users = data;
  });

  //Update Control
  $scope.update = function(user){
    $http.put('api/users/'+id, user).success(function(data) {
      $scope.users = data;
      $scope.activePath = $location.path('/');
    });
  };
  
  //Delete Control
  $scope.delete = function(user) {
    console.log(user);
    var deleteUser = confirm('Are you absolutely sure you want to delete?');
    if (deleteUser) {
      $http.delete('api/users/'+user.id);
      $scope.activePath = $location.path('/');
    }
  };
}