{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section one-screen-page context-dark bg-dark-overlay" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_1'),0)?>)">
        <div class="{{z(class)|upset_class()}} one-screen-page-inner one-screen-page-inner-middle"></div>
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
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-light">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} title-block-1">
                <h3>{{i(name,3)}}</h3>
            </div>
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center text-start">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-11 col-md-4 wow fadeInUpSmall">
                    <div class="{{z(class)|upset_class()}} project post-shadow">
                        <a class="{{z(class)|upset_class()}} img-mobile-height" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="510">
                        </a>
                        <div class="{{z(class)|upset_class()}} caption">
                            <h4 class="{{z(class)|upset_class()}} project-title">
                                <a class="{{z(class)|upset_class()}} heading-link" href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <p class="{{z(class)|upset_class()}} project-exeption">{{$a['content']|text(100)}}...</p>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
            <a class="{{z(class)|upset_class()}} button button-primary" href="{{u(3)}}">
                <span>查看更多</span>
            </a>
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
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} title-block">
                <div class="{{z(class)|upset_class()}} row justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-md-10 col-lg-8">
                        <h3>{{i(name,5)}}</h3>
                        <p>Our Services</p>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3 wow fadeInUpSmall">
                    <div class="{{z(class)|upset_class()}} blurb-boxed">
                        <div class="{{z(class)|upset_class()}} blurb-inner">
                            <div class="{{z(class)|upset_class()}} icon mdi mdi-account"></div>
                            <h4 class="{{z(class)|upset_class()}} blurb-title">
                                <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                            </h4>
                            <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3 wow fadeInUpSmall" data-wow-delay=".2s">
                    <div class="{{z(class)|upset_class()}} blurb-boxed">
                        <div class="{{z(class)|upset_class()}} blurb-inner">
                            <div class="{{z(class)|upset_class()}} icon mdi mdi-flower"></div>
                            <h4 class="{{z(class)|upset_class()}} blurb-title">
                                <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                            </h4>
                            <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3 wow fadeInUpSmall" data-wow-delay=".3s">
                    <div class="{{z(class)|upset_class()}} blurb-boxed">
                        <div class="{{z(class)|upset_class()}} blurb-inner">
                            <div class="{{z(class)|upset_class()}} icon mdi mdi-food-apple"></div>
                            <h4 class="{{z(class)|upset_class()}} blurb-title">
                                <p><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                            </h4>
                            <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3 wow fadeInUpSmall" data-wow-delay=".4s">
                    <div class="{{z(class)|upset_class()}} blurb-boxed">
                        <div class="{{z(class)|upset_class()}} blurb-inner">
                            <div class="{{z(class)|upset_class()}} icon mdi mdi-city"></div>
                            <h4 class="{{z(class)|upset_class()}} blurb-title">
                                <p><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                            </h4>
                            <p class="{{z(class)|upset_class()}} blurb-content"><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="{{z(class)|upset_class()}} button button-primary" href="{{u(5)}}">
                <span>查看更多</span>
            </a>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-light">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} title-block">
                <h3>{{i(name,4)}}</h3>
            </div>
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center text-start">
                {{$set=array()}}
                {{$set['cid']=4}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-6 d-flex wow fadeInLeft">
                    <article class="{{z(class)|upset_class()}} post-grid post-1" style="background-image: url('{{$a['pic']}}');">
                        <div class="{{z(class)|upset_class()}} post-item">
                            <div class="{{z(class)|upset_class()}} content">
                                <div class="{{z(class)|upset_class()}} time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                                <h4 class="{{z(class)|upset_class()}} post-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h4>
                                <div class="{{z(class)|upset_class()}} post-exeption">
                                    <p>{{$a['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
            <a class="{{z(class)|upset_class()}} button button-primary-outline" href="{{u(4)}}">
                <span>阅读更多</span>
            </a>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container tabs-custom-init">
            <div class="{{z(class)|upset_class()}} row justify-content-sm-center panel-custom-group-wrap">
                <div class="{{z(class)|upset_class()}} col-md-10 col-xl-8 text-center">
                    <h3>常见问题解答</h3>
                    <div class="{{z(class)|upset_class()}} card-custom-group text-start" id="accordion2" role="tablist" aria-multiselectable="true">
                        <article class="{{z(class)|upset_class()}} card card-custom card-custom-default">
                            <div class="{{z(class)|upset_class()}} card-header" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a id="accordion2-card-head-fooxqfra" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2-card-body-kobwxgac" aria-controls="accordion2-card-body-kobwxgac" aria-expanded="true" role="button"><?php echo explode_array('：',z('faq_text_1'),0) ?></a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse show" id="accordion2-card-body-kobwxgac" aria-labelledby="accordion2-card-head-fooxqfra" data-bs-parent="#accordion2" role="tabpanel">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-custom-default">
                            <div class="{{z(class)|upset_class()}} card-header" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" id="accordion2-card-head-rkuqimnx" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2-card-body-vnvrdmfy" aria-controls="accordion2-card-body-vnvrdmfy" aria-expanded="false" role="button"><?php echo explode_array('：',z('faq_text_2'),0) ?></a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion2-card-body-vnvrdmfy" aria-labelledby="accordion2-card-head-rkuqimnx" data-bs-parent="#accordion2" role="tabpanel">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-custom-default">
                            <div class="{{z(class)|upset_class()}} card-header" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" id="accordion2-card-head-hxeyhqvw" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2-card-body-mlwhwmyb" aria-controls="accordion2-card-body-mlwhwmyb" aria-expanded="false" role="button"><?php echo explode_array('：',z('faq_text_3'),0) ?></a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion2-card-body-mlwhwmyb" aria-labelledby="accordion2-card-head-hxeyhqvw" data-bs-parent="#accordion2" role="tabpanel">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-custom-default">
                            <div class="{{z(class)|upset_class()}} card-header" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" id="accordion2-card-head-jplbrrrn" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2-card-body-vatietmi" aria-controls="accordion2-card-body-vatietmi" aria-expanded="false" role="button"><?php echo explode_array('：',z('faq_text_4'),0) ?></a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion2-card-body-vatietmi" aria-labelledby="accordion2-card-head-jplbrrrn" data-bs-parent="#accordion2" role="tabpanel">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-custom-default">
                            <div class="{{z(class)|upset_class()}} card-header" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" id="accordion2-card-head-yyoljvqk" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2-card-body-cykxxsvq" aria-controls="accordion2-card-body-cykxxsvq" aria-expanded="false" role="button"><?php echo explode_array('：',z('faq_text_5'),0) ?></a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion2-card-body-cykxxsvq" aria-labelledby="accordion2-card-head-yyoljvqk" data-bs-parent="#accordion2" role="tabpanel">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>