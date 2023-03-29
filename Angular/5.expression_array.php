<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<div ng-app="" ng-init="linh=['ABC',13,'Rất ngon']">
	<p>{{linh[0]}}</p>
	<!-- chú ý là trong mảng phải có '' đối với dữ liệu kiểu string nếu ko sẽ gây lỗi  -->
</body>
</html>