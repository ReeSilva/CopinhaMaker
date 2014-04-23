function HomeController($scope) {
    $scope.novostimes = [];
    $scope.times = [];

    $scope.startCopinha = function () {
        var $total = $scope.qtdTimes;
        for (var i = 0; i < $total; i++){
            $scope.novostimes.push({key:i});
        }
    };

    $scope.addTime = function () {

    };

    $scope.rmTime = function () {

    };
}
