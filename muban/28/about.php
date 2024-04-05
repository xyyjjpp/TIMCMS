{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section parallax-container context-dark" data-parallax-img="{{z(about_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content parallax-header">
            <div class="{{z(class)|upset_class()}} parallax-header__inner context-dark">
                <div class="{{z(class)|upset_class()}} parallax-header__content">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-sm-center">
                            <div class="{{z(class)|upset_class()}} col-md-10 col-xl-8">
                                <h2 class="{{z(class)|upset_class()}} heading-decorated">{{i(name)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} bg-gray-lighter object-wrap">
        <div class="{{z(class)|upset_class()}} bg-decor d-flex align-items-center justify-content-start" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
            <img src="{{tempdir}}assets/picture/bg-decor-4.png">
        </div>
        <div class="{{z(class)|upset_class()}} section-lg">
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} row">
                    <div class="{{z(class)|upset_class()}} col-lg-5 position-relative">
                        <h4 class="{{z(class)|upset_class()}} heading-decorated">{{i(name,2)}}</h4>
                        {{z(about_text)}}
                    </div>
                </div>
            </div>
        </div>
        <div class="{{z(class)|upset_class()}} object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url({{z(about_img)}})"></div>
    </section>
    <section class="{{z(class)|upset_class()}} section parallax-container context-dark decor-text" data-parallax-img="images/bg-image-6.jpg" data-content="Testimonials">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container section-lg text-center">
                <h4 class="{{z(class)|upset_class()}} heading-decorated">用户的评价</h4>
                <div class="{{z(class)|upset_class()}} owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
                    <?php for ($i=1; $i<=4; $i++) {?>
                        <div class="{{z(class)|upset_class()}} item">
                            <div class="{{z(class)|upset_class()}} quote-default">
                                <div class="{{z(class)|upset_class()}} quote-default__image">
                                    <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="120" height="120" >
                                </div>
                                <div class="{{z(class)|upset_class()}} quote-default__text">
                                    <p class="{{z(class)|upset_class()}} q"><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                                </div>
                                <p class="{{z(class)|upset_class()}} quote-default__cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md text-center bg-default">
        <div class="{{z(class)|upset_class()}} bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 130, &quot;smoothness&quot;: 30}">
            <img src="{{tempdir}}assets/picture/bg-decor-4.png" alt="" loading="lazy">
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} heading-decorated">合作伙伴</h4>
            <div class="{{z(class)|upset_class()}} row row-30">
                <?php for ($i=1; $i<=8; $i++) {?>
                    <div class="{{z(class)|upset_class()}} col-sm-6 col-md-3">
                        <figure class="{{z(class)|upset_class()}} box-icon-image">
                            <img src="<?php echo z('partner_img_'.$i) ?>" width="134" height="102">
                        </figure>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>