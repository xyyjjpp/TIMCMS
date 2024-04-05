<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-main-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-main">
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="161" height="49">
                            </a>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-main-element">
                        <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                            <div class="{{z(class)|upset_class()}} rd-navbar-search">
                                <button class="{{z(class)|upset_class()}} rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search">
                                    <span></span>
                                </button>
                                <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <label class="{{z(class)|upset_class()}} form-label" for="rd-navbar-search-form-input">Search...</label>
                                        <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                                        <button class="{{z(class)|upset_class()}} rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                                {{$channels=c(0,999,0,1)}}
                                {{loop $channels as $channel}}
                                <li class="{{z(class)|upset_class()}} rd-nav-item">
                                    <a class="{{z(class)|upset_class()}} rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
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