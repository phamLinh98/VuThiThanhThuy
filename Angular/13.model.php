<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Model Controller</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="RunningApp" ng-controller ="Controller">
<input ng-model="name">
<h2>{{name}}</h2>
</div>
<script>
	var app = angular.module("RunningApp",[]);
	app.controller("Controller",function($scope){
		$scope.name = "Linh";
	});
</script>
</body>
</html>