<script src="/myyjjpp.js"></script>
<header id="sticky-header" data-app-id="{{z(class)|upset_class()}}" class="transparent-header">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="menu-wrapper align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="mobile-logo">
                <a href="">
                    <span data-app-id="{{z(class)|upset_class()}}" class="logo-txt"></span>
                </a>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="logo">
                <h1>
                    <a href="{{host}}">
                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                        <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                    </a>
                </h1>
            </div>
            <nav>
                <ul>
                    {{$channels=c(0,999,0,1)}}
                    {{loop $channels as $channel}}
                    <li>
                        <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                    </li>
                    {{/loop}}
                </ul>
                <div data-app-id="{{z(class)|upset_class()}}" class="query-menu d-inline-block ml-10">
                    <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-search"></i>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="mm-social-icon d-lg-none mt-40">
                            <span>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-facebook-f"></i>
                                </a>
                            </span>
                    <span>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-twitter"></i>
                                </a>
                            </span>
                    <span>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-pinterest"></i>
                                </a>
                            </span>
                    <span>
                                <a href="{{host}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fab fa-linkedin-in"></i>
                                </a>
                            </span>
                </div>
            </nav>
            <div data-app-id="{{z(class)|upset_class()}}" class="menu-toggle">
                        <span data-app-id="{{z(class)|upset_class()}}" class="open_bar">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-bars"></i>
                        </span>
                <span data-app-id="{{z(class)|upset_class()}}" class="close_bar">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-times"></i>
                        </span>
            </div>
        </div>
    </div>
</header>