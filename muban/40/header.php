<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-classic rd-navbar-classic-center" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-aside-outer rd-navbar-collapse novi-bg novi-bg-img">
                <div class="{{z(class)|upset_class()}} rd-navbar-aside">
                    <div class="{{z(class)|upset_class()}} header-info">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-md">
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs align-items-center">
                                    <div class="{{z(class)|upset_class()}} unit-left fw-bold">致电我们:</div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs align-items-center">
                                    <div class="{{z(class)|upset_class()}} unit-left fw-bold">工作时间:</div>
                                    <div class="{{z(class)|upset_class()}} unit-body"> 礼拜一 - 礼拜六: 10 am-8 pm</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="{{z(class)|upset_class()}} social-block">
                        <ul class="{{z(class)|upset_class()}} list-inline">
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-facebook" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-twitter" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-google-plus" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-vimeo" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-youtube" href="{{host}}"></a>
                            </li>
                            <li>
                                <a class="{{z(class)|upset_class()}} icon novi-icon fa-pinterest-p" href="{{host}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} rd-navbar-main-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-main">
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <h1>
                                <a href="{{host}}">
                                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="158" height="58">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-main-element">
                        <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
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