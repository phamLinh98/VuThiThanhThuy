<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<div data-ng-app = "">
	<p>Input something to box:</p>
	<p>Name: <input type="text" data-ng-model="name"></p>
	<p data-ng-bind ="name"></p>
	</div>
	
</body>
</html>