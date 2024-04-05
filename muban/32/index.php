{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-header bg-image text-start novi-bg novi-bg-img" style="background-image: url(<?php echo explode_array('||',z('home_banner_all_1'),0)?>)">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold header-title"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h2>
            <p class="{{z(class)|upset_class()}} big header-subtitle"><?php echo explode_array('||',z('home_banner_all_1'),1)?></p>
            <div class="{{z(class)|upset_class()}} group-md button-group">
                <a class="{{z(class)|upset_class()}} button button-primary button-nina" href="{{u(2)}}">知道我们</a>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-ten row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
                <div class="{{z(class)|upset_class()}} col-md-8 col-lg-5 col-xl-4">
                    <h3>{{i(name,2)}}</h3>
                    <p class="{{z(class)|upset_class()}} text-spacing-sm">{{z(about_text)}}</p>
                    <a class="{{z(class)|upset_class()}} button button-primary button-nina" href="{{u(2)}}">关于我们</a>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-8 col-lg-5">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="570" height="535">
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-100 novi-bg novi-bg-img" data-preset='{"title":"Services 1","category":"services","reload":false,"id":"services-1"}'>
        <div class="{{z(class)|upset_class()}} container-wide">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-sm-center text-gray-light">
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal">
                        <div class="{{z(class)|upset_class()}} box-minimal-header">
                            <div class="{{z(class)|upset_class()}} box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-thumb-up-outline"></div>
                            <h6 class="{{z(class)|upset_class()}} box-minimal-title"><?php echo explode_array('：',z('service_text_1'),0) ?></h6>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal">
                        <div class="{{z(class)|upset_class()}} box-minimal-header">
                            <div class="{{z(class)|upset_class()}} box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-account-multiple"></div>
                            <h6 class="{{z(class)|upset_class()}} box-minimal-title"><?php echo explode_array('：',z('service_text_2'),0) ?></h6>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal">
                        <div class="{{z(class)|upset_class()}} box-minimal-header">
                            <div class="{{z(class)|upset_class()}} box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-headset"></div>
                            <h6 class="{{z(class)|upset_class()}} box-minimal-title"><?php echo explode_array('：',z('service_text_3'),0) ?></h6>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-xl-3">
                    <article class="{{z(class)|upset_class()}} box-minimal">
                        <div class="{{z(class)|upset_class()}} box-minimal-header">
                            <div class="{{z(class)|upset_class()}} box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-credit-card"></div>
                            <h6 class="{{z(class)|upset_class()}} box-minimal-title"><?php echo explode_array('：',z('service_text_4'),0) ?></h6>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">{{i(name,3)}}</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">Our Products</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm row-50 row-lg-60" data-isotope-layout="masonry" data-column-class="{{z(class)|upset_class()}} .col-1" data-lightgallery="group" data-lg-animation="lg-zoom-in">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-xs-6 col-lg-5" data-filter="0">
                    <div class="{{z(class)|upset_class()}} product">
                        <a class="{{z(class)|upset_class()}} product-media" data-lightgallery="item" href="{{$a['link']}}">
                            <img class="{{z(class)|upset_class()}} product-img" src="{{$a['pic']}}" alt="{{$a['title']}}" width="500" height="500">
                        </a>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">{{i(name,4)}}</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">Our News</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm">
                <div class="{{z(class)|upset_class()}} col-sm-12 col-md-7 wow fadeInLeft">
                    {{$set=array()}}
                    {{$set['cid']=4}}
                    {{$set['pagesize']=1}}
                    {{$set['column']=id,title,shijian,pic,content}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <article class="{{z(class)|upset_class()}} post post-nikki post-nikki-2">
                        <div class="{{z(class)|upset_class()}} post-nikki-figure">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="720" height="430">
                        </div>
                        <div class="{{z(class)|upset_class()}} post-nikki-body">
                            <div>
                                <div class="{{z(class)|upset_class()}} post-nikki-time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                                <div class="{{z(class)|upset_class()}} post-nikki-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </div>
                                <div class="{{z(class)|upset_class()}} post-nikki-content">
                                    <p>{{$a['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    {{/loop}}
                </div>
                <div class="{{z(class)|upset_class()}} col-md-5 mt-5 mt-md-0">
                    <div class="{{z(class)|upset_class()}} row row-30">
                        {{$set=array()}}
                        {{$set['cid']=4}}
                        {{$set['pagesize']=5}}
                        {{$set['column']=id,title,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        {{if $a['key'] != 1}}
                        <div class="{{z(class)|upset_class()}} col-6 col-md-12 wow fadeInRight">
                            <article class="{{z(class)|upset_class()}} post post-nikki">
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-lg flex-column flex-md-row">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <a class="{{z(class)|upset_class()}} post-nikki-figure" href="{{$a['link']}}">
                                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" style="width:170px;height:120px;">
                                        </a>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <div class="{{z(class)|upset_class()}} post-nikki-time">
                                            <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} post-nikki-title">
                                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        {{/if}}
                        {{/loop}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg novi-bg novi-bg-img bg-gray-100">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">合作伙伴</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">Our sponsors</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm row-30">
                <div class="{{z(class)|upset_class()}} row">
                    <?php for ($i=1; $i<=6; $i++) {?>
                    <div class="{{z(class)|upset_class()}} col-6 col-sm-3">
                        <figure class="{{z(class)|upset_class()}} box-icon-image">
                            <img src="<?php echo z('partner_img_'.$i) ?>" width="270" height="74">
                        </figure>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-xl-10">
                    <h6 class="{{z(class)|upset_class()}} custom-subtitle-1">用户的评价</h6>
                    <p class="{{z(class)|upset_class()}} custom-title mt-1">What club members say</p>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-sm">
                <div class="{{z(class)|upset_class()}} owl-carousel owl-layout-6" data-items="1" data-lg-items="2" data-loop="true" data-margin="40" data-autoplay="true" data-owl='{"nav":false,"dots":true}'>
                    <?php for ($i=1; $i<=5; $i++) {?>
                    <div class="{{z(class)|upset_class()}} quote-boxed-2">
                        <div class="{{z(class)|upset_class()}} quote-boxed-2-body">
                            <div class="{{z(class)|upset_class()}} quote-boxed-2-text h5"><?php echo explode_array('||',z('ask_all_'.$i),2)?></div>
                        </div>
                        <div class="{{z(class)|upset_class()}} quote-boxed-2-media">
                            <img class="{{z(class)|upset_class()}} quote-boxed-2-img" src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="60" height="60">
                            <div class="{{z(class)|upset_class()}} d-block">
                                <div class="{{z(class)|upset_class()}} quote-boxed-2-cite"><?php echo explode_array('||',z('ask_all_'.$i),1)?></div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-lg-center">
                <div class="{{z(class)|upset_class()}} col-lg-10 col-xl-8">
                    <h3>常见的问题</h3>
                    <div class="{{z(class)|upset_class()}} accordion-custom-group accordion-custom-group-custom accordion-custom-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <div class="{{z(class)|upset_class()}} accordion-custom-item accordion-custom-corporate">
                            <h4 class="{{z(class)|upset_class()}} accordion-custom-heading" id="accordion1-accordion-head-jxrjijkk">
                                <button class="{{z(class)|upset_class()}} accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-ljxaoggm" aria-controls="accordion1-accordion-body-ljxaoggm" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?><span class="{{z(class)|upset_class()}} accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="{{z(class)|upset_class()}} accordion-custom-collapse collapse show" id="accordion1-accordion-body-ljxaoggm" aria-labelledby="accordion1-accordion-head-jxrjijkk" data-bs-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-custom-item accordion-custom-corporate">
                            <h4 class="{{z(class)|upset_class()}} accordion-custom-heading" id="accordion1-accordion-head-sawsovxj">
                                <button class="{{z(class)|upset_class()}} accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-tueyedrs" aria-controls="accordion1-accordion-body-tueyedrs" aria-expanded="false"><?php echo explode_array('：',z('faq_text_2'),0) ?><span class="{{z(class)|upset_class()}} accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="{{z(class)|upset_class()}} accordion-custom-collapse collapse" id="accordion1-accordion-body-tueyedrs" aria-labelledby="accordion1-accordion-head-sawsovxj" data-bs-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-custom-item accordion-custom-corporate">
                            <h4 class="{{z(class)|upset_class()}} accordion-custom-heading" id="accordion1-accordion-head-xgbpuimn">
                                <button class="{{z(class)|upset_class()}} accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-qjwkdmao" aria-controls="accordion1-accordion-body-qjwkdmao" aria-expanded="false"><?php echo explode_array('：',z('faq_text_3'),0) ?><span class="{{z(class)|upset_class()}} accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="{{z(class)|upset_class()}} accordion-custom-collapse collapse" id="accordion1-accordion-body-qjwkdmao" aria-labelledby="accordion1-accordion-head-xgbpuimn" data-bs-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-custom-item accordion-custom-corporate">
                            <h4 class="{{z(class)|upset_class()}} accordion-custom-heading" id="accordion1-accordion-head-qthlrnyg">
                                <button class="{{z(class)|upset_class()}} accordion-custom-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-accordion-body-jitcqsbr" aria-controls="accordion1-accordion-body-jitcqsbr" aria-expanded="false"><?php echo explode_array('：',z('faq_text_4'),0) ?><span class="{{z(class)|upset_class()}} accordion-custom-arrow"></span>
                                </button>
                            </h4>
                            <div class="{{z(class)|upset_class()}} accordion-custom-collapse collapse" id="accordion1-accordion-body-jitcqsbr" aria-labelledby="accordion1-accordion-head-qthlrnyg" data-bs-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} accordion-custom-body">
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