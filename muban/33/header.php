<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-default-top-panel" data-sm-stick-up-offset="1px" data-md-stick-up-offset="159px" data-lg-stick-up-offset="203px" data-xl-stick-up-offset="203px" data-xxl-stick-up-offset="203px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <button class="{{z(class)|upset_class()}} collapse-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel">
                <span class="{{z(class)|upset_class()}} toggle-icon"></span>
            </button>
            <div class="{{z(class)|upset_class()}} rd-navbar-outer outer-1 rd-navbar-top-panel">
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell">
                        <ul class="{{z(class)|upset_class()}} navbar-inline-list">
                            <li class="{{z(class)|upset_class()}} rd-navbar-info">
                                <div class="{{z(class)|upset_class()}} icon icon-sm-1 mdi mdi-phone"></div>
                                <a class="{{z(class)|upset_class()}} link" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} rd-navbar-info">
                                <div class="{{z(class)|upset_class()}} icon icon-sm-1 mdi mdi-map-marker"></div>
                                <a class="{{z(class)|upset_class()}} link" href="{{host}}">{{z(address)}}</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} rd-navbar-info">
                                <div class="{{z(class)|upset_class()}} icon icon-sm-1 mdi mdi-email-open"></div>
                                <a class="{{z(class)|upset_class()}} link" href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell">
                        <div class="{{z(class)|upset_class()}} rd-navbar-social">
                            <a class="{{z(class)|upset_class()}} link fa fa-facebook" href="/"></a>
                            <a class="{{z(class)|upset_class()}} link fa fa-twitter" href="/"></a>
                            <a class="{{z(class)|upset_class()}} link fa fa-instagram" href="/"></a>
                            <a class="{{z(class)|upset_class()}} link fa fa-google" href="/"></a>
                            <a class="{{z(class)|upset_class()}} link fa fa-pinterest" href="/"></a>
                            <a class="{{z(class)|upset_class()}} link fa fa-linkedin" href="/"></a>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell">
                        <button class="{{z(class)|upset_class()}} search-toggle rd-navbar-search-desktop" data-rd-navbar-toggle=".rd-navbar-search-desktop">
                            <span class="{{z(class)|upset_class()}} toggle-icon"></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-search rd-navbar-search-inline rd-navbar-search-desktop">
                            <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                </div>
                                <button class="{{z(class)|upset_class()}} button button-primary" type="submit">
                                    <span>Search</span>
                                </button>
                                <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-outer outer-2">
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav">
                            <span class="{{z(class)|upset_class()}} toggle-icon"></span>
                        </button>
                        <h1>
                            <a class="{{z(class)|upset_class()}} rd-navbar-brand" href="{{host}}">
                                <img class="{{z(class)|upset_class()}} brand-normal" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="201" height="34">
                                <img class="{{z(class)|upset_class()}} brand-mini" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="201" height="34">
                            </a>
                        </h1>
                        <button class="{{z(class)|upset_class()}} search-toggle rd-navbar-search-mobile" data-rd-navbar-toggle=".rd-navbar-search-mobile">
                            <span class="{{z(class)|upset_class()}} toggle-icon"></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-search rd-navbar-search-mobile">
                            <form class="{{z(class)|upset_class()}} rd-search rd-search-form rd-mailform-inline" action="/" method="GET">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-navbar-search-form-input-1">Search...</label>
                                    <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                                </div>
                                <button class="{{z(class)|upset_class()}} button button-primary" type="submit">
                                    <span>Search</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell rd-navbar-nav-wrap">
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
            </div>
        </nav>
    </div>
</header>