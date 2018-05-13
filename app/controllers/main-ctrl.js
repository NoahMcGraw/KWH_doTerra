app.controller('mainCtrl', ['$scope', function($scope){
    $scope.toMyDoTerra = function() {
        window.open("http://my.doterra.com/katewilliamshealth");
    }
    $scope.section_1 = "Let's Begin";
    $scope.section_2 = "Here's Why";
    $scope.section_3 = "Getting Started";
    $scope.navToSection1 = function() {
        document.querySelector('#section_1').scrollIntoView({
            behavior: 'smooth'
        });
    }
    $scope.navToSection2 = function() {
        document.querySelector('#section_2').scrollIntoView({
            behavior: 'smooth'
        });
    }
    $scope.navToSection3 = function() {
        document.querySelector('#section_3').scrollIntoView({
            behavior: 'smooth'
        });
    }
}]);