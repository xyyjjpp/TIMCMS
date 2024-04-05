{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} bg-dark-overlay section-bredcrumbs" style="background-image: url({{z(about_banner_img)}})">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <h2 class="{{z(class)|upset_class()}} title">{{i(name)}}</h2>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default wow fadeIn">
        <div class="{{z(class)|upset_class()}} container text-center text-lg-start">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 wow fadeInUpSmall">
                    <h3>{{i(name,2)}}</h3>
                    {{z(about_text)}}
                    <a class="{{z(class)|upset_class()}} button button-primary-outline" href="{{u(2)}}">
                        <span>知道我们</span>
                    </a>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 col-xl-5 offset-xl-1 item-image wow fadeInUpSmall" data-wow-delay=".2s">
                    <div class="{{z(class)|upset_class()}} item-image-wrap">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="500" height="325">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-wide text-center">
            <div class="{{z(class)|upset_class()}} title-block-2">
                <h3>用户的评价</h3>
            </div>
            <div class="{{z(class)|upset_class()}} row row-40 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-8 col-xxl-6 position-relative">
                    <div class="{{z(class)|upset_class()}} slick-slider slick-slider-1-child" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-slide-to-scroll="1" data-center-mode="true">
                        <?php for ($i=1; $i<=5; $i++) {?>
                            <div class="{{z(class)|upset_class()}} item">
                                <img class="{{z(class)|upset_class()}} quote-image" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="120" height="120">
                            </div>
                        <?php }?>
                    </div>
                    <div class="{{z(class)|upset_class()}} slick-slider slick-slider-1-parent carousel-parent" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                        <?php for ($i=1; $i<=5; $i++) {?>
                            <div class="{{z(class)|upset_class()}} item">
                                <blockquote class="{{z(class)|upset_class()}} quote quote-default quote-top">
                                    <div class="{{z(class)|upset_class()}} quote-icon">
                                        <div class="{{z(class)|upset_class()}} icon mdi mdi-format-quote"></div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} quote-body">
                                        <p>
                                            <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                                        </p>
                                        <cite><?php echo explode_array('||',z('ask_all_'.$i),1)?></cite>
                                    </div>
                                </blockquote>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>