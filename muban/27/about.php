{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css" id="main-styles-link">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
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
    <section class="{{z(class)|upset_class()}} section section-sm section-first bg-default text-md-left">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center align-items-xl-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-5 col-xl-6">
                    <img src="{{z(about_img)}}" alt="" width="519" height="564">
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-7 col-xl-6">
                    <h3 class="{{z(class)|upset_class()}} text-spacing-25 font-weight-normal">{{i(name,2)}}</h3>
                    <div class="{{z(class)|upset_class()}} tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                        <div class="{{z(class)|upset_class()}} tab-content">
                            <div class="{{z(class)|upset_class()}} tab-pane fade show active" id="tabs-4-1">
                                {{z(about_text)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-last bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h3>用户给予的评价</h3>
            <div class="{{z(class)|upset_class()}} owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                <?php for ($i=1; $i<=4; $i++) {?>
                    <article class="{{z(class)|upset_class()}} quote-lisa">
                        <div class="{{z(class)|upset_class()}} quote-lisa-body">
                            <a class="{{z(class)|upset_class()}} quote-lisa-figure">
                                <img class="{{z(class)|upset_class()}} img-circles" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="100" height="100">
                            </a>
                            <div class="{{z(class)|upset_class()}} quote-lisa-text">
                                <p class="{{z(class)|upset_class()}} q"><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                            </div>
                            <h5 class="{{z(class)|upset_class()}} quote-lisa-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></h5>
                        </div>
                    </article>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h3>合作伙伴</h3>
            <div class="{{z(class)|upset_class()}} row row-30 row-sm">
                <?php for ($i=1; $i<=8; $i++) {?>
                    <div class="{{z(class)|upset_class()}} col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s">
                        <a class="{{z(class)|upset_class()}} clients-classic">
                            <img src="<?php echo z('partner_img_'.$i) ?>" width="270" height="145">
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>