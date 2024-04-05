{{file seo}}
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<section id="hero" class="{{z(class)|upset_class()}} hero">
    <div class="{{z(class)|upset_class()}} container position-relative">
        <div class="{{z(class)|upset_class()}} row gy-5" data-aos="fade-in">
            <div class="{{z(class)|upset_class()}} col-lg-6 d-flex flex-column align-items-start justify-content-center text-left caption">
                <h2 data-aos="fade-left" data-aos-delay="100"><?php echo explode_array('||',z('home_banner_all_1'),1)?></h2>
                <h3 data-aos="zoom-out" data-aos-delay="400"><?php echo explode_array("&#x2c;",z('keywords'),0) ?></h3>
                <div class="{{z(class)|upset_class()}} d-flex" data-aos-delay="8000" data-aos="zoom-out">
                    <a href="{{u(2)}}" class="{{z(class)|upset_class()}} btn-get-started">知道我们</a>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} col-lg-6 d-flex flex-column align-items-start justify-content-center">
                <img src="<?php echo explode_array('||',z('home_banner_all_1'),0)?>" class="{{z(class)|upset_class()}} img-fluid rounded-4 mb-4" alt="<?php echo explode_array('||',z('home_banner_all_1'),1)?>">
            </div>
        </div>
    </div>
