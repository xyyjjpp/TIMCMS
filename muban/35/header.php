<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap rd-navbar-corporate">
        <nav class="{{z(class)|upset_class()}} rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-top-panel rd-navbar-collapse novi-background">
                <div class="{{z(class)|upset_class()}} rd-navbar-top-panel-inner">
                    <ul class="{{z(class)|upset_class()}} rd-list-inline">
                        <li class="{{z(class)|upset_class()}} box-inline list-inline-item">
                            <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller mdi mdi-phone"></span>
                            <ul class="{{z(class)|upset_class()}} list-comma">
                                <li>
                                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{z(class)|upset_class()}} box-inline list-inline-item">
                            <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller mdi mdi-map-marker"></span>
                            <a href="{{host}}">{{z(address)}}</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} box-inline list-inline-item">
                            <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller mdi mdi-email"></span>
                            <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                        </li>
                    </ul>
                    <ul class="{{z(class)|upset_class()}} group-sm">
                        <li>
                            <a class="{{z(class)|upset_class()}} icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google" href="{{host}}"></a>
                        </li>
                        <li>
                            <a class="{{z(class)|upset_class()}} icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="{{host}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                    <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                        <span></span>
                    </button>
                    <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                        <h1>
                            <a class="{{z(class)|upset_class()}} brand-name" href="{{host}}">
                                <img class="{{z(class)|upset_class()}} logo-default" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="185" height="57">
                                <img class="{{z(class)|upset_class()}} logo-inverse" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="185" height="57">
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} rd-navbar-aside-center">
                    <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                        <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
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
                                    <input class="{{z(class)|upset_class()}} form-bg rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="{{z(class)|upset_class()}} rd-search-results-live"></div>
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