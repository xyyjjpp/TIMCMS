<script src="/myyjjpp.js"></script>
<div data-app-id="{{z(class)|upset_class()}}" class="dreamit-main-menu  hidden-xs hidden-sm header--fixed headrooma header_transparent humbergar">
    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit_nav_area">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row logo-left">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-3 col-sm-3 col-xs-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="logo">
                        <h1>
                            <a data-app-id="{{z(class)|upset_class()}}" class="main_sticky_main_l" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                            <a data-app-id="{{z(class)|upset_class()}}" class="main_sticky_l" href="{{host}}" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                        </h1>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-9 col-sm-9 col-xs-8">
                    <nav data-app-id="{{z(class)|upset_class()}}" class="dreamit_menu main-search-menu">
                        <button data-app-id="{{z(class)|upset_class()}}" class="hamburger hamburger--slider" type="button">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="hamburger-box">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="hamburger-inner"></span>
                                    </span>
                        </button>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="main-menu">
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
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="mbm hidden-md hidden-lg header_area main-menu-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="menu_area mobile-menu">
        <nav>
            <ul data-app-id="{{z(class)|upset_class()}}" class="main-menu clearfix">
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