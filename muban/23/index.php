{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/animate.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/responsive.css">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="main-banner-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container-fluid">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-xl-5 col-lg-6 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="main-banner-content">
                    <h2><?php echo explode_array("&#x2c;",z('keywords'),2) ?></h2>
                    <p><?php echo explode_array('||',z('home_banner_all_1'),1)?></p>
                    <div data-app-id="{{z(class)|upset_class()}}" class="btn-box">
                        <a href="{{u(6)}}" data-app-id="{{z(class)|upset_class()}}" class="default-btn">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-chat-check-line"></i> {{i(name,6)}}
                        </a>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-xl-7 col-lg-6 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="main-banner-image wow animate__animated animate__fadeIn animate__fast">
                    <img src="<?php echo explode_array('||',z('home_banner_all_1'),0)?>" alt="<?php echo explode_array('||',z('home_banner_all_1'),1)?>">
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-area ptb-100 bg-color">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-content">
                    <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">ABOUT US</span>
                    <h2>{{i(name,2)}}</h2>
                    <p>{{z(about_text)}}</p>
                    <a href="{{u(2)}}" data-app-id="{{z(class)|upset_class()}}" class="default-btn">
                        <i data-app-id="{{z(class)|upset_class()}}" class="ri-medal-2-fill"></i> 了解我们
                    </a>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-image wow animate__animated animate__fadeIn animate__fast">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="services-area pt-100 pb-60">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
            <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">OUR SERVICES</span>
            <h2>{{i(name,5)}}</h2>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon1.png" alt="<?php echo explode_array('：',z('service_text_1'),0) ?>">
                    </div>
                    <h3>
                        <p><?php echo explode_array('：',z('service_text_1'),0) ?></p>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon2.png" alt="<?php echo explode_array('：',z('service_text_2'),0) ?>">
                    </div>
                    <h3>
                        <p><?php echo explode_array('：',z('service_text_2'),0) ?></p>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon3.png" alt="<?php echo explode_array('：',z('service_text_3'),0) ?>">
                    </div>
                    <h3>
                        <?php echo explode_array('：',z('service_text_3'),0) ?>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon4.png" alt="<?php echo explode_array('：',z('service_text_4'),0) ?>">
                    </div>
                    <h3>
                        <p><?php echo explode_array('：',z('service_text_4'),0) ?></p>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon5.png" alt="<?php echo explode_array('：',z('service_text_5'),0) ?>">
                    </div>
                    <h3>
                        <p><?php echo explode_array('：',z('service_text_5'),0) ?></p>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-services-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                        <img src="{{tempdir}}assets/img/services/services-icon6.png" alt="<?php echo explode_array('：',z('service_text_6'),0) ?>">
                    </div>
                    <h3>
                        <p><?php echo explode_array('：',z('service_text_6'),0) ?></p>
                    </h3>
                    <p><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-area pt-100 pb-70">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
            <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">Our Project</span>
            <h2>{{i(name,3)}}</h2>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-center">
            {{$set=array()}}
            {{$set['cid']=3}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic,content}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-post">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-image">
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="d-block">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-content">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="meta">
                            <li>
                                <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            </li>
                        </ul>
                        <h3>
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h3>
                        <p>{{$a['content']|text(150)}}...</p>
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="link-btn">阅读</a>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="feedback-area ptb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container-fluid">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-5 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="feedback-image wow animate__animated animate__fadeIn animate__slower">
                    <img src="{{tempdir}}assets/img/feedback.png" alt="image">
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-7 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="feedback-slides owl-carousel owl-theme">
                    <?php for ($i=1; $i<=4; $i++) {?>
                    <div data-app-id="{{z(class)|upset_class()}}" class="feedback-content">
                        <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                        <div data-app-id="{{z(class)|upset_class()}}" class="client-info">
                            <div data-app-id="{{z(class)|upset_class()}}" class="d-flex align-items-center">
                                <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                                <div data-app-id="{{z(class)|upset_class()}}" class="title">
                                    <h4><?php echo explode_array('||',z('ask_all_'.$i),1)?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-area pt-100 pb-70">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
            <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">Our News</span>
            <h2>{{i(name,4)}}</h2>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-center">
            {{$set=array()}}
            {{$set['cid']=4}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic,content}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-post">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-image">
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="d-block">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-content">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="meta">
                            <li>
                                <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            </li>
                        </ul>
                        <h3>
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h3>
                        <p>{{$a['content']|text(150)}}...</p>
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="link-btn">阅读</a>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="cta-area pb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="cta-inner">
            <div data-app-id="{{z(class)|upset_class()}}" class="row m-0 align-items-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-12 p-0">
                    <div data-app-id="{{z(class)|upset_class()}}" class="cta-image wow animate__animated animate__fadeIn animate__slow">
                        <img src="{{tempdir}}assets/img/cta.png" alt="image">
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-12 p-0">
                    <div data-app-id="{{z(class)|upset_class()}}" class="cta-content">
                        <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">有什么需要帮助的么?</span>
                        <h2>现在联系我们获取最新优惠资讯!</h2>
                        <a href="{{u(6)}}" data-app-id="{{z(class)|upset_class()}}" class="default-btn">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-message-2-line"></i> {{i(name,6)}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="faq-area ptb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
            <span data-app-id="{{z(class)|upset_class()}}" class="sub-title">F A Q S</span>
            <h2>常见的问题解答?</h2>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="faq-accordion accordion" id="faqAccordion">
            <div data-app-id="{{z(class)|upset_class()}}" class="accordion-item">
                <button data-app-id="{{z(class)|upset_class()}}" class="accordion-header accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo explode_array('：',z('faq_text_1'),0) ?>
                </button>
                <div id="collapseOne" data-app-id="{{z(class)|upset_class()}}" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div data-app-id="{{z(class)|upset_class()}}" class="accordion-body">
                        <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="accordion-item">
                <button data-app-id="{{z(class)|upset_class()}}" class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <?php echo explode_array('：',z('faq_text_2'),0) ?>
                </button>
                <div id="collapseTwo" data-app-id="{{z(class)|upset_class()}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div data-app-id="{{z(class)|upset_class()}}" class="accordion-body">
                        <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="accordion-item">
                <button data-app-id="{{z(class)|upset_class()}}" class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <?php echo explode_array('：',z('faq_text_3'),0) ?>
                </button>
                <div id="collapseThree" data-app-id="{{z(class)|upset_class()}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div data-app-id="{{z(class)|upset_class()}}" class="accordion-body">
                        <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="accordion-item">
                <button data-app-id="{{z(class)|upset_class()}}" class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <?php echo explode_array('：',z('faq_text_4'),0) ?>
                </button>
                <div id="collapseFour" data-app-id="{{z(class)|upset_class()}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div data-app-id="{{z(class)|upset_class()}}" class="accordion-body">
                        <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="accordion-item">
                <button data-app-id="{{z(class)|upset_class()}}" class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <?php echo explode_array('：',z('faq_text_5'),0) ?>
                </button>
                <div id="collapseFive" data-app-id="{{z(class)|upset_class()}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div data-app-id="{{z(class)|upset_class()}}" class="accordion-body">
                        <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="subscribe-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="subscribe-image wow animate__animated animate__fadeInDown animate__fast">
                    <img src="{{tempdir}}assets/img/subscribe.png" alt="image">
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-5 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="subscribe-content">
                    <h2>订阅我们的邮箱</h2>
                    <form data-app-id="{{z(class)|upset_class()}}" class="newsletter-form" data-toggle="validator">
                        <input type="email" data-app-id="{{z(class)|upset_class()}}" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        <button type="submit">Subscribe Now</button>
                        <div id="validator-newsletter" data-app-id="{{z(class)|upset_class()}}" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="shape3 wow animate__animated animate__fadeIn animate__slow">
        <img src="{{tempdir}}assets/img/shape/shape3.png" alt="image">
    </div>
</div>
{{file footer}}
</body>
</html>