{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(about_banner_img)}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">About Us</li>
            </ul>
        </div>
    </section>
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-md bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <article class="{{z(class)|upset_class()}} box-info box-info-1">
                <div class="{{z(class)|upset_class()}} box-info-aside">
                    <div class="{{z(class)|upset_class()}} image-block-1" style="background-image: url({{z(about_img)}});"></div>
                </div>
                <div class="{{z(class)|upset_class()}} box-info-main context-dark">
                    <div class="{{z(class)|upset_class()}} box-info-main-inner">
                        <h2 class="{{z(class)|upset_class()}} f1">{{i(name,2)}}</h2>
                        <div class="{{z(class)|upset_class()}} divider-small"></div>
                        <div class="{{z(class)|upset_class()}} tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                            <div class="{{z(class)|upset_class()}} tab-content">
                                <div class="{{z(class)|upset_class()}} tab-pane fade show active" id="tabs-1-1">
                                    <p>{{z(about_text)}}</p>
                                </div>
                            </div>
                        </div>
                        <a class="{{z(class)|upset_class()}} button button-sm button-secondary" href="{{u(2)}}">了解我们</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section parallax-container">
        <div class="{{z(class)|upset_class()}} parallax-content section-lg context-dark text-center bg-darkblue-2_1">
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} row row-30">
                    <div class="{{z(class)|upset_class()}} col-6 col-md-3">
                        <article class="{{z(class)|upset_class()}} box-counter">
                            <div class="{{z(class)|upset_class()}} box-counter-main">
                                <span>860</span>
                            </div>
                            <p class="{{z(class)|upset_class()}} box-counter-title">案例</p>
                        </article>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-6 col-md-3">
                        <article class="{{z(class)|upset_class()}} box-counter">
                            <div class="{{z(class)|upset_class()}} box-counter-main">
                                <div class="{{z(class)|upset_class()}} counter">29</div>
                            </div>
                            <p class="{{z(class)|upset_class()}} box-counter-title">奖项</p>
                        </article>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-6 col-md-3">
                        <article class="{{z(class)|upset_class()}} box-counter">
                            <div class="{{z(class)|upset_class()}} box-counter-main">
                                <div class="{{z(class)|upset_class()}} counter">10</div>
                                <span>k</span>
                            </div>
                            <p class="{{z(class)|upset_class()}} box-counter-title">客户</p>
                        </article>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-6 col-md-3">
                        <article class="{{z(class)|upset_class()}} box-counter">
                            <div class="{{z(class)|upset_class()}} box-counter-main">
                                <div class="{{z(class)|upset_class()}} counter">15</div>
                            </div>
                            <p class="{{z(class)|upset_class()}} box-counter-title">成员</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-12">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} heading-decoration-1">
                <span class="{{z(class)|upset_class()}} heading-inner">用户的评价</span>
            </h2>
        </div>
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
                <?php for ($i=1; $i<=4; $i++) {?>
                    <article class="{{z(class)|upset_class()}} quote-modern">
                        <div class="{{z(class)|upset_class()}} quote-modern-inner">
                            <div class="{{z(class)|upset_class()}} quote-modern-main">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                            </div>
                            <div class="{{z(class)|upset_class()}} quote-modern-meta-outer">
                                <img class="{{z(class)|upset_class()}} quote-modern-avatar" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="57" height="57">
                                <div class="{{z(class)|upset_class()}} quote-modern-meta">
                                    <h4 class="{{z(class)|upset_class()}} quote-modern-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></h4>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>
