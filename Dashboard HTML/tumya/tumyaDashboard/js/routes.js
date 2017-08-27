'use strict';

/**
 * Route configuration for the RDash module.
 */
angular.module('RDash').config(['$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {

        // For unmatched routes
        $urlRouterProvider.otherwise('/');

        // Application routes
        $stateProvider
            .state('index', {
                url: '/',
                templateUrl: 'templates/dashboard.html'
            })
			.state('tablesHallOfFrame', {
                url: '/tablesHallOfFrame',
                templateUrl: 'templates/tablesHallOfFrame.html'
            })
			.state('tablesKebya', {
                url: '/tablesKebya',
                templateUrl: 'templates/tablesKebya.html'
            });
			.state('tablesSubya', {
                url: '/tablesSubya',
                templateUrl: 'templates/tablesSubya.html'
            })
			.state('tablesTumya', {
                url: '/tablesTumya',
                templateUrl: 'templates/tablesTumya.html'
            })
			.state('tablesScoreResult', {
                url: '/tablesScoreResult',
                templateUrl: 'templates/tablesScoreResult.html'
            });
    }
]);