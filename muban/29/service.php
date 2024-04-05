{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{z(service_banner_img)}})">
        <div class="{{z(class)|upset_class()}} container-fluid context-dark">
            <div class="{{z(class)|upset_class()}} row g-0 justify-content-xl-center">
                <div class="{{z(class)|upset_class()}} col-xxl-10">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h2 class="{{z(class)|upset_class()}} decorative-title">{{i(name)}}</h2>
                    </div>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-primary-dark context-dark">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} row row-40 row-lg-60">
                <div class="{{z(class)|upset_class()}} col-md-4 col-xl-4">
                    <div class="{{z(class)|upset_class()}} blurb-custom">
                        <div class="{{z(class)|upset_class()}} icon icon-image icon-image-lg icon-image-secondary">
                            <img src="{{tempdir}}assets/picture/icon-light-1-70x61.png" alt="<?php echo explode_array('：',z('service_text_1'),0) ?>" width="70" height="61">
                        </div>
                        <h5 class="{{z(class)|upset_class()}} blurb-title">
                            <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                        </h5>
                        <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-xl-4">
                    <div class="{{z(class)|upset_class()}} blurb-custom">
                        <div class="{{z(class)|upset_class()}} icon icon-image icon-image-lg icon-image-secondary">
                            <img src="{{tempdir}}assets/picture/icon-light-2-70x61.png" alt="<?php echo explode_array('：',z('service_text_2'),0) ?>" width="70" height="61">
                        </div>
                        <h5 class="{{z(class)|upset_class()}} blurb-title">
                            <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                        </h5>
                        <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-xl-4">
                    <div class="{{z(class)|upset_class()}} blurb-custom">
                        <div class="{{z(class)|upset_class()}} icon icon-image icon-image-lg icon-image-secondary">
                            <img src="{{tempdir}}assets/picture/icon-light-3-70x61.png" alt="<?php echo explode_array('：',z('service_text_3'),0) ?>" width="70" height="61">
                        </div>
                        <h5 class="{{z(class)|upset_class()}} blurb-title">
                            <p><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                        </h5>
                        <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-primary-dark context-dark">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40">
                <div class="{{z(class)|upset_class()}} col-md-12 text-center">
                    <h3>用户的评价</h3>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-12">
                    <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-var-2" data-items="1" data-sm-items="1" data-md-items="3" data-lg-items="3" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                        <?php for ($i=1; $i<=4; $i++) {?>
                            <div class="{{z(class)|upset_class()}} item">
                                <blockquote class="{{z(class)|upset_class()}} quote quote-custom quote-secondary">
                                    <div class="{{z(class)|upset_class()}} quote-meta">
                                        <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs align-items-center">
                                            <div class="{{z(class)|upset_class()}} unit-left">
                                                <img class="{{z(class)|upset_class()}} rounded-circle" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="60" height="60">
                                            </div>
                                            <div class="{{z(class)|upset_class()}} unit-body">
                                                <cite><?php echo explode_array('||',z('ask_all_'.$i),1)?></cite>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} quote-body">
                                        <p>
                                            <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xs bg-gray">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-var-2" data-items="1" data-sm-items="1" data-md-items="5" data-lg-items="5" data-xl-items="5" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                <?php for ($i=1; $i<=6; $i++) {?>
                    <div class="{{z(class)|upset_class()}} item">
                        <p class="{{z(class)|upset_class()}} link-hover-1">
                            <img src="<?php echo z('partner_img_'.$i) ?>" width="200" height="120">
                        </p>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>