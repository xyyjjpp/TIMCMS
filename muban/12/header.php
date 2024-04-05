<script src="/myyjjpp.js"></script>
<header data-app-id="{{z(class)|upset_class()}}" class="section page-header header-creative-wrap">
    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-wrap">
        <nav data-app-id="{{z(class)|upset_class()}}" class="rd-navbar rd-navbar-creative rd-navbar-creative-2" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="112px" data-xxl-stick-up-offset="132px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
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
                                    <img data-app-id="{{z(class)|upset_class()}}" class="brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="157" height="50">
                                    <img data-app-id="{{z(class)|upset_class()}}" class="brand-logo-light" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="157" height="50">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-collapse">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-classic">
                            <li>
                                <span data-app-id="{{z(class)|upset_class()}}" class="contacts-classic-title">致电我们:</span>
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </li>
                            <li>
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </li>
                        </ul>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-aside-element">
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search rd-navbar-search-2">
                            <button data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search-toggle rd-navbar-fixed-element-3" data-rd-navbar-toggle=".rd-navbar-search">
                                <span></span>
                            </button>
                            <form data-app-id="{{z(class)|upset_class()}}" class="rd-search" action="{{host}}" data-search-live="rd-search-results-live" method="GET">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                    <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button data-app-id="{{z(class)|upset_class()}}" class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main-outer">
                <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main">
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
                </div>
            </div>
        </nav>
    </div>
</header>