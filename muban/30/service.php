{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark">
            <div class="{{z(class)|upset_class()}} container"><br><br><br>
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our Services</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position novi-bg novi-bg-img" style="background-image: url({{z(service_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <article class="{{z(class)|upset_class()}} box-icon-ruby">
                        <div class="{{z(class)|upset_class()}} unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} box-icon-ruby-icon novi-icon fl-bigmug-line-airplane86"></div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h5 class="{{z(class)|upset_class()}} box-icon-ruby-title">
                                    <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                                </h5>
                                <p class="{{z(class)|upset_class()}} box-icon-ruby-text"><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <article class="{{z(class)|upset_class()}} box-icon-ruby">
                        <div class="{{z(class)|upset_class()}} unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} box-icon-ruby-icon novi-icon fl-bigmug-line-circular220"></div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h5 class="{{z(class)|upset_class()}} box-icon-ruby-title">
                                    <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                                </h5>
                                <p class="{{z(class)|upset_class()}} box-icon-ruby-text"><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <article class="{{z(class)|upset_class()}} box-icon-ruby">
                        <div class="{{z(class)|upset_class()}} unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="{{z(class)|upset_class()}} unit-left">
                                <div class="{{z(class)|upset_class()}} box-icon-ruby-icon novi-icon fl-bigmug-line-hot67"></div>
                            </div>
                            <div class="{{z(class)|upset_class()}} unit-body">
                                <h5 class="{{z(class)|upset_class()}} box-icon-ruby-title">
                                    <p><?php echo explode_array('：',z('service_text_3'),0) ?></p>
                                </h5>
                                <p class="{{z(class)|upset_class()}} box-icon-ruby-text"><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-bg novi-bg-img section-xl bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} oh">
                <div class="{{z(class)|upset_class()}} title-decoration-lines wow slideInUp" data-wow-delay="0s">
                    <h6 class="{{z(class)|upset_class()}} title-decoration-lines-content">常见的问题解答</h6>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row row-15 row-fix align-items-start card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion2Heading1" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2Collapse1" aria-controls="accordion2Collapse1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse show" id="accordion2Collapse1" role="tabpanel" aria-labelledby="accordion2Heading1">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion2Heading4" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2Collapse4" aria-controls="accordion2Collapse4"><?php echo explode_array('：',z('faq_text_2'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion2Collapse4" role="tabpanel" aria-labelledby="accordion2Heading4">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion2Heading3" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2Collapse3" aria-controls="accordion2Collapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion2Collapse3" role="tabpanel" aria-labelledby="accordion2Heading3">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion2Heading2" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2Collapse2" aria-controls="accordion2Collapse2"><?php echo explode_array('：',z('faq_text_4'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion2Collapse2" role="tabpanel" aria-labelledby="accordion2Heading2">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="{{z(class)|upset_class()}} card card-custom card-corporate">
                        <div class="{{z(class)|upset_class()}} card-header" id="accordion2Heading5" role="tab">
                            <div class="{{z(class)|upset_class()}} card-title">
                                <a class="{{z(class)|upset_class()}} collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2Collapse5" aria-controls="accordion2Collapse5"><?php echo explode_array('：',z('faq_text_5'),0) ?>
                                    <div class="{{z(class)|upset_class()}} card-arrow"></div>
                                </a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} collapse" id="accordion2Collapse5" role="tabpanel" aria-labelledby="accordion2Heading5">
                            <div class="{{z(class)|upset_class()}} card-body">
                                <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} owl-carousel owl-clients" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                <?php for ($i=1; $i<=6; $i++) {?>
                    <p class="{{z(class)|upset_class()}} clients-modern">
                        <img src="<?php echo z('partner_img_'.$i) ?>" width="270" height="145">
                    </p>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>