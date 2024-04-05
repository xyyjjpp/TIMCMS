<script src="/myyjjpp.js"></script>
<div id="sticky-header" data-app-id="{{z(class)|upset_class()}}" class="header-menu-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row header-border">
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
                    <div data-app-id="{{z(class)|upset_class()}}" class="sidebar">
                        <div data-app-id="{{z(class)|upset_class()}}" class="nav-btn navSidebar-button">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-menu-2">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-bars"></i>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div data-app-id="{{z(class)|upset_class()}}" class="mobile-menu">
        <nav data-app-id="{{z(class)|upset_class()}}" class="itsoft_menu">
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