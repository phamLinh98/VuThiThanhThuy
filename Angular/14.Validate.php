<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validate</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<form ng-app= "" name ="myForm">
Email : <input type="email" name="myAddress" ng-model="text">
<span ng-show="myForm.myAddress.$error.email">Fail</span>
</form>
</body>
</html>