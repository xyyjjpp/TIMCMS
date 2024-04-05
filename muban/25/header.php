<script src="/myyjjpp.js"></script>
<header data-app-id="{{z(class)|upset_class()}}" class="page-header page-header-modern">
    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-wrap">
        <nav data-app-id="{{z(class)|upset_class()}}" class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="130px" data-xl-stick-up-offset="130px" data-xxl-stick-up-offset="130px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-aside-outer">
                <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-aside">
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-panel">
                        <button data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-brand">
                            <h1>
                                <a data-app-id="{{z(class)|upset_class()}}" class="brand" href="{{host}}">
                                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-collapse">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-contacts">
                            <li data-app-id="{{z(class)|upset_class()}}" class="centered">
                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-big-xl icon-primary-light mdi mdi-map-marker"></span>
                                <a href="{{host}}">{{z(address)}}</a>
                            </li>
                            <li data-app-id="{{z(class)|upset_class()}}" class="centered">
                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-big-lg icon-primary-light mdi mdi-cellphone-android"></span>
                                <a data-app-id="{{z(class)|upset_class()}}" class="link-phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </li>
                        </ul>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-inline-xs list-inline-middle">
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon-square-classic fa-instagram novi-icon" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon-square-classic fa-facebook-f novi-icon" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon-square-classic fa-twitter novi-icon" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon-square-classic fa-google-plus novi-icon" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main-outer">
                <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main">
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main-element">
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav-wrap">
                            <ul data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav">
                                {{$channels=c(0,999,0,1)}}
                                {{loop $channels as $channel}}
                                <li data-app-id="{{z(class)|upset_class()}}" class="rd-nav-item">
                                    <a data-app-id="{{z(class)|upset_class()}}" class="rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                                </li>
                                {{/loop}}
                            </ul>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search">
                            <button data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search">
                                <span></span>
                            </button>
                            <form data-app-id="{{z(class)|upset_class()}}" class="rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                    <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                                <button data-app-id="{{z(class)|upset_class()}}" class="rd-search-form-submit fa-search" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>