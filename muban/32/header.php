<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header bg-gray-darker breadcrumbs-custom-wrap" data-preset='{"title":"Intro slider with nav 3","category":"intro, navigation, slider","reload":true,"id":"intro-slider-with-nav-3"}'>
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap rd-navbar-default">
        <nav class="{{z(class)|upset_class()}} rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxxl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxxl-device-layout="rd-navbar-static" data-stick-up-offset="1px" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-xxx-lstick-up-offset="1px" data-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-inner rd-navbar-padding-inner">
                <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                    <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                        <span></span>
                    </button>
                    <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                        <h1>
                            <a class="{{z(class)|upset_class()}} brand-name" href="{{host}}">
                                <img class="{{z(class)|upset_class()}} logo-default" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="172" height="36">
                                <img class="{{z(class)|upset_class()}} logo-inverse" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="172" height="36">
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} rd-navbar-aside-right">
                    <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                        <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            <li class="{{z(class)|upset_class()}} rd-nav-item">
                                <a class="{{z(class)|upset_class()}} rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/loop}}
                        </ul>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-aside-right-inner">
                        <div class="{{z(class)|upset_class()}} rd-navbar-search">
                            <a class="{{z(class)|upset_class()}} rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#">
                                <span></span>
                            </a>
                            <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                                <button class="{{z(class)|upset_class()}} rd-search-form-submit mdi mdi-magnify"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>