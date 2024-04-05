<script src="/myyjjpp.js"></script>
<header class="{{z(class)|upset_class()}} section page-header">
    <div class="{{z(class)|upset_class()}} rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="{{z(class)|upset_class()}} rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="{{z(class)|upset_class()}} rd-navbar-main-outer">
                <div class="{{z(class)|upset_class()}} rd-navbar-main">
                    <div class="{{z(class)|upset_class()}} rd-navbar-panel">
                        <button class="{{z(class)|upset_class()}} rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <div class="{{z(class)|upset_class()}} rd-navbar-brand">
                            <h1>
                                <a class="{{z(class)|upset_class()}} brand" href="{{host}}">
                                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="149" height="46">
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