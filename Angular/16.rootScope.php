<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<title>rootScope</title>
</head>
<body ng-app="RunningApp">
	<p>noi rootScope tac dong</p>
	<h1>Ke Thua tu rootScope:{{name}}</h1>
    <div ng-controller = "Controller1">
	<p>noi scope tac dong</p>
	<h1>Ke Thua tu scope:{{name}}</h1>
    </div>
    <div ng-controller="Controller2">
	<p>noi rootScope tac dong</p>
	<h1>Ke Thua tu rootscope:{{name}}</h1>
    </div>
	<script>
		var app = angular.module("RunningApp",[]);
		app.run(function($rootScope){
			$rootScope.name = "ThanhThuy";
		});
		app.controller("Controller1",function($scope){
			$scope.name = "TuanLinh";
		});
		app.controller("Controller2",function($scope){
			$scope.name = "VanDung";
		});
	</script>
</body>
</html>