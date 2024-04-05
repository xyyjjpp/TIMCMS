{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-height="33%" data-min-height="600px" data-dots="true" data-autoplay="5000">
            <div class="{{z(class)|upset_class()}} swiper-wrapper">
                <div class="{{z(class)|upset_class()}} swiper-slide swiper-slide-overlay-disable" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_1'),0)?>" style="background-position: center center"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide swiper-slide-overlay-disable" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_2'),0)?>" style="background-position: center center"></div>
                <div class="{{z(class)|upset_class()}} swiper-slide swiper-slide-overlay-disable" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_3'),0)?>" style="background-position: center center"></div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-caption-wraper">
                <div class="{{z(class)|upset_class()}} container section-41">
                    <h2 class="{{z(class)|upset_class()}} fw-bold"><?php echo explode_array('||',z('home_banner_all_1'),1)?> <?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
                    <div class="{{z(class)|upset_class()}} offset-top-30">
                        <div class="{{z(class)|upset_class()}} group text-center">
                            <a class="{{z(class)|upset_class()}} btn btn-primary" href="{{u(2)}}">认识我们</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} swiper-pagination swiper-pagination-type-2"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 novi-background bg-cover bg-lighter">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,2)}}</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} row row-fix row-30">
                <div class="{{z(class)|upset_class()}} col-lg-5">
                    <div class="{{z(class)|upset_class()}} ratio ratio-16x9">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-7 text-lg-start">
                    <div class="{{z(class)|upset_class()}} inset-lg-left-40">
                        {{z(about_text)}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-bottom-60 section-top-34 section-lg-bottom-110 section-lg-top-66 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,3)}}</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} row row-60">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <div class="{{z(class)|upset_class()}} box-products">
                        <img class="{{z(class)|upset_class()}} img-fluid d-inline-block" src="{{$a['pic']}}" width="370" height="250" alt="{{$a['title']}}">
                        <div class="{{z(class)|upset_class()}} text-md-start box-products-inner">
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-primary">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <div>
                                <p>{{$a['content']|text(100)}}...</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
            <div class="{{z(class)|upset_class()}} offset-top-50">
                <a class="{{z(class)|upset_class()}} btn btn-primary" href="{{u(3)}}">更多案例</a>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" style="background-color: #0d66c2">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-98 section-md-110">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,5)}}</h2>
                    <hr class="{{z(class)|upset_class()}} divider bg-saffron">
                    <div class="{{z(class)|upset_class()}} row row-60 justify-content-sm-center offset-top-41 offset-lg-top-66">
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-crosshairs-gps icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_1'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-lock icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_2'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-home icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_3'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-city icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_4'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-car icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_5'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-4">
                            <span class="{{z(class)|upset_class()}} novi-icon novi-background icon icon-circle mdi mdi-map-marker icon-carrot-filled"></span>
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-uppercase"><?php echo explode_array('：',z('service_text_6'),0) ?></h5>
                            <p class="{{z(class)|upset_class()}} text-light"><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-background section-66 section-lg-124 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,4)}}</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-md-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-12">
                    <div class="{{z(class)|upset_class()}} row row-40 row-md-30">
                        {{$set=array()}}
                        {{$set['cid']=4}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-lg-6">
                            <a class="{{z(class)|upset_class()}} d-block" href="{{$a['link']}}">
                                <div class="{{z(class)|upset_class()}} post post-boxed">
                                    <div class="{{z(class)|upset_class()}} post-media">
                                        <img class="{{z(class)|upset_class()}} img-fluid" width="570" height="321" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                    </div>
                                    <div class="{{z(class)|upset_class()}} post-content text-start">
                                        <div class="{{z(class)|upset_class()}} post-body">
                                            <div class="{{z(class)|upset_class()}} post-title">
                                                <h3 title="7 Important Tips for Buying a Home">{{$a['title']}}</h3>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-meta small">
                                                <ul class="{{z(class)|upset_class()}} list-inline list-inline-sm p">
                                                    <li class="{{z(class)|upset_class()}} list-inline-item">
                                                        <span class="{{z(class)|upset_class()}} align-middle novi-icon icon-xxs mdi mdi-clock"></span>
                                                        <time class="{{z(class)|upset_class()}} fst-italic align-middle text-primary" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{/loop}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 bg-lighter novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">用户评价</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} offset-top-41 offset-lg-top-66">
                <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-classic owl-carousel-class-light owl-carousel-testimonials-3" data-items="1" data-md-items="2" data-xl-items="3" data-nav="false" data-dots="true" data-margin="50px">
                    <?php for ($i=1; $i<=5; $i++) {?>
                    <div>
                        <blockquote class="{{z(class)|upset_class()}} quote quote-slider-4 unit unit-spacing-sm flex-md-row text-md-start">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <img class="{{z(class)|upset_class()}} quote-img rounded-circle" width="80" height="80" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <div>
                                    <p>
                                        <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                                    </p>
                                </div>
                                <p class="{{z(class)|upset_class()}} fw-bold quote-author offset-top-10 offset-md-top-4">
                                    <cite class="{{z(class)|upset_class()}} text-normal"><?php echo explode_array('||',z('ask_all_'.$i),1)?></cite>
                                </p>
                            </div>
                        </blockquote>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} section-66 section-lg-110">
            <div class="{{z(class)|upset_class()}} container">
                <h2>问题解答</h2>
                <hr class="{{z(class)|upset_class()}} divider bg-saffron">
                <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center text-start">
                    <div class="{{z(class)|upset_class()}} col-sm-10">
                        <div class="{{z(class)|upset_class()}} offset-top-0 card-classic-wrap" role="tablist" aria-multiselectable="true" id="accordion-1">
                            <div class="{{z(class)|upset_class()}} card card-classic">
                                <a class="{{z(class)|upset_class()}} card-header" href="#" data-bs-toggle="collapse" data-bs-target="#accordion-1--card-0" aria-expanded="true" aria-controls="accordion-1--card-0"><?php echo explode_array('：',z('faq_text_1'),0) ?></a>
                                <div class="{{z(class)|upset_class()}} collapse show" id="accordion-1--card-0" data-bs-parent="#accordion-1">
                                    <div class="{{z(class)|upset_class()}} card-body"><?php echo explode_array('：',z('faq_text_1'),1) ?></div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} card card-classic">
                                <a class="{{z(class)|upset_class()}} card-header collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accordion-1--card-1" aria-expanded="false" aria-controls="accordion-1--card-1"><?php echo explode_array('：',z('faq_text_2'),0) ?></a>
                                <div class="{{z(class)|upset_class()}} collapse" id="accordion-1--card-1" data-bs-parent="#accordion-1">
                                    <div class="{{z(class)|upset_class()}} card-body"><?php echo explode_array('：',z('faq_text_2'),1) ?></div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} card card-classic">
                                <a class="{{z(class)|upset_class()}} card-header collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accordion-1--card-2" aria-expanded="false" aria-controls="accordion-1--card-2"><?php echo explode_array('：',z('faq_text_3'),0) ?></a>
                                <div class="{{z(class)|upset_class()}} collapse" id="accordion-1--card-2" data-bs-parent="#accordion-1">
                                    <div class="{{z(class)|upset_class()}} card-body"><?php echo explode_array('：',z('faq_text_3'),1) ?></div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} card card-classic">
                                <a class="{{z(class)|upset_class()}} card-header collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accordion-1--card-3" aria-expanded="false" aria-controls="accordion-1--card-3"><?php echo explode_array('：',z('faq_text_4'),0) ?></a>
                                <div class="{{z(class)|upset_class()}} collapse" id="accordion-1--card-3" data-bs-parent="#accordion-1">
                                    <div class="{{z(class)|upset_class()}} card-body"><?php echo explode_array('：',z('faq_text_4'),1) ?></div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} card card-classic">
                                <a class="{{z(class)|upset_class()}} card-header collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accordion-1--card-4" aria-expanded="false" aria-controls="accordion-1--card-4"><?php echo explode_array('：',z('faq_text_5'),0) ?></a>
                                <div class="{{z(class)|upset_class()}} collapse" id="accordion-1--card-4" data-bs-parent="#accordion-1">
                                    <div class="{{z(class)|upset_class()}} card-body"><?php echo explode_array('：',z('faq_text_5'),1) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" style="background-color: #3f5a78">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-66 section-lg-110">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">发送邮件</h2>
                    <hr class="{{z(class)|upset_class()}} divider bg-saffron">
                    <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center offset-top-41 offset-lg-top-66">
                        <div class="{{z(class)|upset_class()}} col-md-8">
                            <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                                <div class="{{z(class)|upset_class()}} row row-24 row-fix">
                                    <div class="{{z(class)|upset_class()}} col-xl-6">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="real-estate-first-name">First name:</label>
                                            <input class="{{z(class)|upset_class()}} form-control" id="real-estate-first-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-xl-6 offset-xl-top-0">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="real-estate-last-name">Last name:</label>
                                            <input class="{{z(class)|upset_class()}} form-control" id="real-estate-last-name" type="text" name="last_name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-xl-6">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="real-estate-phone">Phone:</label>
                                            <input class="{{z(class)|upset_class()}} form-control" id="real-estate-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-xl-6">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="real-estate-mail">E-mail:</label>
                                            <input class="{{z(class)|upset_class()}} form-control" id="real-estate-mail" type="email" name="email" data-constraints="@Required @Email">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-xl-12">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="contact-me-message">Message:</label>
                                            <textarea class="{{z(class)|upset_class()}} form-control" id="contact-me-message" name="message" data-constraints="@Required" style="height: 150px"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} offset-top-30 text-center">
                                    <button class="{{z(class)|upset_class()}} btn btn-primary" type="submit">send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>