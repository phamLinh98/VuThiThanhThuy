<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>String</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<div ng-app="" ng-init="FirstName='Linh';SecondName='Pham'">
		<p>FullName is : {{FirstName+" "+ SecondName}}</p>
		<!-- <p ng-bind = "FirstName+ ' '+ SecondName"></p> -->
	</div>
</body>
</html>