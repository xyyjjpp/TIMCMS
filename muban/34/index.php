{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <main class="{{z(class)|upset_class()}} page-content">
        <section class="{{z(class)|upset_class()}} context-dark bg-dark-blue text-center">
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider swiper-slider-classic slider-classic-arrow" data-height="35.5%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="fade">
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_1'),0)?>" style="background-position: center center;">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption">
                            <div class="{{z(class)|upset_class()}} container">
                                <div class="{{z(class)|upset_class()}} range range-xs-center">
                                    <div class="{{z(class)|upset_class()}} cell-lg-7 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                            <h2><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-30" data-caption-animate="fadeInUp" data-caption-delay="150">
                                            <h4 class="{{z(class)|upset_class()}} font-default text-light text-spacing-20 veil reveal-sm-block"><?php echo explode_array('||',z('home_banner_all_1'),1)?></h4>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-20" data-caption-animate="fadeInUp" data-caption-delay="200">
                                            <a class="{{z(class)|upset_class()}} btn btn-default btn-sm veil reveal-lg-inline-block" href="{{u(2)}}">知道我们</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_2'),0)?>" style="background-position: center center;">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption">
                            <div class="{{z(class)|upset_class()}} container">
                                <div class="{{z(class)|upset_class()}} range range-xs-center">
                                    <div class="{{z(class)|upset_class()}} cell-lg-7 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                            <h2><?php echo explode_array("&#x2c;",z('keywords'),1) ?></h2>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-30" data-caption-animate="fadeInUp" data-caption-delay="150">
                                            <h4 class="{{z(class)|upset_class()}} font-default text-light text-spacing-20 veil reveal-sm-block"><?php echo explode_array('||',z('home_banner_all_2'),1)?></h4>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-20" data-caption-animate="fadeInUp" data-caption-delay="200">
                                            <a class="{{z(class)|upset_class()}} btn btn-default btn-sm veil reveal-lg-inline-block" href="{{u(6)}}">联系我们</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_3'),0)?>" style="background-position: center center;">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption">
                            <div class="{{z(class)|upset_class()}} container">
                                <div class="{{z(class)|upset_class()}} range range-xs-center">
                                    <div class="{{z(class)|upset_class()}} cell-lg-7 cell-xs-10">
                                        <div data-caption-animate="fadeInUp" data-caption-delay="200">
                                            <h2><?php echo explode_array("&#x2c;",z('keywords'),2) ?></h2>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-30" data-caption-animate="fadeInUp" data-caption-delay="300">
                                            <h4 class="{{z(class)|upset_class()}} font-default text-light text-spacing-20 veil reveal-sm-block"><?php echo explode_array('||',z('home_banner_all_3'),1)?></h4>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} offset-top-20" data-caption-animate="fadeInUp" data-caption-delay="500">
                                            <a class="{{z(class)|upset_class()}} btn btn-default btn-sm veil reveal-lg-inline-block" href="{{u(3)}}">产品案例</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-pagination"></div>
                <div class="{{z(class)|upset_class()}} swiper-button-prev fa-chevron-left"></div>
                <div class="{{z(class)|upset_class()}} swiper-button-next fa-chevron-right"></div>
            </div>
        </section>
        <br>
        <section>
            <div class="{{z(class)|upset_class()}} shell text-sm-left">
                <h2>{{i(name,2)}}</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary hr-sm-left-0">
                <div class="{{z(class)|upset_class()}} range range-xs-center range-sm-left offset-top-50">
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-sm-5 text-sm-left">
                        <img class="{{z(class)|upset_class()}} img-responsive" src="{{z(about_img)}}" width="451" height="304" alt="{{i(name,2)}}">
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-sm-7 offset-top-50 offset-sm-top-0">
                        {{z(about_text)}}
                        <div class="{{z(class)|upset_class()}} offset-top-20">
                            <a class="{{z(class)|upset_class()}} btn btn-primary btn-sm" href="{{u(2)}}">了解我们</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="{{z(class)|upset_class()}} section-90 section-lg-bottom-110 section-skew bg-lightest">
            <div class="{{z(class)|upset_class()}} shell">
                <h2>{{i(name,5)}}</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary">
                <div class="{{z(class)|upset_class()}} range text-md-left offset-top-50 range-xs-center">
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled fa-cubes"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_1'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled fa-truck"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_2'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled mdi fa-map"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_3'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4 offset-top-50">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled fa-star"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_4'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4 offset-top-50">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled fa-comments"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_5'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4 offset-top-50">
                        <div class="{{z(class)|upset_class()}} unit unit-md unit-md-horizontal text-md-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <span class="{{z(class)|upset_class()}} icon icon-lg icon-circle icon-primary-filled mdi fa-suitcase"></span>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h4 class="{{z(class)|upset_class()}} text-bold font-accent"><?php echo explode_array('：',z('service_text_6'),0) ?></h4>
                                <p><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="{{z(class)|upset_class()}} section-90 bg-dark-blue context-dark section-skew section-skew-wide">
            <div class="{{z(class)|upset_class()}} shell">
                <h2>荣誉</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary">
                <div class="{{z(class)|upset_class()}} range range-xs-center range-md-left offset-top-50 text-center counters">
                    <div class="{{z(class)|upset_class()}} cell-sm-6 cell-md-3">
                        <div class="{{z(class)|upset_class()}} counter-type-1">
                            <div>
                                <div class="{{z(class)|upset_class()}} h2 font-accent">
                                    <span class="{{z(class)|upset_class()}} counter" data-step="3000" data-from="0" data-to="1324"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-12">
                                <h6 class="{{z(class)|upset_class()}} text-gray">伙伴</h6>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-6 cell-md-3 offset-top-65 offset-sm-top-0">
                        <div class="{{z(class)|upset_class()}} counter-type-1">
                            <div>
                                <div class="{{z(class)|upset_class()}} h2 font-accent">
                                    <span class="{{z(class)|upset_class()}} counter" data-step="2500" data-from="0" data-to="65"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-12">
                                <h6 class="{{z(class)|upset_class()}} text-gray">经验</h6>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                        <div class="{{z(class)|upset_class()}} counter-type-1">
                            <div>
                                <div class="{{z(class)|upset_class()}} h2 font-accent">
                                    <span class="{{z(class)|upset_class()}} counter" data-step="1500" data-from="0" data-to="268"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-12">
                                <h6 class="{{z(class)|upset_class()}} text-gray">用户</h6>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
                        <div class="{{z(class)|upset_class()}} counter-type-1">
                            <div>
                                <div class="{{z(class)|upset_class()}} h2 font-accent">
                                    <span class="{{z(class)|upset_class()}} counter" data-step="5300" data-from="0" data-to="2847951"></span>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-12">
                                <h6 class="{{z(class)|upset_class()}} text-gray">案例</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="{{z(class)|upset_class()}} section-100 bg-lighter">
            <div class="{{z(class)|upset_class()}} shell">
                <h2>{{i(name,3)}}</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary">
                <div class="{{z(class)|upset_class()}} range range-xs-center offset-top-50">
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-sm-8">
                        <p>Our Profiles</p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} range text-left range-xs-center offset-top-50">
                    {{$set=array()}}
                    {{$set['cid']=3}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} cell-xs-8 cell-sm-6 cell-md-4">
                        <a class="{{z(class)|upset_class()}} thumbnail-classic" href="{{$a['link']}}" target="_self">
                            <figure>
                                <img width="370" height="250" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                <figcaption class="{{z(class)|upset_class()}} thumbnail-classic-caption text-center">
                                    <span class="{{z(class)|upset_class()}} icon icon-xxs fa-arrow-right"></span>
                                    <h6 class="{{z(class)|upset_class()}} thumbnail-classic-title offset-top-0 text-uppercase text-light">{{$a['title']}}</h6>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    {{/loop}}
                </div>
                <div class="{{z(class)|upset_class()}} offset-top-50">
                    <a class="{{z(class)|upset_class()}} btn btn-default btn-sm" href="{{u(3)}}">更多案例</a>
                </div>
            </div>
        </section>
        <section class="{{z(class)|upset_class()}} section-70 section-md-90 section-md-bottom-120 section-skew section-skew-wide">
            <div class="{{z(class)|upset_class()}} skew-block"></div>
            <div class="{{z(class)|upset_class()}} shell text-sm-left">
                <h2>用户评价</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary hr-md-left-0">
                <div class="{{z(class)|upset_class()}} offset-top-50">
                    <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-default" data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-sm-items="3" data-nav="false" data-margin="30">
                        <?php for ($i=1; $i<=5; $i++) {?>
                        <div>
                            <div class="{{z(class)|upset_class()}} quote-simple">
                                <div class="{{z(class)|upset_class()}} unit unit-sm unit-sm-horizontal text-sm-left unit-sm-middle">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <img class="{{z(class)|upset_class()}} img-responsive reveal-inline-block img-circle" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" width="70" height="70" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <p class="{{z(class)|upset_class()}} text-primary">
                                            <cite class="{{z(class)|upset_class()}} text-normal text-bold">
                                                <p><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                                            </cite>
                                        </p>
                                    </div>
                                </div>
                                <p class="{{z(class)|upset_class()}} offset-top-20">
                                    <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                                </p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <section class="{{z(class)|upset_class()}} section-100">
            <div class="{{z(class)|upset_class()}} shell">
                <h2>{{i(name,4)}}</h2>
                <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary">
                <div class="{{z(class)|upset_class()}} range text-md-left offset-top-50 range-xs-center text-md-left">
                    {{$set=array()}}
                    {{$set['cid']=4}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic,content}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} cell-sm-8 cell-md-4">
                        <article class="{{z(class)|upset_class()}} post-news">
                            <a class="{{z(class)|upset_class()}} thumbnail-default" href="{{$a['link']}}" target="_self">
                                <figure>
                                    <img class="{{z(class)|upset_class()}} img-responsive" width="370" height="270" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                </figure>
                                <span class="{{z(class)|upset_class()}} icon icon-xxs fa-link"></span>
                            </a>
                            <div class="{{z(class)|upset_class()}} offset-top-10">
                                <h5 class="{{z(class)|upset_class()}} text-primary text-bold">
                                    <a class="{{z(class)|upset_class()}} post-news-title" href="{{$a['link']}}">{{$a['title']}}</a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-15">
                                <div class="{{z(class)|upset_class()}} post-meta">
                                    <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-gray text-middle"></span>
                                    <time class="{{z(class)|upset_class()}} text-gray inset-left-5 text-middle" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </div>
                            <p>{{$a['content']|text(100)}}...</p>
                        </article>
                    </div>
                    {{/loop}}
                </div>
                <div class="{{z(class)|upset_class()}} offset-top-50">
                    <a class="{{z(class)|upset_class()}} btn btn-primary btn-sm" href="{{u(4)}}">更多新闻</a>
                </div>
            </div>
        </section>
        <section class="{{z(class)|upset_class()}} section-70 section-md-98 section-md-bottom-120">
            <div class="{{z(class)|upset_class()}} shell text-sm-left">
                <div class="{{z(class)|upset_class()}} range range-xs-center range-md-left">
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-lg-8">
                        <h2>用户常见的问题</h2>
                        <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary hr-sm-left-0">
                        <p class="{{z(class)|upset_class()}} offset-top-50">F A Q , S</p>
                        <div class="{{z(class)|upset_class()}} offset-top-50">
                            <div class="{{z(class)|upset_class()}} responsive-tabs responsive-tabs-classic" data-type="accordion">
                                <ul class="{{z(class)|upset_class()}} resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                                    <?php for ($i=1; $i<=5; $i++) {?>
                                    <li><?php echo explode_array('：',z('faq_text_'.$i),0) ?></li>
                                    <?php }?>
                                </ul>
                                <div class="{{z(class)|upset_class()}} resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                                    <?php for ($i=1; $i<=5; $i++) {?>
                                    <div><?php echo explode_array('：',z('faq_text_'.$i),1) ?></div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{{file footer}}
</body>
</html>