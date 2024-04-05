<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} page-head">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-top-panel novi-background rd-navbar-light" data-lg-stick-up-offset="79px" data-xl-stick-up-offset="79px" data-xxl-stick-up-offset="79px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-auto-height="true" data-xl-auto-height="true" data-xxl-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static">
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} rd-navbar-inner">
                    <div class="{{z(class)|upset_class()}} rd-navbar-top-panel">
                        <div class="{{z(class)|upset_class()}} right-side">
                            <address class="{{z(class)|upset_class()}} contact-info text-start">
                                            <span class="{{z(class)|upset_class()}} p">
                                                <span class="{{z(class)|upset_class()}} novi-icon icon mdi mdi-email-open"></span>
                                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                            </span>
                                <span class="{{z(class)|upset_class()}} p">
                                                <span class="{{z(class)|upset_class()}} novi-icon icon mdi mdi-phone"></span>
                                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                            </span>
                            </address>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <button class="{{z(class)|upset_class()}} rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <h1>
                                <a href="{{host}}">
                                    <img width='207' height='41' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} rd-navbar-menu-wrap">
                        <div class="{{z(class)|upset_class()}} rd-navbar-nav-wrap">
                            <div class="{{z(class)|upset_class()}} rd-navbar-mobile-scroll">
                                <div class="{{z(class)|upset_class()}} rd-navbar-mobile-brand">
                                    <a href="{{host}}">
                                        <img width='207' height='41' src='{{z(logo)}}' alt='<?php echo explode_array("&#x2c;",z('keywords'),0) ?>'>
                                    </a>
                                </div>
                                <ul class="{{z(class)|upset_class()}} rd-navbar-nav">
                                    {{$channels=c(0,999,0,1)}}
                                    {{loop $channels as $channel}}
                                    <li>
                                        <a href="{{$channel['url']}}">
                                            <span>{{$channel['name']}}</span>
                                        </a>
                                    </li>
                                    {{/loop}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>