<script src="/myyjjpp.js"></script>
<header data-app-id="{{z(class)|upset_class()}}" class="main-header">
    <div data-app-id="{{z(class)|upset_class()}}" class="header-top">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="top-left">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="clearfix">
                        <li>欢迎来到我们公司!</li>
                    </ul>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="top-right clearfix">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="clearfix">
                        <li>找到我们
                            <div data-app-id="{{z(class)|upset_class()}}" class="social-links">
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-instagram"></span>
                                </a>
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></span>
                                </a>
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin"></span>
                                </a>
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest"></span>
                                </a>
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></span>
                                </a>
                                <a href="{{host}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="fab fa-youtube"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="header-upper">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container clearfix">
            <div data-app-id="{{z(class)|upset_class()}}" class="pull-left logo-outer">
                <div data-app-id="{{z(class)|upset_class()}}" class="logo">
                    <h1>
                        <a href="{{host}}">
                            <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        </a>
                    </h1>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="pull-right upper-right clearfix">
                <nav data-app-id="{{z(class)|upset_class()}}" class="main-menu">
                    <div data-app-id="{{z(class)|upset_class()}}" class="navbar-header">
                        <button type="button" data-app-id="{{z(class)|upset_class()}}" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                        </button>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="navbar-collapse collapse clearfix">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="navigation clearfix">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/loop}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="sticky-header">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container clearfix">
            <div data-app-id="{{z(class)|upset_class()}}" class="logo pull-left">
                <a href="{{host}}" data-app-id="{{z(class)|upset_class()}}" class="img-responsive">
                    <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>" title="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                </a>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="right-col pull-right">
                <nav data-app-id="{{z(class)|upset_class()}}" class="main-menu">
                    <div data-app-id="{{z(class)|upset_class()}}" class="navbar-header">
                        <button type="button" data-app-id="{{z(class)|upset_class()}}" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon-bar"></span>
                        </button>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="navbar-collapse collapse clearfix">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="navigation clearfix">
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            <li>
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/loop}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>