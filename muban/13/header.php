<script src="/myyjjpp.js"></script>
<div id="sticky-header" data-app-id="{{z(class)|upset_class()}}" class="dreamit_nav_manu">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="logo">
                    <h1>
                        <a data-app-id="{{z(class)|upset_class()}}" class="logo_img" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
                        <a data-app-id="{{z(class)|upset_class()}}" class="main_sticky" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
                    </h1>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-9">
                <nav data-app-id="{{z(class)|upset_class()}}" class="dreamit_menu text-center">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="nav_scroll">
                        {{$channels=c(0,999,0,1)}}
                        {{loop $channels as $channel}}
                        <li>
                            <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                        </li>
                        {{/loop}}
                    </ul>
                    <div data-app-id="{{z(class)|upset_class()}}" class="search-box-btn search-box-outer">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-search"></i>
                        <div data-app-id="{{z(class)|upset_class()}}" class="nav-btn navSidebar-button">
                                    <span>
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-align-left"></i>
                                    </span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div data-app-id="{{z(class)|upset_class()}}" class="mobile-menu">
        <nav data-app-id="{{z(class)|upset_class()}}" class="dreamit_menu">
            <ul data-app-id="{{z(class)|upset_class()}}" class="nav_scroll">
                {{$channels=c(0,999,0,1)}}
                {{loop $channels as $channel}}
                <li>
                    <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                </li>
                {{/loop}}
            </ul>
        </nav>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="xs-sidebar-group info-group">
    <div data-app-id="{{z(class)|upset_class()}}" class="xs-overlay xs-bg-black"></div>
    <div data-app-id="{{z(class)|upset_class()}}" class="xs-sidebar-widget">
        <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-widget-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="widget-heading">
                <a href="#" data-app-id="{{z(class)|upset_class()}}" class="close-side-widget">
                    <i data-app-id="{{z(class)|upset_class()}}" class="far fa-times-circle"></i>
                </a>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-textwidget">
                <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-info-contents">
                    <div data-app-id="{{z(class)|upset_class()}}" class="content-inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="nav-logo">
                            <a href="{{host}}">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="content-box">
                            <h2>{{i(name,2)}}</h2>
                            <p data-app-id="{{z(class)|upset_class()}}" class="text">{{z(about_text)}}</p>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="contact-info">
                            <h2>{{i(name,5)}}</h2>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="list-style-one">
                                <li>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-email"></span>{{z(address)}}
                                </li>
                                <li>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="flaticon-phone-call"></span>{{z(phone)}}
                                </li>
                                <li>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-placeholder-1"></span>{{z(email)}}
                                </li>
                                <li>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="flaticon-clock-2"></span>工作日： 09:00 至 18:00 周日： 休息
                                </li>
                            </ul>
                        </div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="social-box">
                            <li data-app-id="{{z(class)|upset_class()}}" class="facebook">
                                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></a>
                            </li>
                            <li data-app-id="{{z(class)|upset_class()}}" class="twitter">
                                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></a>
                            </li>
                            <li data-app-id="{{z(class)|upset_class()}}" class="linkedin">
                                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></a>
                            </li>
                            <li data-app-id="{{z(class)|upset_class()}}" class="instagram">
                                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest-p"></a>
                            </li>
                            <li data-app-id="{{z(class)|upset_class()}}" class="youtube">
                                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>