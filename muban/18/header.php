<script src="/myyjjpp.js"></script>
<div data-app-id="{{z(class)|upset_class()}}" class="header-area transparent" id="sticky-header">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="m-logo">
            <a href="{{host}}">
                <span data-app-id="{{z(class)|upset_class()}}" class="logo-txt"></span>
            </a>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="menu-toggle">
            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-bars"></i>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="menu-wrapper">
            <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center d-flex">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-3">
                    <div data-app-id="{{z(class)|upset_class()}}" class="header-logo">
                        <h1>
                            <a data-app-id="{{z(class)|upset_class()}}" class="main-logo" href="{{host}}">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                            <a data-app-id="{{z(class)|upset_class()}}" class="stiky-logo" href="{{host}}">
                                <img src="{{z(logo)}}" alt="<?php echo explode_array("&#x2c;",z('keywords'),0) ?>">
                            </a>
                        </h1>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-9">
                    <div data-app-id="{{z(class)|upset_class()}}" class="header-menu">
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
</div>