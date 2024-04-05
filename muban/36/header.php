<script src="/myyjjpp.js"></script>
<div class="{{z(class)|upset_class()}} rd-navbar-wrap rd-navbar-wrap-absolute">
    <nav class="{{z(class)|upset_class()}} rd-navbar top-panel-none-items" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="{{z(class)|upset_class()}} rd-navbar-inner">
            <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar">
                    <span></span>
                </button>
                <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                    <h1>
                        <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                            <img class="{{z(class)|upset_class()}} brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="155" height="35">
                            <img class="{{z(class)|upset_class()}} brand-logo-light" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="155" height="35">
                        </a>
                    </h1>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                <div class="{{z(class)|upset_class()}} rd-navbar-search">
                    <form class="{{z(class)|upset_class()}} rd-search rd-navbar-search-form" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                        <label class="{{z(class)|upset_class()}} rd-navbar-search-form-input">
                            <input type="text" name="s" placeholder="Search.." autocomplete="off">
                        </label>
                        <button class="{{z(class)|upset_class()}} rd-navbar-search-form-submit" type="submit"></button>
                        <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                    </form>
                    <button class="{{z(class)|upset_class()}} rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results"></button>
                </div>
                <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                    {{$channels=c(0,999,0,1)}}
                    {{loop $channels as $channel}}
                    <li class="{{z(class)|upset_class()}} rd-nav-item">
                        <a class="{{z(class)|upset_class()}} rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                    </li>
                    {{/loop}}
            </div>
        </div>
    </nav>
</div>