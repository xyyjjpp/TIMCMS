{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">About Us</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position" style="background-image: url({{z(about_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-first bg-default text-md-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center align-items-xl-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-5 col-xl-6">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="519" height="564">
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-7 col-xl-6">
                    <h4 class="{{z(class)|upset_class()}} inset-bottom-40 fw-medium">{{i(name,2)}}</h4>
                    <div class="{{z(class)|upset_class()}} tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                        <div class="{{z(class)|upset_class()}} tab-content">
                            <div class="{{z(class)|upset_class()}} tab-pane fade active show" id="tabs-4-3">
                                {{z(about_text)}}
                                <div class="{{z(class)|upset_class()}} group-md group-middle">
                                    <a class="{{z(class)|upset_class()}} button button-md button-title-secondary button-width-xl-230 button-primary" href="{{u(2)}}">认识我们</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl section-b-70 bg-gray-4">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block oh">
                <span class="{{z(class)|upset_class()}} d-inline-block wow slideInUp">用户评价</span>
            </h4>
            <div class="{{z(class)|upset_class()}} owl-carousel owl-quote-2 owl-quote-dots" data-items="1" data-md-items="2" data-autoplay="false" data-margin="30" data-animation-in="fadeIn" data-dots="true" data-animation-out="fadeOut" data-navigation-class="{{z(class)|upset_class()}} #owl-custom-nav-2">
                <?php for ($i=1; $i<=5; $i++) {?>
                    <article class="{{z(class)|upset_class()}} quote-modern quote-modern-2 quote-modern-custom">
                        <div class="{{z(class)|upset_class()}} unit unit-spacing-md align-items-center">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <p class="{{z(class)|upset_class()}} quote-modern-figure">
                                    <img class="{{z(class)|upset_class()}} img-circles" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="75" height="75">
                                </p>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h5 class="{{z(class)|upset_class()}} quote-modern-cite">
                                    <p><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                                </h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-modern-text">
                            <p class="{{z(class)|upset_class()}} q"><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                        </div>
                    </article>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section bg-default">
        <div class="{{z(class)|upset_class()}} parallax-container" style="background-color: #1c86d1">
            <div class="{{z(class)|upset_class()}} parallax-content section-xl context-dark bg-overlay-26">
                <div class="{{z(class)|upset_class()}} container">
                    <div class="{{z(class)|upset_class()}} row row-50 justify-content-center border-classic">
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">12</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">伙伴</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">194</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">产品</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">5</span>
                                    <span class="{{z(class)|upset_class()}} symbol">k</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">经验</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">25</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">成员</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>