<!doctype html>
<html ng-app="project">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular-resource.min.js">
    </script>
    <script src="https://cdn.firebase.com/v0/firebase.js"></script>
    <script src="http://firebase.github.io/angularFire/angularFire.js"></script>
    <script src="project.js"></script>
</head>
<body>

<h2>JavaScript Projects</h2>
<div ng-view></div>
<img src="images/post-it-thank-you-2.jpg" border="0" usemap="#post_it_mapping">
<map name="post_it_mapping">
<area shape="rect" coords="285,401,460,454" href="index.php" alt="BACK TO HOMEPAGE">
</map>

<script>
    angular.module('project', ['firebase']).
        value('fbURL', 'https://angularjs-projects.firebaseio.com/').
        factory('Projects', function(angularFireCollection, fbURL) {
            return angularFireCollection(fbURL);
        }).
        config(function($routeProvider) {
            $routeProvider.
                when('/', {controller:ListCtrl, templateUrl:'index.php'}).
                when('/edit/:projectId', {controller:EditCtrl, templateUrl:'detail.html'}).
                when('/new', {controller:CreateCtrl, templateUrl:'detail.html'}).
                otherwise({redirectTo:'/'});
        });

    function ListCtrl($scope, Projects) {
        $scope.projects = Projects;
    }

    function CreateCtrl($scope, $location, $timeout, Projects) {
        $scope.save = function() {
            Projects.add($scope.project, function() {
                $timeout(function() { $location.path('/'); });
            });
        }
    }

    function EditCtrl($scope, $location, $routeParams, angularFire, fbURL) {
        angularFire(fbURL + $routeParams.projectId, $scope, 'remote', {}).
            then(function() {
                $scope.project = angular.copy($scope.remote);
                $scope.project.$id = $routeParams.projectId;
                $scope.isClean = function() {
                    return angular.equals($scope.remote, $scope.project);
                }
                $scope.destroy = function() {
                    $scope.remote = null;
                    $location.path('/');
                };
                $scope.save = function() {
                    $scope.remote = angular.copy($scope.project);
                    $location.path('/');
                };
            });
    }
</script>
<form name="myForm">
    <div class="control-group" ng-class="{error: myForm.name.$invalid}">
        <label>Name</label>
        <input type="text" name="name" ng-model="project.name" required>
    <span ng-show="myForm.name.$error.required" class="help-inline">
    Required</span>
    </div>

    <div class="control-group" ng-class="{error: myForm.site.$invalid}">
        <label>Website</label>
        <input type="url" name="site" ng-model="project.site" required>
    <span ng-show="myForm.site.$error.required" class="help-inline">
    Required</span>
    <span ng-show="myForm.site.$error.url" class="help-inline">
    Not a URL</span>
    </div>

    <label>Description</label>
    <textarea name="description" ng-model="project.description"></textarea>

    <br>
    <a href="#/" class="btn">Cancel</a>
    <button ng-click="save()" ng-disabled="isClean() || myForm.$invalid"
            class="btn btn-primary">Save</button>
    <button ng-click="destroy()"
            ng-show="project.$id" class="btn btn-danger">Delete</button>
</form>
</body>
</html>

<!--Size chart - clothing, topwear, jeans 5-->
<!--My Account -> User Order details page (after clicking on the order in the myaccount page, order table.)-->
<!--"Track your order" page, as per the current site theme.-->
<!--Wishlist page as per the current site theme.-->
<!--testimonial page UI per site theme.-->
<!--As seen on page-->
<!--About Us, Join Us-->
<!--Site Map-->


<div class="left hide-on-small-device">
    <ul class="breadcrumbs">
        <li data-tooltip class="has-tip" title="Go to Home Page"><a href="http://www.donebynone.com/">Home</a></li>
        <li>&gt;</li>
        <li><a title="" href="http://www.donebynone.com/clothing.html">Clothing</a></li>
        <li>&gt;</li>
        <li>Topwear</li>
    </ul>
</div>
