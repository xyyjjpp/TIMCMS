{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <div class="{{z(class)|upset_class()}} parallax-container section section-lg bg-default" data-parallax-img="<?php echo explode_array('||',z('home_banner_all_1'),0)?>">
        <div class="{{z(class)|upset_class()}} parallax-content section-xxl context-dark text-center">
            <div class="{{z(class)|upset_class()}} container container-custom">
                <h2 class="{{z(class)|upset_class()}} present-title"><?php echo explode_array('||',z('home_banner_all_1'),1)?></h2>
                <p class="{{z(class)|upset_class()}} index-title-text"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></p>
            </div>
        </div>
    </div>
    <section class="{{z(class)|upset_class()}} section section-sm section-first bg-default text-md-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center align-items-xl-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-5 col-xl-6">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="519" height="564">
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-7 col-xl-6">
                    <h4 class="{{z(class)|upset_class()}} inset-bottom-40 fw-medium">{{i(name,2)}}</h4>
                    <div class="{{z(class)|upset_class()}} tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                        <div class="{{z(class)|upset_class()}} tab-content">
                            <div class="{{z(class)|upset_class()}} tab-pane fade active show" id="tabs-4-3">
                                {{z(about_text)}}
                                <div class="{{z(class)|upset_class()}} group-md group-middle">
                                    <a class="{{z(class)|upset_class()}} button button-md button-title-secondary button-width-xl-230 button-primary" href="{{u(2)}}">认识我们</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block">{{i(name,3)}}</h4>
            <div class="{{z(class)|upset_class()}} row row-sm row-30">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 text-start">
                    <figure class="{{z(class)|upset_class()}} thumbnail thumbnail-simple wow slideInUp">
                        <a class="{{z(class)|upset_class()}} thumbnail-img" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="303">
                        </a>
                        <figcaption class="{{z(class)|upset_class()}} heading heading-5">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </figcaption>
                        <p class="{{z(class)|upset_class()}} description gray-500">{{$a['content']|text(100)}}...</p>
                    </figure>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block">{{i(name,5)}}</h4>
            <div class="{{z(class)|upset_class()}} row row-40">
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-paintbrush9"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-cropping1"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-chat55"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-images21"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-foggy3"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_5'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-icon-modern">
                        <div class="{{z(class)|upset_class()}} box-icon-modern-icon fl-bigmug-line-favourites5"></div>
                        <h5 class="{{z(class)|upset_class()}} box-icon-modern-title">
                            <p><?php echo explode_array('：',z('service_text_6'),0) ?></p>
                        </h5>
                        <div class="{{z(class)|upset_class()}} box-icon-modern-decor"></div>
                        <p class="{{z(class)|upset_class()}} box-icon-modern-text"><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl section-b-70 bg-gray-4">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block oh">
                <span class="{{z(class)|upset_class()}} d-inline-block wow slideInUp">用户评价</span>
            </h4>
            <div class="{{z(class)|upset_class()}} owl-carousel owl-quote-2 owl-quote-dots" data-items="1" data-md-items="2" data-autoplay="false" data-margin="30" data-animation-in="fadeIn" data-dots="true" data-animation-out="fadeOut" data-navigation-class="{{z(class)|upset_class()}} #owl-custom-nav-2">
                <?php for ($i=1; $i<=5; $i++) {?>
                <article class="{{z(class)|upset_class()}} quote-modern quote-modern-2 quote-modern-custom">
                    <div class="{{z(class)|upset_class()}} unit unit-spacing-md align-items-center">
                        <div class="{{z(class)|upset_class()}} unit-left">
                            <p class="{{z(class)|upset_class()}} quote-modern-figure">
                                <img class="{{z(class)|upset_class()}} img-circles" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="75" height="75">
                            </p>
                        </div>
                        <div class="{{z(class)|upset_class()}} unit-body">
                            <h5 class="{{z(class)|upset_class()}} quote-modern-cite">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),1)?></p>
                            </h5>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} quote-modern-text">
                        <p class="{{z(class)|upset_class()}} q"><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                    </div>
                </article>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl section-last bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block oh">
                <span class="{{z(class)|upset_class()}} d-inline-block wow slideInUp">{{i(name,4)}}</span>
            </h4>
            <div class="{{z(class)|upset_class()}} row row-md row-30">
                {{$set=array()}}
                {{$set['cid']=4}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,click}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6">
                    <div class="{{z(class)|upset_class()}} oh-desktop">
                        <article class="{{z(class)|upset_class()}} post post-ruth wow slideInDown">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-lg flex-column flex-sm-row align-items-sm-center flex-md-column align-items-md-stretch flex-lg-row align-items-lg-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a class="{{z(class)|upset_class()}} post-ruth-figure" href="{{$a['link']}}">
                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="222" height="210">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <div class="{{z(class)|upset_class()}} post-ruth-body">
                                        <div class="{{z(class)|upset_class()}} post-ruth-2-link">
                                            <div class="{{z(class)|upset_class()}} post-ruth-2-data">
                                            <span class="{{z(class)|upset_class()}} data-icon">
                                                <span class="{{z(class)|upset_class()}} material-icons-person"></span>
                                            </span>
                                                <div class="{{z(class)|upset_class()}} data-info">{{$a['click']}}</div>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-ruth-2-data">
                                            <span class="{{z(class)|upset_class()}} data-icon">
                                                <span class="{{z(class)|upset_class()}} material-icons-work"></span>
                                            </span>
                                                <div class="{{z(class)|upset_class()}} data-info-item">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</div>
                                            </div>
                                        </div>
                                        <h5 class="{{z(class)|upset_class()}} post-ruth-title">
                                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-gray-4">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block oh">
                <span class="{{z(class)|upset_class()}} d-inline-block wow slideInUp">用户常见的问题</span>
            </h4>
            <div class="{{z(class)|upset_class()}} row row-lg row-30 flex-lg-row-reverse">
                <div class="{{z(class)|upset_class()}} col-lg-5 col-xl-6 wow fadeInRight">
                    <div class="{{z(class)|upset_class()}} video-classic">
                        <img src="{{z(about_img)}}" alt="faq 用户常见的问题" width="570" height="418">
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-7 col-xl-6 wow fadeInUp">
                    <div class="{{z(class)|upset_class()}} card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate card-corporate-2">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion3Heading1" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion3Collapse1" aria-controls="accordion3Collapse1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse show" id="accordion3Collapse1" role="tabpanel" aria-labelledby="accordion3Heading1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate card-corporate-2">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion3Heading2" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion3Collapse2" aria-controls="accordion3Collapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion3Collapse2" role="tabpanel" aria-labelledby="accordion3Heading2">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate card-corporate-2">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion3Heading3" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion3Collapse3" aria-controls="accordion3Collapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion3Collapse3" role="tabpanel" aria-labelledby="accordion3Heading3">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section bg-default">
        <div class="{{z(class)|upset_class()}} parallax-container" style="background-color: #1c86d1">
            <div class="{{z(class)|upset_class()}} parallax-content section-xl context-dark bg-overlay-26">
                <div class="{{z(class)|upset_class()}} container">
                    <div class="{{z(class)|upset_class()}} row row-50 justify-content-center border-classic">
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">12</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">伙伴</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">194</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">产品</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">5</span>
                                    <span class="{{z(class)|upset_class()}} symbol">k</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">经验</h5>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-md-5 col-lg-3">
                            <div class="{{z(class)|upset_class()}} counter-classic">
                                <div class="{{z(class)|upset_class()}} counter-classic-number">
                                    <span class="{{z(class)|upset_class()}} counter">25</span>
                                </div>
                                <h5 class="{{z(class)|upset_class()}} counter-classic-title">成员</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} title-block">合作伙伴</h4>
            <div class="{{z(class)|upset_class()}} row row-30 row-sm">
                <?php for ($i=1; $i<=4; $i++) {?>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s">
                    <a class="{{z(class)|upset_class()}} clients-classic" href="#">
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