</section>
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
<main id="main">
    <section id="about" class="{{z(class)|upset_class()}} about">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>{{i(name,2)}}</h2>
                <p>About Us</p>
            </div>
            <div class="{{z(class)|upset_class()}} row gy-4">
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <img src="{{z(about_img)}}" class="{{z(class)|upset_class()}} img-fluid rounded-4 mb-4" alt="{{i(name,2)}}">
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6">
                    <div class="{{z(class)|upset_class()}} content ps-0" data-aos="fade-right">
                        {{z(about_text)}}
                        <div class="{{z(class)|upset_class()}} d-flex" data-aos-delay="8000" data-aos="zoom-out">
                            <a href="{{u(2)}}" class="{{z(class)|upset_class()}} btn-get-started">了解我们</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="call-to-action">
        <div class="{{z(class)|upset_class()}} container text-center call-to-action" data-aos="zoom-out">
            <h3>现在就联系我们?</h3>
            <a class="{{z(class)|upset_class()}} cta-btn" href="{{u(6)}}">联系我们</a>
        </div>
    </section>
    <section id="testimonials" class="{{z(class)|upset_class()}} testimonials">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>用户对我们的评价</h2>
                <p>Message</p>
            </div>
            <div class="{{z(class)|upset_class()}} slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <?php for ($i=1; $i<=5; $i++) {?>
                    <div class="{{z(class)|upset_class()}} swiper-slide">
                        <div class="{{z(class)|upset_class()}} testimonial-wrap">
                            <div class="{{z(class)|upset_class()}} testimonial-item">
                                <div class="{{z(class)|upset_class()}} d-flex align-items-center info-box">
                                    <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" class="{{z(class)|upset_class()}} testimonial-img flex-shrink-0" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                                    <div>
                                        <h3><?php echo explode_array('||',z('ask_all_'.$i),1)?></h3>
                                        <div class="{{z(class)|upset_class()}} stars">
                                            <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                            <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                            <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                            <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                            <i class="{{z(class)|upset_class()}} bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="{{z(class)|upset_class()}} bi bi-quote quote-icon-left"></i>
                                    <?php echo explode_array('||',z('ask_all_'.$i),2)?>
                                    <i class="{{z(class)|upset_class()}} bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section id="recent-posts" class="{{z(class)|upset_class()}} recent-posts">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>{{i(name,3)}}</h2>
                <p>Our Profiles</p>
            </div>
            <div class="{{z(class)|upset_class()}} row gy-4">
                {{$set=array()}}
                {{$set['cid']=3}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <article>
                        <div class="{{z(class)|upset_class()}} post-img">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" class="{{z(class)|upset_class()}} img-fluid">
                        </div>
                        <h2 class="{{z(class)|upset_class()}} title">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h2>
                        <div class="{{z(class)|upset_class()}} d-flex align-items-center">
                            <div class="{{z(class)|upset_class()}} post-meta">
                                <p class="{{z(class)|upset_class()}} post-date">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
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
    <section id="clients" class="{{z(class)|upset_class()}} clients">
        <div class="{{z(class)|upset_class()}} container" data-aos="zoom-out">
            <div class="{{z(class)|upset_class()}} clients-slider swiper">
                <div class="{{z(class)|upset_class()}} swiper-wrapper align-items-center">
                    <?php for ($i=1; $i<=6; $i++) {?>
                    <div class="{{z(class)|upset_class()}} swiper-slide">
                        <img src="<?php echo z('partner_img_'.$i) ?>" class="{{z(class)|upset_class()}} img-fluid">
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section id="recent-posts" class="{{z(class)|upset_class()}} recent-posts">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} section-header">
                <h2>{{i(name,4)}}</h2>
                <p>Our News</p>
            </div>
            <div class="{{z(class)|upset_class()}} row gy-4">
                {{$set=array()}}
                {{$set['cid']=4}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <article>
                        <div class="{{z(class)|upset_class()}} post-img">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" class="{{z(class)|upset_class()}} img-fluid">
                        </div>
                        <h2 class="{{z(class)|upset_class()}} title">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h2>
                        <div class="{{z(class)|upset_class()}} d-flex align-items-center">
                            <div class="{{z(class)|upset_class()}} post-meta">
                                <p class="{{z(class)|upset_class()}} post-date">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <div id="contact" class="{{z(class)|upset_class()}} contact-section section">
        <div class="{{z(class)|upset_class()}} section-header">
            <h2>联系我们</h2>
            <p>Contact Us</p>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row">
                <div class="{{z(class)|upset_class()}} col-lg-8 col-md-12" data-aos="fade-left">
                    <div class="{{z(class)|upset_class()}} contact-form-box contact-form contact-form-3">
                        <div class="{{z(class)|upset_class()}} form-container-box">
                            <form class="{{z(class)|upset_class()}} contact-form form" id="ajax-contact" method="post" action="{{host}}">
                                <div class="{{z(class)|upset_class()}} controls">
                                    <div class="{{z(class)|upset_class()}} row">
                                        <div class="{{z(class)|upset_class()}} col-md-6">
                                            <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                <input type="text" class="{{z(class)|upset_class()}} form-control" id="name" name="name" placeholder="Name*" required="required" data-error="Name is required.">
                                                <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} col-md-6">
                                            <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                <input type="email" class="{{z(class)|upset_class()}} form-control" id="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                                <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} col-md-12">
                                            <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                <input type="text" class="{{z(class)|upset_class()}} form-control" name="subject" placeholder="Subject" required="required">
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} col-12">
                                            <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                <textarea class="{{z(class)|upset_class()}} form-control" id="message" name="message" rows="7" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
                                                <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} col-md-12">
                                            <button type="submit" data-text="Send Message">发送</button>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} messages">
                                            <div class="{{z(class)|upset_class()}} alert alert alert-success alert-dismissable alert-dismissable hidden" id="msgSubmit">
                                                <button type="button" class="{{z(class)|upset_class()}} close" data-dismiss="alert" aria-hidden="true">&times;</button> Thank You! your message has been sent.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4 col-md-12" data-aos="fade-right">
                    <div class="{{z(class)|upset_class()}} contact-information-box-3">
                        <div class="{{z(class)|upset_class()}} row">
                            <div class="{{z(class)|upset_class()}} col-lg-12">
                                <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                    <div class="{{z(class)|upset_class()}} contact-info">
                                        <h6>地址:</h6>
                                        <p>{{z(address)}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-lg-12">
                                <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                    <div class="{{z(class)|upset_class()}} contact-info">
                                        <h6>电话:</h6>
                                        <p>{{z(phone)}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-lg-12">
                                <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                    <div class="{{z(class)|upset_class()}} contact-info">
                                        <h6>邮箱:</h6>
                                        <p>{{z(email)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} top-icon-box position-relative">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <div class="{{z(class)|upset_class()}} row">
                    <div class="{{z(class)|upset_class()}} col-lg-6 col-md-12">
                        <div class="{{z(class)|upset_class()}} guarantee-services-item">
                            <div class="{{z(class)|upset_class()}} guarantee-services-icon">
                                <i class="{{z(class)|upset_class()}} fa fa-star"></i>
                            </div>
                            <div class="{{z(class)|upset_class()}} guarantee-services-heading">
                                <h3>24/7 Support</h3>
                                <p>全天优质的服务</p>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-lg-6 col-md-12">
                        <div class="{{z(class)|upset_class()}} guarantee-services-item">
                            <div class="{{z(class)|upset_class()}} guarantee-services-icon">
                                <i class="{{z(class)|upset_class()}} fa fa-globe"></i>
                            </div>
                            <div class="{{z(class)|upset_class()}} guarantee-services-heading">
                                <h3>99.9% Uptime</h3>
                                <p>给你最大的优惠力度</p>
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