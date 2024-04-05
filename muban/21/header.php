<script src="/myyjjpp.js"></script>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-spinner">
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube0"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube1"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube2"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube3"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube4"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube5"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube6"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube7"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube8"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube9"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube10"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube11"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube12"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube13"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube14"></span>
            <span data-app-id="{{z(class)|upset_class()}}" class="cssload-cube cssload-cube15"></span>
        </div>
        <h2 data-app-id="{{z(class)|upset_class()}}" class="preloader-title"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    <header data-app-id="{{z(class)|upset_class()}}" class="page-header">
        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-wrap">
            <nav data-app-id="{{z(class)|upset_class()}}" class="rd-navbar" data-layout="rd-navbar-sidebar" data-device-layout="rd-navbar-sidebar" data-sm-layout="rd-navbar-sidebar" data-sm-device-layout="rd-navbar-sidebar" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-sidebar" data-lg-layout="rd-navbar-sidebar" data-lg-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar" data-xl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-body-data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-style-1">
                <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main-outer">
                    <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-main">
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-panel">
                            <button data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                <span></span>
                            </button>
                            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-brand">
                                <h1>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="brand" href="{{host}}">
                                        <img data-app-id="{{z(class)|upset_class()}}" class="brand-logo-desktop" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="152" height="94">
                                        <img data-app-id="{{z(class)|upset_class()}}" class="brand-logo-mobile" src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" width="152" height="65">
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav-wrap">
                            <div data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav-container">
                                <ul data-app-id="{{z(class)|upset_class()}}" class="rd-navbar-nav">
                                    {{$channels=c(0,999,0,1)}}
                                    {{loop $channels as $channel}}
                                    {{if $channel['cid'] !=5}}
                                    <li data-app-id="{{z(class)|upset_class()}}" class="rd-nav-item">
                                        <a data-app-id="{{z(class)|upset_class()}}" class="rd-nav-link" href="{{$channel['url']}}">{{$channel['name']}}</a>
                                    </li>
                                    {{/if}}
                                    {{/loop}}
                                </ul>
                                <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-classic">
                                    <li>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-classic-title">电话:</div>
                                        <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </li>
                                    <li>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-classic-title">邮箱:</div>
                                        <a href="mailTo:{{z(email)}}">{{z(email)}}</a>
                                    </li>
                                    <li>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-classic-title">Follow Us:</div>
                                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline list-social list-inline-sm">
                                            <li>
                                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-linkedin" href="{{host}}"></a>
                                            </li>
                                            <li>
                                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-twitter" href="{{host}}"></a>
                                            </li>
                                            <li>
                                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-facebook" href="{{host}}"></a>
                                            </li>
                                            <li>
                                                <a data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-instagram" href="{{host}}"></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul data-app-id="{{z(class)|upset_class()}}" class="nav-custom rd-navbar-nav">
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#home"></a>
                    </li>
                    <li>
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#about"></a>
                    </li>
                    <li>
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#clients"></a>
                    </li>
                    <li>
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#projects"></a>
                    </li>
                    <li>
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#news"></a>
                    </li>
                    <li>
                        <a data-app-id="{{z(class)|upset_class()}}" class="nav-custom-counter" href="#contacts"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>