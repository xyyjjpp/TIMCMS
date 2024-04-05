{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{z(service_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our Services</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-100 text-center">
        <div class="{{z(class)|upset_class()}} container container-wide">
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