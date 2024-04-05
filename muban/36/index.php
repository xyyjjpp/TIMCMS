{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    <header class="{{z(class)|upset_class()}} page-header">
{{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
                    <p class="{{z(class)|upset_class()}} big"><?php echo explode_array('||',z('home_banner_all_1'),1) ?></p>
                    <div class='button-group-variant'>
                        <a class='button button-default round-xl button-sm' href='{{u(2)}}'>知道我们</a>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_1'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_2'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="<?php echo explode_array('||',z('home_banner_all_3'),0) ?>">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-sm text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,2)}}</h2>
                    <p class="{{z(class)|upset_class()}} lead big">{{z(about_text)}}</p>
                    <img class="{{z(class)|upset_class()}} box-shadow margin-2 margin-negative" src="{{z(about_img)}}" alt="{{i(name,2)}}"><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-lighter relative text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-xl-6">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name,5)}}</h2>
                    <p class="{{z(class)|upset_class()}} lead">Our Services</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-30 margin-1 text-lg-start">
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                    <span class="{{z(class)|upset_class()}} icon icon-lg icon-primary fa-heartbeat"></span>
                    <h5><?php echo explode_array('：',z('service_text_1'),0) ?></h5>
                    <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                    <span class="{{z(class)|upset_class()}} icon icon-lg icon-primary fa-compass"></span>
                    <h5><?php echo explode_array('：',z('service_text_2'),0) ?></h5>
                    <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                    <span class="{{z(class)|upset_class()}} icon icon-lg icon-primary fa-edit"></span>
                    <h5><?php echo explode_array('：',z('service_text_3'),0) ?></h5>
                    <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-3">
                    <span class="{{z(class)|upset_class()}} icon icon-lg icon-primary fa-comments-o"></span>
                    <h5><?php echo explode_array('：',z('service_text_4'),0) ?></h5>
                    <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm text-center">
        <div class="{{z(class)|upset_class()}} container isotope-wrap">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-12">
                    <h2>{{i(name,3)}}</h2>
                    <div class="{{z(class)|upset_class()}} lead">Our Products</div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                <div class="{{z(class)|upset_class()}} row">
                    {{$set=array()}}
                    {{$set['cid']=3}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} col-12 col-md-6 col-lg-4 isotope-item" data-filter="type-1">
                        <div class="{{z(class)|upset_class()}} thumbnail-variant-2 thumbnail-4 text-center">
                            <a href="{{$a['link']}}" data-lightgallery="item">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                <div class="{{z(class)|upset_class()}} caption">
                                    <h4 class="{{z(class)|upset_class()}} text-white">{{$a['title']}}</h4>
                                </div>
                            </a>
                            <a class="{{z(class)|upset_class()}} icon icon-sm text-white fa-chain" href="{{$a['link']}}"></a>
                        </div>
                    </div>
                    {{/loop}}
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section bg-dark-var1 text-center">
        <div class="{{z(class)|upset_class()}} container counter-panel">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">197</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">伙伴</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">23</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">经验</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">98</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">奖项</p>
                </div>
                <div class="{{z(class)|upset_class()}} col-6 col-md-6 col-lg-3">
                    <div class="{{z(class)|upset_class()}} counter">7230</div>
                    <p class="{{z(class)|upset_class()}} text-opacity font-secondary text-uppercase">案例</p>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm text-center section-border">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} flex-list">
                <?php for ($i=1; $i<=6; $i++) {?>
                <li>
                    <img src="<?php echo z('partner_img_'.$i) ?>">
                </li>
                <?php }?>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm inset-bottom-2 text-center text-lg-start">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold text-center">{{i(name,4)}}</h2>
            <div class="{{z(class)|upset_class()}} row row-50">
                {{$set=array()}}
                {{$set['cid']=4}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content,click}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <article class="{{z(class)|upset_class()}} thumbnail thumbnail-4">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        <div class="{{z(class)|upset_class()}} caption">
                            <h4>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <p class="{{z(class)|upset_class()}} text-dark-variant-2">{{$a['content']|text(100)}}...</p>
                            <div class="{{z(class)|upset_class()}} blog-info">
                                <div class="{{z(class)|upset_class()}} pull-md-left">
                                    <time class="{{z(class)|upset_class()}} meta fa-calendar" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    <p class="{{z(class)|upset_class()}} badge fa-comments font-secondary">{{$a['click']}}</p>
                                </div>
                                <a class="{{z(class)|upset_class()}} button-link" href="{{$a['link']}}">阅读</a>
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm inset-bottom-3 bg-image context-dark text-center" style="background-color: #1c86d1">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <h2 class="{{z(class)|upset_class()}} fw-bold">现在就联系我们?</h2>
                    <form class="{{z(class)|upset_class()}} rd-mailform subscribe-form margin-1" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                            <input class="{{z(class)|upset_class()}} form-input" id="forms-news-email" type="email" name="email" placeholder="Enter your e-mail" data-constraints="@Required">
                        </div>
                        <div class="{{z(class)|upset_class()}} button-wrap text-center">
                            <button class="{{z(class)|upset_class()}} button button-primary button-xs round-xl" type="submit">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-border">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold text-center">常见问题解答</h2>
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-12">
                    <div class="{{z(class)|upset_class()}} card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <article class="{{z(class)|upset_class()}} accordion-custom accordion-custom-corporate">
                            <div class="{{z(class)|upset_class()}} accordion-custom-header" id="accordion1Heading1" role="tab">
                                <div class="{{z(class)|upset_class()}} accordion-custom-title">
                                    <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?>
                                        <div class="{{z(class)|upset_class()}} accordion-custom-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse show" id="accordion1Collapse1" data-bs-parent="#accordion1" role="tabpanel" aria-labelledby="accordion1Heading1">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} accordion-custom accordion-custom-corporate">
                            <div class="{{z(class)|upset_class()}} accordion-custom-header" id="accordion1Heading2" role="tab">
                                <div class="{{z(class)|upset_class()}} accordion-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?>
                                        <div class="{{z(class)|upset_class()}} accordion-custom-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse2" data-bs-parent="#accordion1" role="tabpanel" aria-labelledby="accordion1Heading2">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} accordion-custom accordion-custom-corporate">
                            <div class="{{z(class)|upset_class()}} accordion-custom-header" id="accordion1Heading3" role="tab">
                                <div class="{{z(class)|upset_class()}} accordion-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse3" aria-controls="accordion1Collapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?>
                                        <div class="{{z(class)|upset_class()}} accordion-custom-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse3" data-bs-parent="#accordion1" role="tabpanel" aria-labelledby="accordion1Heading3">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} accordion-custom accordion-custom-corporate">
                            <div class="{{z(class)|upset_class()}} accordion-custom-header" id="accordion1Heading4" role="tab">
                                <div class="{{z(class)|upset_class()}} accordion-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse4" aria-controls="accordion1Collapse4"><?php echo explode_array('：',z('faq_text_4'),0) ?>
                                        <div class="{{z(class)|upset_class()}} accordion-custom-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse4" data-bs-parent="#accordion1" role="tabpanel" aria-labelledby="accordion1Heading4">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} accordion-custom accordion-custom-corporate">
                            <div class="{{z(class)|upset_class()}} accordion-custom-header" id="accordion1Heading5" role="tab">
                                <div class="{{z(class)|upset_class()}} accordion-custom-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion1" href="#accordion1Collapse5" aria-controls="accordion1Collapse5"><?php echo explode_array('：',z('faq_text_5'),0) ?>
                                        <div class="{{z(class)|upset_class()}} accordion-custom-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1Collapse5" data-bs-parent="#accordion1" role="tabpanel" aria-labelledby="accordion1Heading5">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm inset-bottom-2 text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-xl-6">
                    <h2 class="{{z(class)|upset_class()}} fw-bold text-center">用户留言</h2>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row margin-1">
                <div class="{{z(class)|upset_class()}} owl-carousel" data-autoplay="true" data-items="1" data-md-items="2" data-sm-items="1" data-lg-items="3" data-margin="30" data-loop="true" data-owl='{"nav":true}'>
                    <?php for ($i=1; $i<=4; $i++) {?>
                    <blockquote class="{{z(class)|upset_class()}} quote-2">
                        <img class="{{z(class)|upset_class()}} rounded-circle" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="120" height="100">
                        <h6>
                            <cite><?php echo explode_array('||',z('ask_all_'.$i),1)?></cite>
                        </h6>
                        <p class="{{z(class)|upset_class()}} heading-6 font-italic font-base text-base">
                            <q><?php echo explode_array('||',z('ask_all_'.$i),2)?></q>
                        </p>
                    </blockquote>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>