<script src="/myyjjpp.js"></script>
<header class="section page-header">
    <div class="rd-navbar-wrap rd-navbar-wrap-absolute">
        <nav class="rd-navbar rd-navbar-centered" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-700">
                <div class="rd-navbar-aside">
                    <ul class="list-inline-md rd-navbar-info">
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left">
                                    <span class="icon icon-xs icon-white text-middle icomoon-map"></span>
                                </div>
                                <div class="unit-body">
                                    <a class="small" href="{{host}}">{{z(address)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left">
                                    <span class="icon icon-xs icon-white text-middle icomoon-email"></span>
                                </div>
                                <div class="unit-body">
                                    <a class="small" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-social rd-navbar-social">
                        <li>
                            <a class="icon icon-sm icon-white icomoon-youtube" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-white icomoon-facebook" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-white icomoon-instagram" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-white icomoon-twitter" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="icon icon-sm icon-white icomoon-linkedin" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-aside-left">
                        <div class="rd-navbar-nav-toggle mdi mdi-menu" data-multitoggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-center">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                <span></span>
                            </button>
                            <div class="rd-navbar-brand">
                                <h1>
                                    <a class="brand-name" href="{{host}}">
                                        <img class="logo-default" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                        <img class="logo-inverse" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right position-relative">
                        <div class="rd-navbar-search">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search">
                                <span></span>
                            </button>
                            <form class="rd-search form-sm" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                                <button class="rd-search-form-submit icomoon-search" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-close-toggle mdi mdi-close" data-multitoggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </div>
                        <div class="rd-navbar-nav-wrap-inner">
                            <ul class="rd-navbar-nav">
                                {{$channels=c(0,999,0,1)}}
                                {{loop $channels as $channel}}
                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                                </li>
                                {{/loop}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>