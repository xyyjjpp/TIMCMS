{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(service_banner_img)}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our Services</li>
            </ul>
        </div>
    </section>
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30">
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-modern">
                        <span class="{{z(class)|upset_class()}} icon box-modern-icon fl-bigmug-line-big104"></span>
                        <div class="{{z(class)|upset_class()}} box-modern-main">
                            <h4 class="{{z(class)|upset_class()}} box-modern-title"><?php echo explode_array('：',z('service_text_1'),0) ?></h4>
                            <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-modern">
                        <span class="{{z(class)|upset_class()}} icon box-modern-icon fl-bigmug-line-wallet26"></span>
                        <div class="{{z(class)|upset_class()}} box-modern-main">
                            <h4 class="{{z(class)|upset_class()}} box-modern-title"><?php echo explode_array('：',z('service_text_2'),0) ?></h4>
                            <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-modern">
                        <span class="{{z(class)|upset_class()}} icon box-modern-icon fl-bigmug-line-search74"></span>
                        <div class="{{z(class)|upset_class()}} box-modern-main">
                            <h4 class="{{z(class)|upset_class()}} box-modern-title"><?php echo explode_array('：',z('service_text_3'),0) ?></h4>
                            <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <article class="{{z(class)|upset_class()}} box-info box-info-2">
                <div class="{{z(class)|upset_class()}} box-info-main context-dark">
                    <div class="{{z(class)|upset_class()}} box-info-main-inner">
                        <h2>给我们留言</h2>
                        <form class="{{z(class)|upset_class()}} rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post">
                            <div class="{{z(class)|upset_class()}} row row-20">
                                <div class="{{z(class)|upset_class()}} col-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <input class="{{z(class)|upset_class()}} form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-message">Message</label>
                                        <textarea class="{{z(class)|upset_class()}} form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-12">
                                    <button class="{{z(class)|upset_class()}} button button-secondary" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} box-info-aside">
                    <div class="{{z(class)|upset_class()}} card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion1-heading-1" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} card-link" role="button" data-bs-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true">
                                        <span><?php echo explode_array('：',z('faq_text_1'),0) ?></span>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion1-heading-2" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} card-link collapsed" role="button" data-bs-toggle="collapse" href="#accordion1-collapse-2" aria-controls="accordion1-collapse-2" aria-expanded="false">
                                        <span><?php echo explode_array('：',z('faq_text_2'),0) ?></span>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1-collapse-2" role="tabpanel" aria-labelledby="accordion1-heading-2" data-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion1-heading-3" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} card-link collapsed" role="button" data-bs-toggle="collapse" href="#accordion1-collapse-3" aria-controls="accordion1-collapse-3" aria-expanded="false">
                                        <span><?php echo explode_array('：',z('faq_text_3'),0) ?></span>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1-collapse-3" role="tabpanel" aria-labelledby="accordion1-heading-3" data-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </article>
                        <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                            <div class="{{z(class)|upset_class()}} card-header" id="accordion1-heading-4" role="tab">
                                <div class="{{z(class)|upset_class()}} card-title">
                                    <a class="{{z(class)|upset_class()}} card-link collapsed" role="button" data-bs-toggle="collapse" href="#accordion1-collapse-4" aria-controls="accordion1-collapse-4" aria-expanded="false">
                                        <span><?php echo explode_array('：',z('faq_text_4'),0) ?></span>
                                        <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} collapse" id="accordion1-collapse-4" role="tabpanel" aria-labelledby="accordion1-heading-4" data-parent="#accordion1">
                                <div class="{{z(class)|upset_class()}} card-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </article>
        </div>
    </section>
    {{file footer}}
</body>
</html>
