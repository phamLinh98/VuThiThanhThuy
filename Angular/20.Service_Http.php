<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTTP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app = "RunningApp" ng-controller="Controller">
	<p>{{GetHTTP}}</p>
</div>
<script>
	var app = angular.module("RunningApp",[]);
	app.controller("Controller",function($scope,$http){
		$http.get("test.html").then(function(response){
			$scope.GetHTTP = response.data;
		});
	});
</script>
</body>
</html>