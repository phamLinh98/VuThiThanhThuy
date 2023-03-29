<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Service</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="RunningApp" ng-controller = "Controller">
<p>{{Url}}</p>
</div>
<script>
	var app = angular.module("RunningApp",[]);
	app.controller("Controller",function($scope,$location){
		$scope.Url = $location.absUrl();
	});
	//http://127.0.0.1/Angular/19.Service.php
</script>
</body>
</html>