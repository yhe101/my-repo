
var app=angular.module('App',[]);
app.controller('myCtrl',['$scope','$http','$log',function($scope,$http,$log){
	$scope.frm = {
		uniqueness: 'No',
	    type:'Name'
	};

	$http.get('http://localhost:80/js/popData.php')
		.success(function(data) {
			$scope.attribute = data;
		})
		.error(function(err) {
			console.log($log.error(err));
		})

	$scope.pushData = function(params) {
		$http.post('http://localhost:80/js/pushData.php',{"attribute_name":params.name,
			"attribute_type":params.type,"uniqueness":params.uniqueness,"weight":params.weight})
			.success(function(data) {
				$scope.attribute =data;
			})
			.error(function(err) {
				$log.error(err);
			})
	}

	$scope.removeData = function(params) {
		var cnfrm = confirm("Are you sure to delete?");
		if(cnfrm) {
			$http.post('http://localhost:80/js/removeData.php', {'attribute_id':params})
			.success(function(data) {
				$scope.attribute = data;
			})
			.error(function(err) {
				$log.error(err);
			})
		} else {
			// 
		}
		
	}
}]);




