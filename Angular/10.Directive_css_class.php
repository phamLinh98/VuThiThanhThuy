<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Directive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app= "RunningApp">
<div class="w3-test-directive">
	<script>
var app = angular.module("RunningApp",[]);
app.directive("w3TestDirective",function(){
	return {
	restrict : "C", //important
	template : "<h2>Ahihi</h2>"
}
});
//Co nhieu cach de goi directive, neu dat trong class thi phai co restric : "C" khi return
</script>
</div>
</body>
</html>