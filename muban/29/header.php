<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-default rd-navbar-default-top-panel" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="44px" data-xl-stick-up-offset="70px" data-xxl-stick-up-offset="70px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-fixed" data-xxl-device-layout="rd-navbar-fixed" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <button class="{{z(class)|upset_class()}} collapse-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel">
                <span class="{{z(class)|upset_class()}} toggle-icon"></span>
            </button>
            <div class="{{z(class)|upset_class()}} rd-navbar-outer outer-1 rd-navbar-top-panel">
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell rd-navbar-brand-default">
                        <h1>
                            <a class="{{z(class)|upset_class()}} rd-navbar-brand" href="{{host}}">
                                <img class="{{z(class)|upset_class()}} brand-normal" src="{{z(logo)}}" width="180" height="33" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                        </h1>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell">
                        <ul class="{{z(class)|upset_class()}} navbar-inline-list">
                            <li class="{{z(class)|upset_class()}} rd-navbar-info">
                                <div class="{{z(class)|upset_class()}} icon icon-xs mdi mdi-email-outline"></div>
                                <a class="{{z(class)|upset_class()}} link" href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} rd-navbar-info">
                                <div class="{{z(class)|upset_class()}} icon icon-xs mdi mdi-phone"></div>
                                <a class="{{z(class)|upset_class()}} link" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-outer outer-2">
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav">
                            <span class="{{z(class)|upset_class()}} toggle-icon"></span>
                        </button>
                        <a class="{{z(class)|upset_class()}} rd-navbar-brand" href="{{host}}">
                            <img class="{{z(class)|upset_class()}} brand-mini" src="{{z(logo)}}" width="180" height="33" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
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
                    <div class="{{z(class)|upset_class()}} rd-navbar-cell rd-navbar-panel-right">
                        <button class="{{z(class)|upset_class()}} search-toggle" data-rd-navbar-toggle=".rd-navbar-search">
                            <span class="{{z(class)|upset_class()}} toggle-icon"></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-search">
                            <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-navbar-search-form-input">搜索...</label>
                                    <input class="{{z(class)|upset_class()}} rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <button class="{{z(class)|upset_class()}} button-submit fa fa-search" type="submit"></button>
                                    <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>