<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Click to change HTML</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app ="RunningApp" ng-controller ="Controller">
	<h1 ng-click="changeName()">{{name}}</h1>
</div>
<script>
	var app = angular.module("RunningApp",[]);
	app.controller("Controller",function($scope){
		$scope.name = "LinhThuSinh";
		$scope.changeName = function(){
			$scope.name = "Success";
		}
	});
</script>
</body>
</html>