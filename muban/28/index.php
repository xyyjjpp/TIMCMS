{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <svg class="{{z(class)|upset_class()}} defs">
        <defs>
            <lineargradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="50%" stop-color="#AA54ED">
                    <animate attributename="stop-color" values="#AA54ED; #5348E2; #AA54ED" dur="5s" repeatcount="indefinite"></animate>
                </stop>
                <stop offset="100%" stop-color="#5348E2">
                    <animate attributename="stop-color" values="#5348E2; #AA54ED; #5348E2" dur="5s" repeatcount="indefinite"></animate>
                </stop>
            </lineargradient>
        </defs>
    </svg>
    <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-effect="frame-trapeze" data-loop="true" data-autoplay="5500" data-speed="1200" data-mousewheel="false" data-keyboard="true" data-frame-fill="url(#gradient1)">
        <div class="{{z(class)|upset_class()}} swiper-wrapper">
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} swiper-slide-img" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_1'),0) ?>);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption text-center context-dark">
                    <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">
                        <span class="{{z(class)|upset_class()}} text-lowercase heading-2 text-white"><?php echo explode_array('||',z('home_banner_all_1'),1) ?></span>
                    </h2>
                    <h3 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 600 }"><?php echo explode_array("&#x2c;",z('keywords'),1) ?></h3>
                    <div class="{{z(class)|upset_class()}} group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }">
                        <a class="{{z(class)|upset_class()}} button button-primary button-shadow" href="{{u(2)}}" data-custom-scroll-to="features">了解我们</a>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} swiper-slide-img" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_2'),0) ?>);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption text-center context-dark">
                    <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">
                        <span class="{{z(class)|upset_class()}} text-lowercase heading-2 text-white"><?php echo explode_array('||',z('home_banner_all_2'),1) ?></span>
                    </h2>
                    <h3 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 600 }"><?php echo explode_array("&#x2c;",z('keywords'),2) ?></h3>
                    <div class="{{z(class)|upset_class()}} group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }">
                        <a class="{{z(class)|upset_class()}} button button-primary button-shadow" href="{{u(5)}}" data-custom-scroll-to="features">服务</a>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-slide">
                <div class="{{z(class)|upset_class()}} swiper-slide-img" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_2'),0) ?>);" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperSlideRotate&quot;, &quot;duration&quot;: 2000, &quot;delay&quot;: 600 }"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide-caption text-center context-dark">
                    <h2 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 500 }">
                        <span class="{{z(class)|upset_class()}} text-lowercase heading-2 text-white"><?php echo explode_array('||',z('home_banner_all_2'),1) ?></span>
                    </h2>
                    <h3 data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 600 }"><?php echo explode_array("&#x2c;",z('keywords'),3) ?></h3>
                    <div class="{{z(class)|upset_class()}} group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentStack&quot;, &quot;duration&quot;: 1000, &quot;delay&quot;: 700 }">
                        <a class="{{z(class)|upset_class()}} button button-primary button-shadow" href="{{u(6)}}" data-custom-scroll-to="features">联系我们</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="{{z(class)|upset_class()}} swiper-button-prev linear-icon-chevron-left"></div>
        <div class="{{z(class)|upset_class()}} swiper-button-next linear-icon-chevron-right"></div>
    </div>
    <section class="{{z(class)|upset_class()}} section-xs section-cta bg-gray-dark text-center text-md-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-between align-items-center">
                <div class="{{z(class)|upset_class()}} col-12 col-md-8">
                    <h4>现在就可以联系我们</h4>
                </div>
                <div class="{{z(class)|upset_class()}} col-12 col-md-4 text-md-end">
                    <a class="{{z(class)|upset_class()}} button button-primary" href="{{u(6)}}">{{i(name,6)}}</a>
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
    <section class="{{z(class)|upset_class()}} section-md bg-default text-center decor-text" id="features" data-content="Services">
        <div class="{{z(class)|upset_class()}} bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: 80,  &quot;smoothness&quot;: 30}">
            <img src="{{tempdir}}assets/picture/bg-decor-1.png" alt="" loading="lazy">
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} heading-decorated">{{i(name,5)}}</h4>
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-md-center justify-content-lg-start text-start">
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-pencil-ruler"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-users"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-wall"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-apartment"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-home4"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_5'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} blurb blurb-minimal">
                        <div class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} blurb-minimal__icon">
                                    <span class="{{z(class)|upset_class()}} icon linear-icon-pencil-ruler2"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <p class="{{z(class)|upset_class()}} blurb__title heading-6"><?php echo explode_array('：',z('service_text_6'),0) ?></p>
                                <p><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-accent bg-image text-center bg-overlay-darker" style="background-image: url({{tempdir}}assets/image/bg-image-8.jpg); background-position: center 50%;">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-md-center">
                <div class="{{z(class)|upset_class()}} col-md-11 col-lg-9 col-xl-8">
                    <h3 class="{{z(class)|upset_class()}} heading-decorated">对我们有任何的疑问都可以联系</h3>
                    <a class="{{z(class)|upset_class()}} button button-primary" href="{{u(2)}}">{{i(name,2)}}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-default text-center">
        <div class="{{z(class)|upset_class()}} bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
            <img src="{{tempdir}}assets/picture/bg-decor-6.png" alt="" loading="lazy">
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} heading-decorated">{{i(name,3)}}</h4>
            <div class="{{z(class)|upset_class()}} isotope-wrap row row-70">
                <div class="{{z(class)|upset_class()}} col-sm-12">
                    <div class="{{z(class)|upset_class()}} isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                        {{$set=array()}}
                        {{$set['cid']=3}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,shijian,pic,content}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2">
                            <a class="{{z(class)|upset_class()}} img-thumbnail-variant-3" href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="418" height="315">
                                <span class="{{z(class)|upset_class()}} label-custom label-white">Link</span>
                                <div class="{{z(class)|upset_class()}} caption">
                                    <p class="{{z(class)|upset_class()}} heading-5 hover-top-element">{{$a['title']}}</p>
                                    <div class="{{z(class)|upset_class()}} divider"></div>
                                    <p class="{{z(class)|upset_class()}} small hover-bottom-element">{{$a['content']|text(100)}}...</p>
                                    <span class="{{z(class)|upset_class()}} icon arrow-right linear-icon-arrow-right"></span>
                                </div>
                            </a>
                        </div>
                        {{/loop}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-10">
                    <div id="accordion" role="tablist">
                        <div class="{{z(class)|upset_class()}} card card-custom">
                            <div class="{{z(class)|upset_class()}} card-custom-heading" id="accordionHeading1" role="tab">
                                <h5 class="{{z(class)|upset_class()}} card-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1"><?php echo explode_array('：',z('faq_text_1'),0) ?></a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1" data-bs-parent="#accordion">
                                <div class="{{z(class)|upset_class()}} card-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} card card-custom">
                            <div class="{{z(class)|upset_class()}} card-custom-heading" id="accordionHeading2" role="tab">
                                <h5 class="{{z(class)|upset_class()}} card-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?></a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2" data-bs-parent="#accordion">
                                <div class="{{z(class)|upset_class()}} card-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} card card-custom">
                            <div class="{{z(class)|upset_class()}} card-custom-heading" id="accordionHeading3" role="tab">
                                <h5 class="{{z(class)|upset_class()}} card-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?></a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3" data-bs-parent="#accordion">
                                <div class="{{z(class)|upset_class()}} card-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-accent-gradient context-dark">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-sm-12 text-center">
                    <h4 class="{{z(class)|upset_class()}} heading-decorated">{{i(name,4)}}</h4>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-60">
                <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-spacing-2" data-items="1" data-sm-items="2" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-margin="30" data-mouse-drag="false" data-loop="true" data-autoplay="true">
                    {{$set=array()}}
                    {{$set['cid']=4}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic,content}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} item">
                        <article class="{{z(class)|upset_class()}} post-classic post-minimal">
                            <a class="{{z(class)|upset_class()}} post-minimal-image" href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="418" height="315">
                            </a>
                            <div class="{{z(class)|upset_class()}} post-classic-title">
                                <h6>
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h6>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-meta">
                                <div class="{{z(class)|upset_class()}} group">
                                    <time datetime="{{$a['shijian']|date('Y-m-d,this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-classic-body">
                                <p>{{$a['content']|text(100)}}...</p>
                            </div>
                        </article>
                    </div>
                    {{/loop}}
                </div>
            </div>
        </div>
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