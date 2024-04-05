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
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-section d-flex align-items-center" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-content">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                        </li>
                        <li>About Us</li>
                    </ul>
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
{{file footer}}
</body>
</html>