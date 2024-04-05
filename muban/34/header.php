<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} page-head header-panel-absolute">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-minimal" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="2" data-lg-auto-height="true" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                    <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                        <span></span>
                    </button>
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel-title veil-lg reveal-inline-block">
                        <h4><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h4>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                        <h1>
                            <a href="{{host}}">
                                <img width='165' height='76' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} rd-navbar-menu-wrap">
                    <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                        <div class="{{z(class)|upset_class()}} rd-navbar-mobile-scroll">
                            <div class="{{z(class)|upset_class()}} rd-navbar-mobile-header-wrap">
                                <div class="{{z(class)|upset_class()}} rd-navbar-mobile-brand">
                                    <a href="{{host}}">
                                        <img width='165' height='76' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                                    </a>
                                    <a class="{{z(class)|upset_class()}} rd-navbar-mobile-search-toggle mdi" data-custom-toggle="rd-navbar-search-mobile" href="#">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                    <form class="{{z(class)|upset_class()}} rd-navbar-search-form search-form-icon-right rd-search" action="{{host}}" method="GET">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="rd-navbar-mobile-search-form-input">Search</label>
                                            <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                                {{$channels=c(0,999,0,1)}}
                                {{loop $channels as $channel}}
                                <li>
                                    <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                                </li>
                                {{/loop}}
                            </ul>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-search">
                        <a class="{{z(class)|upset_class()}} rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search" href="#">
                            <span></span>
                        </a>
                        <form class="{{z(class)|upset_class()}} rd-navbar-search-form search-form-icon-right rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                            <div class="{{z(class)|upset_class()}} form-group">
                                <label class="{{z(class)|upset_class()}} form-label" for="rd-navbar-search-form-input">搜索</label>
                                <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>