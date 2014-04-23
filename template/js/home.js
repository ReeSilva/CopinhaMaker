function HomeController($scope) {
    $scope.times = [];

    $scope.addTimes = function () {
        $scope.times.push({nome:$scope.novoTime});
        $scope.novoTime = '';
    };

    $scope.rmTime = function () {

    };
}
