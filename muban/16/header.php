<script src="/myyjjpp.js"></script>
<div data-app-id="{{z(class)|upset_class()}}" class="header-top-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-8 col-lg-8">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-header-menu-address">
                    <ul>
                        <li>
                            <a href="mailto:{{z(email)}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="far fa-envelope"></i> {{z(email)}}
                            </a>
                        </li>
                        <li>
                                    <span>
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-map-marker-alt"></i> {{z(address)}}
                                    </span>
                        </li>
                        <li>
                            <a href="tel:{{z(phone)}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-phone"></i> {{z(phone)}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-header-top-socail">
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest-p"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
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