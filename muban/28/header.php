<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar_transparent rd-navbar_boxed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xl-stick-up-offset="35px" data-xxl-stick-up-offset="35px" data-body-class="{{z(class)|upset_class()}} rd-navbar-absolute">
            <div class="{{z(class)|upset_class()}} rd-navbar-top-panel">
                <div class="{{z(class)|upset_class()}} rd-navbar-top-panel__main">
                    <div class="{{z(class)|upset_class()}} rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main">
                        <span></span>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-top-panel__content">
                        <div class="{{z(class)|upset_class()}} rd-navbar-top-panel__left">
                            <ul class="{{z(class)|upset_class()}} rd-navbar-items-list">
                                <li>
                                    <div class="{{z(class)|upset_class()}} unit flex-row align-items-center unit-spacing-xs">
                                        <div class="{{z(class)|upset_class()}} unit__left">
                                            <span class="{{z(class)|upset_class()}} icon icon-sm icon-primary linear-icon-map-marker"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit__body">
                                            <p>
                                                <a href="{{host}}">地址: {{z(address)}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="{{z(class)|upset_class()}} unit flex-row align-items-center unit-spacing-xs">
                                        <div class="{{z(class)|upset_class()}} unit__left">
                                            <span class="{{z(class)|upset_class()}} icon icon-sm icon-primary linear-icon-telephone"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit__body">
                                            <ul class="{{z(class)|upset_class()}} list-semicolon">
                                                <li>
                                                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="{{z(class)|upset_class()}} rd-navbar-top-panel__right">
                            <ul class="{{z(class)|upset_class()}} list-inline-xxs">
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-facebook" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-twitter" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-google-plus" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-vimeo" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-youtube" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xxs icon-gray-darker fa fa-pinterest-p" href="{{host}}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-inner rd-navbar-search-wrap">
                <div class="{{z(class)|upset_class()}} rd-navbar-panel rd-navbar-search-lg_collapsable">
                    <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                        <span></span>
                    </button>
                    <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                        <h1>
                            <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                <img class="{{z(class)|upset_class()}} brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="108" height="40">
                                <img class="{{z(class)|upset_class()}} brand-logo-light" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="108" height="40">
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                    <div class="{{z(class)|upset_class()}} rd-navbar__element rd-navbar-search_collapsable">
                        <button class="{{z(class)|upset_class()}} rd-navbar-search__toggle rd-navbar-fixed--hidden" data-rd-navbar-toggle=".rd-navbar-search-wrap"></button>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-search rd-navbar-search_toggled rd-navbar-search_not-collapsable">
                        <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" method="GET" data-search-live="rd-search-results-live">
                            <div class="{{z(class)|upset_class()}} form-wrap">
                                <input class="{{z(class)|upset_class()}} form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                <label class="{{z(class)|upset_class()}} form-label" for="rd-navbar-search-form-input">搜索...</label>
                                <div class="{{z(class)|upset_class()}} rd-search-results-live" id="rd-search-results-live"></div>
                            </div>
                            <button class="{{z(class)|upset_class()}} rd-search__submit" type="submit"></button>
                        </form>
                        <div class="{{z(class)|upset_class()}} rd-navbar-fixed--hidden">
                            <button class="{{z(class)|upset_class()}} rd-navbar-search__toggle" data-custom-toggle=".rd-navbar-search-wrap" data-custom-toggle-disable-on-blur="true"></button>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-search_collapsable">
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
        </nav>
    </div>
</header>