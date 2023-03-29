<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Module</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app = "RunningApp"  li-test-directive>
</div>
<script>
var app = angular.module("RunningApp",[]);
	app.directive("liTestDirective",function(){
		return {
			template : "Alo Alo"
		};
	});
</script>
</body>
</html>