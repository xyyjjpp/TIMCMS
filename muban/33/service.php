{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} bg-dark-overlay section-bredcrumbs" style="background-image: url({{z(service_banner_img)}})">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <h2 class="{{z(class)|upset_class()}} title">{{i(name)}}</h2>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Our Services</li>
                    </ol>
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