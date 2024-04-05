<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-{{tempdir}}assets" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-{{tempdir}}assets" data-xl-device-layout="rd-navbar-{{tempdir}}assets" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-aside-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-aside">
                    <div class="{{z(class)|upset_class()}} rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
                        <span></span>
                    </div>
                    <ul class="{{z(class)|upset_class()}} rd-navbar-aside-list rd-navbar-collapse">
                        <li>
                            <div class="{{z(class)|upset_class()}} block-inline unit unit-spacing-xs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon text-middle mdi mdi-phone"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="{{z(class)|upset_class()}} block-inline unit unit-spacing-xs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon text-middle mdi mdi-email-outline"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                                <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                    <img class="{{z(class)|upset_class()}} brand-logo-dark" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="121" height="61" >
                                    <img class="{{z(class)|upset_class()}} brand-logo-light" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="121" height="61" >
                                </a>
                            </h1>
                        </div>
                    </div>
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
        </nav>
    </div>
</header>