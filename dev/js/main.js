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

                $rootScope.navChanger = (onArticle, onMedia, onStory) => {
                    $rootScope.navPointer.onArticle = onArticle
                    $rootScope.navPointer.onMedia = onMedia
                    $rootScope.navPointer.onStory = onStory
                }
            }])
            
            .controller('homeController', ['$rootScope', '$scope', '$http', ($rootScope, $scope, $http) => {
                $scope.isPageActive = 1
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
                $scope.article = {
                    id: 1,
                    title: '[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017',
                    content: `
                        <p>Competitive Programming sendiri adalah salah satu cabang kompetisi komputer yang cukup populer. Pada bidang ini, kamu akan ditantang untuk menjadi problem solver sejati. Dan menuliskan solusimu sendiri dalam bahasa pemrograman.</p>
                        
                        <p>Quadrathlon HMTC tidak hanya menawarkan kompetisi sebagai ajang tempatmu mengasah kemampuan, tetapi kami juga akan mengadakan pelatihan khusus untukmu yang tertarik mendalami bidang ini!
                        Pelatihan: Sabtu, 27 Mei 8.00 Pagi, Laboratorium Pemrograman
                        Kompetisi: Minggu, 28 Mei 8.00 Pagi, Laboratorium Pemrograman</p>
                        
                        <p>Data Mining adalah salah satu kompetisi komputer yang sangat menarik untuk diikuti. Kompetisi ini menantangmu untuk melakukan ‘mining’ pada sebuah dataset, dan menampilkan hasilnya dengan tingkat akurasi setinggi mungkin.</p>
                        
                        <p>TC adalah salah satu jurusan yang cukup berprestasi dalam bidang ini pada banyak kompetisi. Tentunya kita tidak tinggal diam ketika Gemastik memanggil!</p>
                    
                        <p>Tidak hanya mengadakan kompetisi, Quadrathlon HMTC akan mengadakan pelatihan Data Mining        pra-kompetisi untuk kamu yang penasaran sama bidang ini!</p>
                        <ul><li>Pelatihan: Minggu, 28 Mei 12.00 Siang, Laboratorium Pemrograman</li>
                            <li>Kompetisi: Senin, 29 Mei 9.00 Pagi, Launching Dataset</li></ul>
                    `,
                    date: 'Wednesday, 20 September 2017',
                    dept: 'Kewirausahaan',
                    thumb: 'assets/img/artikel.jpg'
                }
                
                $scope.init = () => {
                    $rootScope.pageLoading = false
                    $rootScope.navChanger(true, false, false)
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
