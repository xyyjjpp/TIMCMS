<script src="/myyjjpp.js"></script>
<header data-app-id="{{z(class)|upset_class()}}" class="section page-header">
    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-wrap">
        <nav data-app-id="{{z(class)|upset_class()}}" class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
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
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-aside-right rd-navbar-collapse">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-corporate-contacts">
                            <li>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-xs">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-clock-o"></span>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                        <p>09:00<span>am</span> — 05:00<span>pm</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-xs">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-phone"></span>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                        <a data-app-id="{{z(class)|upset_class()}}" class="link-phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main-outer">
                <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main">
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav-wrap">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-inline-md rd-navbar-corporate-list-social">
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-google-plus" href="{{host}}"></a>
                            </li>
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-instagram" href="{{host}}"></a>
                            </li>
                        </ul>
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