/*! [PROJECT_NAME] | Suitmedia */

((window, document, undefined) => {

    const path = {
        css: `${myPrefix}assets/css/`,
        js : `${myPrefix}assets/js/vendor/`
    }

    const assets = {
        _objectFit      : `${path.js}object-fit-images.min.js`,
        _angular        : `${path.js}angular.min.js`,
        _angularRoute   : `${path.js}angular-route.min.js`,
        _angularSanitize: `${path.js}angular-sanitize.min.js`,
        _jquery         : `${path.js}jquery.min.js`
    }

    const Site = {
        enableActiveStateMobile() {
            if ( document.addEventListener ) {
                document.addEventListener('touchstart', () => {}, true)
            }
        },

        WPViewportFix() {
            if ( '-ms-user-select' in document.documentElement.style && navigator.userAgent.match(/IEMobile/) ) {
                let style = document.createElement('style')
                let fix = document.createTextNode('@-ms-viewport{width:auto!important}')

                style.appendChild(fix)
                document.head.appendChild(style)
            }
        },
        
        angular() {
            angular.module('hmtc-app', ['ngRoute', 'ngSanitize', 'slick'])

            .controller('mainController', ['$rootScope', '$scope', '$route', ($rootScope, $scope, $http, $route) => {
                $rootScope.pageLoading = true
                $rootScope.navPointer = {
                    onArticle: false,
                    onMedia: false,
                    onStory: false
                }
            }])

            .controller('homeController', ['$rootScope', '$scope', '$http', ($rootScope, $scope, $http) => {
                $scope.isPageActive = 1

                $scope.scrollEvent = () => {
                    const video = document.querySelector('.hero-video')
                    const scrollOffset = 150

                    const sectionPointer = {
                        onArticle: document.querySelector('.article-section').offsetTop - scrollOffset,
                        onMedia: document.querySelector('.media-section').offsetTop - scrollOffset,
                        onStory: document.querySelector('.story-section').offsetTop - scrollOffset
                    }

                    const navChanger = (onArticle, onMedia, onStory) => {
                        $rootScope.navPointer.onArticle = onArticle
                        $rootScope.navPointer.onMedia = onMedia
                        $rootScope.navPointer.onStory = onStory
                        $rootScope.$digest()
                    }
                    
                    window.addEventListener('scroll', () => {
                        let scrolled = window.pageYOffset
                        video.style.transform = `translateY(${scrolled * 0.22}px)`
                        
                        if ( scrolled >= sectionPointer.onMedia ) {
                            navChanger(false, true, false)
                        } else if ( scrolled >= sectionPointer.onStory ) {
                            navChanger(false, false, true)
                        } else if ( scrolled >= sectionPointer.onArticle ) {
                            navChanger(true, false, false)
                        } else {
                            navChanger(false, false, false)
                        }
                    })
                }

                $scope.init = () => {
                    $rootScope.pageLoading = false
                    setTimeout(() => {
                        $scope.scrollEvent()
                    }, 500)
                }
            }])

            .config(['$routeProvider', '$locationProvider', ($routeProvider, $locationProvider) => {
                $routeProvider
                .when('/', {
                    templateUrl: 'home.php',
                    controller: 'homeController'
                })
                .when('/articles', {
                    templateUrl: 'article-list.php'
                })
                .when('/media', {
                    templateUrl: 'media-list.php'
                })
                .when('/story', {
                    templateUrl: 'story.php'
                })
                .when('/article/:articleId?', {
                    templateUrl: 'article-detail.php'
                })
                .otherwise({
                    redirectTo: '/'
                })
            }])

            .directive('ngReady', ['$parse', ($parse) => {
                return {
                    restrict: 'A',
                    link: function( $scope, elem, attrs ) {    
                       elem.ready(function(){
                         $scope.$apply(function(){
                             var func = $parse(attrs.ngReady);
                             func($scope);
                         })
                       })
                    }
                 }
             }])
             
        }
    }

    Promise.all([
        
    ]).then(() => {
        for (let fn in Site) {
            Site[fn]()
        }
        window.Site = Site
    })

    function exist(selector) {
        return new Promise((resolve, reject) => {
            let $elem = $(selector)

            if ( $elem.length ) {
                resolve($elem)
            } else {
                reject(`no element found for ${selector}`)
            }
        })
    }

    function load(url) {
        return new Promise((resolve, reject) => {
            Modernizr.load({
                load: url,
                complete: resolve
            })
        })
    }

    function loadJSON(url) {
        return new Promise((resolve, reject) => {
            fetch(url).then(res => {
                if ( res.ok ) {
                    resolve(res.json())
                } else {
                    reject('Network response not ok')
                }
            }).catch(e => {
                reject(e)
            })
        })
    }

    function noop(e) {
        console.log(e)
    }

})(window, document)
