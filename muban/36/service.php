{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    <header class="{{z(class)|upset_class()}} page-header subpage_header">
        {{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2>{{i(name)}}</h2>
                    <p class="{{z(class)|upset_class()}} big"></p>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{z(service_banner_img)}}">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-border">
        <ol class="{{z(class)|upset_class()}} breadcrumb">
            <li>
                <a href="{{host}}">首页</a>
            </li>
            <li class="{{z(class)|upset_class()}} active">Our Services</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-lighter relative text-center">
        <div class="{{z(class)|upset_class()}} container">
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
    {{file footer}}
</body>
</html>