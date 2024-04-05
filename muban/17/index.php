{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/uikit.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/swiper.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery.animatedheadline.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="hero-section style-one d-flex align-items-center pt-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="hero-content white">
                    <h5><?php echo explode_array("&#x2c;",z('keywords'),2) ?></h5>
                    <h2><?php echo explode_array('||',z('home_banner_all_1'),1)?></h2><br>
                    <div data-app-id="{{z(class)|upset_class()}}" class="btn-common btn-hero">
                        <a href="{{u(5)}}">{{i(neme,5)}}</a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="hero-thumb alltuchtopdown">
                        <img src="<?php echo explode_array('||',z('home_banner_all_1'),0)?>" alt="<?php echo explode_array('||',z('home_banner_all_1'),1)?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-section style-one pt-80 pb-80">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-thumb pr-100">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-content-wrapper">
                    <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-one">
                        <h2>{{i(name,2)}}</h2>
                        <span>About Us</span>
                        <div data-app-id="{{z(class)|upset_class()}}" class="bar"></div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="about-content">
                        <p>{{z(about_text)}}</p>
                        <div data-app-id="{{z(class)|upset_class()}}" class="btn-common style-two btn-about mt-40">
                            <a href="{{u(2)}}">阅读</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="portfolio-section pb-60 pt-80">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-two">
                    <h5>Our Portfolio</h5>
                    <h2>{{i(name,3)}}</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row image_load">
            {{$set=array()}}
            {{$set['cid']=3}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12 grid-item design cemes">
                <div data-app-id="{{z(class)|upset_class()}}" class="portfolio-thumb">
                    <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                    <div data-app-id="{{z(class)|upset_class()}}" class="portfolio-content">
                        <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}} </p>
                        <h4>
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h4>
                        <div data-app-id="{{z(class)|upset_class()}}" class="btn-read-more">
                            <a href="{{$a['link']}}">阅读</a>
                        </div>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="service-section style-one bg-two pt-75 pb-50">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-two">
                    <h5>Our Services</h5>
                    <h2>{{i(name,5)}}</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon bg-one">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-global-1"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_1'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_1'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon bg-2">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-aeroplane"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_2'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_2'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon back-three">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-data-2"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_3'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_3'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon bg-four">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-analysis"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_4'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_4'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon bg-five">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-developer"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_5'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_5'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-service">
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-icon bg-six">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-bar-chart"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="service-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="service-title">
                            <h4><?php echo explode_array('：',z('service_text_6'),0) ?></h4>
                        </div>
                        <p><?php echo explode_array('：',z('service_text_6'),1) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="counter-section style-one white pt-80 pb-50">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-counter d-flex  align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-icon">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-developer"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-text">
                        <h1 data-app-id="{{z(class)|upset_class()}}" class="counter">364</h1>
                        <h3>K</h3>
                        <h4>用户</h4>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-counter d-flex align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-icon">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-intelligent"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-text">
                        <h1 data-app-id="{{z(class)|upset_class()}}" class="counter">245</h1>
                        <h3>+</h3>
                        <h4>案例</h4>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-counter d-flex align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-icon">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-content"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-text">
                        <h1 data-app-id="{{z(class)|upset_class()}}" class="counter">142</h1>
                        <h3>K</h3>
                        <h4>公司成员</h4>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-counter d-flex align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-icon">
                        <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-analysis"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="counter-text">
                        <h1 data-app-id="{{z(class)|upset_class()}}" class="counter">982</h1>
                        <h3>+</h3>
                        <h4>奖项</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial-section style-one bg-two pt-80 pb-25">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-two">
                    <h5>Our Comment</h5>
                    <h2>用户评论</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-carousel owl-carousel">
                <?php for ($i=1; $i<=4; $i++) {?>
                <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-single-carousel">
                    <div data-app-id="{{z(class)|upset_class()}}" class="carousel-thumb">
                        <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-content">
                        <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                        <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-title">
                            <h5><?php echo explode_array('||',z('ask_all_'.$i),1)?></h5>
                            <div data-app-id="{{z(class)|upset_class()}}" class="icon-shape">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="appointment-section style-one pt-80 pb-85">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-one mb-45">
                    <h2>现在联系我们获取优惠</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="appointment-form">
                    <form action="{{host}}" method="POST" id="dreamit-form">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="name" data-app-id="{{z(class)|upset_class()}}" class="txt-name form-control" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="email" data-app-id="{{z(class)|upset_class()}}" class="txt-email form-control" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="number" data-app-id="{{z(class)|upset_class()}}" class="txt-number form-control" placeholder="Your Number" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="sub" data-app-id="{{z(class)|upset_class()}}" class="txt-subject form-control" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <textarea name="message" data-app-id="{{z(class)|upset_class()}}" class="txt-message form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="btn-submit ml-15"> Send Message</button>
                        </div>
                    </form>
                    <div id="status"></div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-thumb">
                    <img src="{{tempdir}}static/picture/thumb-5.png" alt="现在联系我们获取优惠">
                </div>
            </div>
        </div>
    </div>
</div>
<section data-app-id="{{z(class)|upset_class()}}" class="feature white">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-8 col-lg-9">
                <div data-app-id="{{z(class)|upset_class()}}" class="feature-title">
                    <h2>订阅我们的邮箱</h2>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-4 col-lg-3">
                <div data-app-id="{{z(class)|upset_class()}}" class="buttons text-right mt-30">
                    <div data-app-id="{{z(class)|upset_class()}}" class="btn-common style-two">
                        <a href="{{u(6)}}">{{i(name,6)}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-section style-one pt-70 pb-50">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-two">
                    <h2>{{i(name,4)}}</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                    <p>Our News</p>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            {{$set=array()}}
            {{$set['cid']=4}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,content,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-thumb">
                        <a href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta">
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-title">
                            <h4>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-text">
                            <p>{{$a['content']|text(150)}}...</p>
                        </div>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="faq-sectiion pt-75 pb-75">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-head style-two">
                    <h5>F A Q</h5>
                    <h2>常见的问题解答?</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="bar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div id="accordion">
                    <h3 data-app-id="{{z(class)|upset_class()}}" class="acc-title"><?php echo explode_array('：',z('faq_text_1'),0) ?><i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-down"></i>
                    </h3>
                    <div data-app-id="{{z(class)|upset_class()}}" class="acc-content">
                        <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                    </div>
                    <h3 data-app-id="{{z(class)|upset_class()}}" class="acc-title"> <?php echo explode_array('：',z('faq_text_2'),0) ?> <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-down"></i>
                    </h3>
                    <div data-app-id="{{z(class)|upset_class()}}" class="acc-contcol-md-6 ent">
                        <p><?php echo explode_array('：',z('faq_text_2'),1) ?> </p>
                    </div>
                    <h3 data-app-id="{{z(class)|upset_class()}}" class="acc-title"> <?php echo explode_array('：',z('faq_text_3'),0) ?> <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-down"></i>
                    </h3>
                    <div data-app-id="{{z(class)|upset_class()}}" class="acc-contcol-md-6 ent">
                        <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-6">
                <div id="accordion-2">
                    <h3 data-app-id="{{z(class)|upset_class()}}" class="acc-title"><?php echo explode_array('：',z('faq_text_4'),0) ?><i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-down"></i>
                    </h3>
                    <div data-app-id="{{z(class)|upset_class()}}" class="acc-content">
                        <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                    </div>
                    <h3 data-app-id="{{z(class)|upset_class()}}" class="acc-title"> <?php echo explode_array('：',z('faq_text_5'),0) ?> <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-down"></i>
                    </h3>
                    <div data-app-id="{{z(class)|upset_class()}}" class="acc-content">
                        <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>