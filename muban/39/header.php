<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-inner-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-aside">
                    <div class="{{z(class)|upset_class()}} rd-navbar-aside-inner">
                        <ul class="{{z(class)|upset_class()}} rd-navbar-contacts-2">
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-phone"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-map-marker"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} address" href="{{host}}">{{z(address)}}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="{{z(class)|upset_class()}} list-share-2">
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-instagram" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon mdi mdi-google-plus" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <h1>
                                <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                    <img class="{{z(class)|upset_class()}} brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="219" height="39">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-right rd-navbar-nav-wrap">
                        <div class="{{z(class)|upset_class()}} rd-navbar-aside d-xl-none">
                            <div class="{{z(class)|upset_class()}} rd-navbar-aside-inner">
                                <ul class="{{z(class)|upset_class()}} rd-navbar-contacts-2">
                                    <li>
                                        <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                            <div class="{{z(class)|upset_class()}} unit-left">
                                                <span class="{{z(class)|upset_class()}} icon mdi mdi-phone"></span>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} unit-body">
                                                <a class="{{z(class)|upset_class()}} phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="{{z(class)|upset_class()}} unit unit-spacing-xs">
                                            <div class="{{z(class)|upset_class()}} unit-left">
                                                <span class="{{z(class)|upset_class()}} icon mdi mdi-map-marker"></span>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} unit-body">
                                                <a class="{{z(class)|upset_class()}} address" href="{{host}}">{{z(address)}}</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="{{z(class)|upset_class()}} list-share-2">
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-facebook" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-twitter" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-instagram" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-google-plus" href="{{host}}"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} rd-navbar-main">
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