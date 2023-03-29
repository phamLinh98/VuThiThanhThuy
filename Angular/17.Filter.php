<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="RunningApp" ng-controller="Person">
<p>Ten thang nay la:{{name | uppercase}}</p>
</div>
<script>
	  angular.module("RunningApp",[]).controller("Person",function($scope){
		$scope.name = "linh";
	});
	  //.uppercase();
</script>
</body>
</html>