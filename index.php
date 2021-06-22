<!DOCTYPE HTML>
<html lang="pt-br">
  
<head>  
  <link rel="shortcut icon" href="https://app-php-my.herokuapp.com/favicon.ico" type="image/x-icon">
	
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
  <link href="css/stylesheet.css" rel="stylesheet"/>
  <script src="scripts/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>  
  
<body>
  
  
<?php
	$servername = "sql10.freemysqlhosting.net";
	$username = "sql10420853";
	$password = "8uie8DbjXG";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=sql10420853", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  echo "Connected successfully";
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}
?> 
  
  
<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in myData">
    {{ x.nome + ', ' + x.idade }}
  </li>
</ul>

</div>

  
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("api.php?name=pen").then(function (response) {
      $scope.myData = response.data.data.empregados;
  });
});
</script>

</body>
</html> 
