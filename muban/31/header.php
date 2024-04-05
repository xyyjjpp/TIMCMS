<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-aside-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-aside">
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <h1>
                                <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="171" height="46">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-aside-right rd-navbar-collapse">
                        <ul class="{{z(class)|upset_class()}} rd-navbar-corporate-contacts">
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon fa fa-clock-o"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <p>09:00<span>am</span> — 17:00<span>pm</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon fa fa-phone"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} link-phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-main-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-main">
                    <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-md rd-navbar-corporate-list-social">
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-google-plus" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon fa fa-instagram" href="{{host}}"></a>
                            </li>
                        </ul>
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