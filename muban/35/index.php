{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} swiper-form-wrap">
            <div class="{{z(class)|upset_class()}} swiper-container swiper-container swiper-container_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="4782" data-simulate-touch="false" data-slide-effect="fade">
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_1'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption event-default-swiper">
                            <div class="{{z(class)|upset_class()}} container container-bigger swiper-main-section">
                                <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3><?php echo explode_array('||',z('home_banner_all_1'),1) ?></h3>
                                        <p class="{{z(class)|upset_class()}} text-spacing-sm"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></p>
                                        <a class="{{z(class)|upset_class()}} button button-white" href="{{u(2)}}">知道我们</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_2'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption event-default-swiper">
                            <div class="{{z(class)|upset_class()}} container container-bigger swiper-main-section">
                                <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3><?php echo explode_array('||',z('home_banner_all_2'),1) ?></h3>
                                        <p class="{{z(class)|upset_class()}} text-spacing-sm"><?php echo explode_array("&#x2c;",z('keywords'),1) ?></p>
                                        <a class="{{z(class)|upset_class()}} button button-white" href="{{u(6)}}">联系我们</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_3'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption event-default-swiper">
                            <div class="{{z(class)|upset_class()}} container container-bigger swiper-main-section">
                                <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                        <h3><?php echo explode_array('||',z('home_banner_all_3'),1) ?></h3>
                                        <p class="{{z(class)|upset_class()}} text-spacing-sm"><?php echo explode_array("&#x2c;",z('keywords'),2) ?></p>
                                        <a class="{{z(class)|upset_class()}} button button-white" href="{{u(3)}}">产品案例</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-pagination-wrap">
                    <div class="{{z(class)|upset_class()}} container container-bigger">
                        <div class="{{z(class)|upset_class()}} row">
                            <div class="{{z(class)|upset_class()}} col-sm-12">
                                <div class="{{z(class)|upset_class()}} swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6 col-xl-5">
                    <h3>{{i(name,2)}}</h3>
                    <div class="{{z(class)|upset_class()}} divider divider-default"></div>
                    {{z(about_text)}}
                    <a class="{{z(class)|upset_class()}} button" href="{{u(2)}}">了解我们</a>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="720" height="459">
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-variant-1 bg-default novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-xl-end row-30">
                <div class="{{z(class)|upset_class()}} col-xl-8">
                    <div class="{{z(class)|upset_class()}} parallax-text-wrap">
                        <h3>{{i(name,3)}}</h3>
                        <span class="{{z(class)|upset_class()}} parallax-text">Our Profiles</span>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-xl-3 text-xl-end">
                    <a class="{{z(class)|upset_class()}} button" href="{{u(3)}}">更多案例</a>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-xxl-60 row-50 offset-top-xxl-93">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} event-default-wrap">
                        <div class="{{z(class)|upset_class()}} event-default">
                            <figure class="{{z(class)|upset_class()}} event-default-image">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="570" height="370">
                            </figure>
                            <div class="{{z(class)|upset_class()}} event-default-caption">
                                <a class="{{z(class)|upset_class()}} button button-xs button-primary" href="{{$a['link']}}">阅读</a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} event-default-inner">
                            <h5>
                                <a class="{{z(class)|upset_class()}} event-default-title" href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-100 text-center">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <h3>{{i(name,5)}}</h3>
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-sm-center text-start">
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal-border">
                        <div class="{{z(class)|upset_class()}} box-minimal-icon novi-icon linearicons-swim"></div>
                        <p class="{{z(class)|upset_class()}} big box-minimal-title"><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                        <hr>
                        <div class="{{z(class)|upset_class()}} box-minimal-text text-spacing-sm"><?php echo explode_array('：',z('service_text_1'),1) ?></div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal-border">
                        <div class="{{z(class)|upset_class()}} box-minimal-icon novi-icon linearicons-wifi"></div>
                        <p class="{{z(class)|upset_class()}} big box-minimal-title"><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                        <hr>
                        <div class="{{z(class)|upset_class()}} box-minimal-text text-spacing-sm"><?php echo explode_array('：',z('service_text_2'),1) ?></div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal-border">
                        <div class="{{z(class)|upset_class()}} box-minimal-icon novi-icon linearicons-chef"></div>
                        <p class="{{z(class)|upset_class()}} big box-minimal-title"><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                        <hr>
                        <div class="{{z(class)|upset_class()}} box-minimal-text text-spacing-sm"><?php echo explode_array('：',z('service_text_3'),1) ?></div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal-border">
                        <div class="{{z(class)|upset_class()}} box-minimal-icon novi-icon linearicons-car"></div>
                        <p class="{{z(class)|upset_class()}} big box-minimal-title"><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                        <hr>
                        <div class="{{z(class)|upset_class()}} box-minimal-text text-spacing-sm"><?php echo explode_array('：',z('service_text_4'),1) ?></div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-variant-1 bg-default novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-xl-end row-30">
                <div class="{{z(class)|upset_class()}} col-xl-8">
                    <div class="{{z(class)|upset_class()}} parallax-text-wrap">
                        <h3>{{i(name,4)}}</h3>
                        <span class="{{z(class)|upset_class()}} parallax-text">Our News</span>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-xl-3 text-xl-end">
                    <a class="{{z(class)|upset_class()}} button" href="{{u(4)}}">更多新闻</a>
                </div>
                <div class="{{z(class)|upset_class()}} owl-carousel owl-carousel-team owl-carousel-inset row" data-items="1" data-sm-items="1" data-md-items="1" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-stage-padding="5" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
                    {{$set=array()}}
                    {{$set['cid']=4}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic,click}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <article class="{{z(class)|upset_class()}} post-blog">
                        <a class="{{z(class)|upset_class()}} post-blog-image" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="570" height="415">
                        </a>
                        <div class="{{z(class)|upset_class()}} post-blog-caption">
                            <div class="{{z(class)|upset_class()}} post-blog-caption-body">
                                <h5>
                                    <a class="{{z(class)|upset_class()}} post-blog-title" href="{{$a['link']}}">{{$a['title']}}</a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-blog-caption-footer">
                                <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                        </div>
                    </article>
                    {{/loop}}
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg text-center bg-gray-100">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <h3>用户评价</h3>
            <div class="{{z(class)|upset_class()}} owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="false">
                <?php for ($i=1; $i<=4; $i++) {?>
                <article class="{{z(class)|upset_class()}} quote-boxed">
                    <div class="{{z(class)|upset_class()}} quote-boxed-aside">
                        <img class="{{z(class)|upset_class()}} quote-boxed-image" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="210" height="210">
                    </div>
                    <div class="{{z(class)|upset_class()}} quote-boxed-main">
                        <div class="{{z(class)|upset_class()}} quote-boxed-text">
                            <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-boxed-meta">
                            <p class="{{z(class)|upset_class()}} quote-boxed-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                        </div>
                    </div>
                </article>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-lg-center">
                <div class="{{z(class)|upset_class()}} col-lg-10 col-xl-8">
                    <h3>常见的问题解答</h3>
                    <div class="{{z(class)|upset_class()}} card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <div class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-heading" id="accordion1Heading1" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse show" id="accordion1Collapse1" role="tabpanel" aria-labelledby="accordion1Heading1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-heading" id="accordion1Heading2" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse2" role="tabpanel" aria-labelledby="accordion1Heading2">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-heading" id="accordion1Heading3" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse3" aria-controls="accordion1Collapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse3" role="tabpanel" aria-labelledby="accordion1Heading3">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-heading" id="accordion1Heading4" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse4" aria-controls="accordion1Collapse4"><?php echo explode_array('：',z('faq_text_4'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse4" role="tabpanel" aria-labelledby="accordion1Heading4">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
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