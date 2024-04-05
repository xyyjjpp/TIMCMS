<script src="/myyjjpp.js"></script>
<div data-app-id="{{z(class)|upset_class()}}" class="header-top-section style-three">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center header-bg">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-8">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-top-address">
                            <span>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-phone-alt"></i> {{z(phone)}}
                            </span>
                    <span>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-envelope"></i> {{z(email)}}
                            </span>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-4 right-side">
                <div data-app-id="{{z(class)|upset_class()}}" class="social-icon">
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-behance-square"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-youtube"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="{{host}}">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest"></i>
                    </a>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sticky-header" data-app-id="{{z(class)|upset_class()}}" class="header-menu-section style-three">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="menu-wrapper">
            <div data-app-id="{{z(class)|upset_class()}}" class="row">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3 col-md-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="header-logo">
                        <h1>
                            <a data-app-id="{{z(class)|upset_class()}}" class="menu-logo" href="{{host}}">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                        </h1>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-9 col-md-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="header-menu">
                        <ul>
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/loop}}
                        </ul>
                        <div data-app-id="{{z(class)|upset_class()}}" class="header-src-btn">
                            <div data-app-id="{{z(class)|upset_class()}}" class="search-box-btn search-box-outer">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="mobile-menu">
    <div data-app-id="{{z(class)|upset_class()}}" class="conainer">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="logo-container">
                    <div data-app-id="{{z(class)|upset_class()}}" class="header-logo">
                        <a data-app-id="{{z(class)|upset_class()}}" class="mobile-logo" href="{{host}}">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="menu-toggle">
                        <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-bars"></i>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-9 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="header-menu2">
                    <ul>
                        {{$channels=c(0,999,0,1)}}
                        {{loop $channels as $channel}}
                        <li>
                            <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                        </li>
                        {{/loop}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>