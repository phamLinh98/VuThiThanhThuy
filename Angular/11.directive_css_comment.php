<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Directive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="myApp">
	<!-- directive: w3-test-directive -->
<script>
var app = angular.module("myApp", []);
app.directive("w3TestDirective", function() {
    return {
        restrict : "M",
        replace : true,
        template : "<h1>Made by a directive!</h1>"
    };
});
//Comment thi restrict la M
</script>
</body>
</html>