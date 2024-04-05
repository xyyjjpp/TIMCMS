{{file seo}}
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<main id="main">
    <div class="{{z(class)|upset_class()}} breadcrumbs">
        <div class="{{z(class)|upset_class()}} page-header d-flex align-items-center" style="background-image: url({{z(service_banner_img)}});">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <div class="{{z(class)|upset_class()}} row d-flex justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-lg-6 text-center">
                        <h2>{{i(name)}}</h2>
                        <p>Our Services</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="{{z(class)|upset_class()}} container">
                <ol>
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>Our Services</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="services" class="{{z(class)|upset_class()}} the-main-service text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-md-12">
                    <div class="{{z(class)|upset_class()}} section-header">
                        <h2>{{i(name,5)}}</h2>
                        <p>Our Services</p>
                    </div>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} row our-offer-items less-carousel">
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa fa-pencil"></i>
                        <h4><?php echo explode_array('：',z('service_text_1'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_1'),1) ?>
                        </p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa  fa-pie-chart"></i>
                        <h4><?php echo explode_array('：',z('service_text_2'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_2'),1) ?>
                        </p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa fa-tasks"></i>
                        <h4><?php echo explode_array('：',z('service_text_3'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_3'),1) ?>
                        </p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa fa-tachometer"></i>
                        <h4><?php echo explode_array('：',z('service_text_4'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_4'),1) ?>
                        </p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa fa-recycle"></i>
                        <h4><?php echo explode_array('：',z('service_text_5'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_5'),1) ?>
                        </p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-4 col-sm-6 equal-height">
                    <div class="{{z(class)|upset_class()}} item">
                        <i class="{{z(class)|upset_class()}} fa fa-handshake-o"></i>
                        <h4><?php echo explode_array('：',z('service_text_6'),0) ?></h4>
                        <p>
                            <?php echo explode_array('：',z('service_text_6'),1) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="{{z(class)|upset_class()}} faq">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} row gy-4">
                <div class="{{z(class)|upset_class()}} col-lg-12">
                    <div class="{{z(class)|upset_class()}} content text-center">
                        <h3>常见问题解答</h3>
                        <p>Your`s FAQ</p>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-12">
                    <div class="{{z(class)|upset_class()}} accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                        <div class="{{z(class)|upset_class()}} accordion-item">
                            <h3 class="{{z(class)|upset_class()}} accordion-header">
                                <button class="{{z(class)|upset_class()}} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            <span class="{{z(class)|upset_class()}} num">
                                                <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i>
                                            </span>
                                    <?php echo explode_array('：',z('faq_text_1'),0) ?>
                                </button>
                            </h3>
                            <div id="faq-content-1" class="{{z(class)|upset_class()}} accordion-collapse collapse show" data-bs-parent="#faqlist">
                                <div class="{{z(class)|upset_class()}} accordion-body">
                                    <?php echo explode_array('：',z('faq_text_1'),1) ?>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-item">
                            <h3 class="{{z(class)|upset_class()}} accordion-header">
                                <button class="{{z(class)|upset_class()}} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                            <span class="{{z(class)|upset_class()}} num">
                                                <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i>
                                            </span>
                                    <?php echo explode_array('：',z('faq_text_2'),0) ?>
                                </button>
                            </h3>
                            <div id="faq-content-2" class="{{z(class)|upset_class()}} accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="{{z(class)|upset_class()}} accordion-body">
                                    <?php echo explode_array('：',z('faq_text_2'),1) ?>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-item">
                            <h3 class="{{z(class)|upset_class()}} accordion-header">
                                <button class="{{z(class)|upset_class()}} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                            <span class="{{z(class)|upset_class()}} num">
                                                <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i>
                                            </span>
                                    <?php echo explode_array('：',z('faq_text_3'),0) ?>
                                </button>
                            </h3>
                            <div id="faq-content-3" class="{{z(class)|upset_class()}} accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="{{z(class)|upset_class()}} accordion-body">
                                    <?php echo explode_array('：',z('faq_text_3'),1) ?>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} accordion-item">
                            <h3 class="{{z(class)|upset_class()}} accordion-header">
                                <button class="{{z(class)|upset_class()}} accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                            <span class="{{z(class)|upset_class()}} num">
                                                <i class="{{z(class)|upset_class()}} bi bi-arrow-right-circle-fill"></i>
                                            </span>
                                    <?php echo explode_array('：',z('faq_text_4'),0) ?>
                                </button>
                            </h3>
                            <div id="faq-content-4" class="{{z(class)|upset_class()}} accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="{{z(class)|upset_class()}} accordion-body">
                                    <?php echo explode_array('：',z('faq_text_4'),1) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{{file footer}}
</body>
</html>