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

            .controller('mainController', ['$rootScope', '$scope', '$http', '$location', ($rootScope, $scope, $http, $location) => {
                $rootScope.pageLoading = true
                $rootScope.pageError = false
                $rootScope.navPointer = {
                    onArticle: false,
                    onMedia: false,
                    onStory: false
                }

                $rootScope.isHome = () => {
                    return $location.path() === '/'
                }

                $rootScope.navChanger = (onArticle, onMedia, onStory) => {
                    $rootScope.navPointer.onArticle = onArticle
                    $rootScope.navPointer.onMedia = onMedia
                    $rootScope.navPointer.onStory = onStory
                }

                $rootScope.getJSON = link => {
                    return new Promise((resolve, reject) => {
                        $http.get(link)
                            .then( res => {
                                $rootScope.pageLoading = false
                                resolve(res.data)
                            })
                            .catch( () => {
                                $rootScope.pageLoading = false
                                $rootScope.pageError = true
                                reject('error')
                            })
                    })
                }

            }])
            
            .controller('homeController', ['$rootScope', '$scope', '$http', '$location', ($rootScope, $scope, $http) => {
                $scope.video = document.querySelector('.hero-video')
                $scope.scrollOffset = 150

                $scope.sectionPointer = {
                    onArticle: new Number,
                    onMedia: new Number,
                    onStory: new Number
                }
                
                $scope.scrollEventHandler = () => {
                    let scrolled = window.pageYOffset
                    $scope.video.style.transform = `translateY(${scrolled * 0.22}px)`
                    
                    if ( scrolled >= $scope.sectionPointer.onMedia ) {
                        $rootScope.navChanger(false, true, false)
                    } else if ( scrolled >= $scope.sectionPointer.onStory ) {
                        $rootScope.navChanger(false, false, true)
                    } else if ( scrolled >= $scope.sectionPointer.onArticle ) {
                        $rootScope.navChanger(true, false, false)
                    } else {
                        $rootScope.navChanger(false, false, false)
                    }
                    $rootScope.$digest()
                }
                
                $scope.scrollEvent = (isInit) => {
                    $scope.sectionPointer.onArticle = document.querySelector('.article-section').offsetTop - $scope.scrollOffset,
                    $scope.sectionPointer.onMedia = document.querySelector('.media-section').offsetTop - $scope.scrollOffset
                    $scope.sectionPointer.onStory = document.querySelector('.story-section').offsetTop - $scope.scrollOffset
                    
                    if (isInit) {
                        window.addEventListener('scroll', $scope.scrollEventHandler)
                    } else {
                        window.removeEventListener('scroll', $scope.scrollEventHandler)
                    }
                }
                
                $scope.resetNav = () => {
                    $rootScope.navChanger(false, false, false)
                }
                
                $scope.init = () => {
                    $rootScope.pageLoading = false
                    setTimeout(() => {
                        $scope.scrollEvent(1)
                    }, 300)
                }

                $scope.$on('$destroy', () => {
                    $rootScope.pageLoading = true
                    $scope.scrollEvent(0)
                })
                
            }])
            
            .controller('articleController', ['$rootScope', '$scope', '$http', '$sce', ($rootScope, $scope, $http, $sce) => {
                $scope.article = {}
                $scope.articleList = {}
                $scope.articleLatest = {}
                $scope.currentCategory = 'All Categories'
                $scope.pagination = {
                    totalPage: 4,
                    currentPage: 1
                }

                $scope.initDetail = () => {
                    $rootScope.navChanger(true, false, false)
                    $rootScope.getJSON('article-detail.json')
                        .then(res => {
                            $scope.article = Object.assign({}, res)
                            $scope.$digest()
                        })
                    $rootScope.getJSON('article-latest.json')
                        .then(res => {
                            $scope.articleLatest = Object.assign({}, res)
                            $scope.$digest()
                        })
                    window.scrollTo(0,0);
                }
                    
                $scope.initList = () => {
                    $rootScope.navChanger(true, false, false)
                    $rootScope.getJSON('article-list.json')
                        .then(res => {
                            $scope.articleList = Object.assign({}, res)
                            $scope.$digest()
                        })
                    window.scrollTo(0,0);
                }

                $scope.initHome = () => {
                    $rootScope.getJSON('article-latest.json')
                        .then(res => {
                            $scope.articleLatest = Object.assign({}, res)
                            $scope.$digest()
                        })
                    $rootScope.getJSON('article-list.json')
                        .then(res => {
                            $scope.articleList = Object.assign({}, res)
                            $scope.$digest()
                        })
                }

            }])

            .config(['$routeProvider', '$locationProvider', ($routeProvider, $locationProvider) => {
                $routeProvider
                .when('/', {
                    templateUrl: 'home.php',
                    controller: 'homeController'
                })
                .when('/articles/:categoryId?', {
                    templateUrl: 'article-list.php',
                    controller: 'articleController'
                })
                .when('/media', {
                    templateUrl: 'media-list.php'
                })
                .when('/story', {
                    templateUrl: 'story.php'
                })
                .when('/article/:articleId', {
                    templateUrl: 'article-detail.php',
                    controller: 'articleController'
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
