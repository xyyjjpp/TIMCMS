{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/widget.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
<script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-area d-flex align-items-center" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-right"></i>
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-area pt-65 pb-95">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title text-left">
                            <h5>About Us</h5>
                            <h2>{{i(name,2)}}</h2>
                            <div data-app-id="{{z(class)|upset_class()}}" class="em_bar_bg text-left"></div>
                            <p>{{z(about_text)}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-about-thumb">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial-area pt-90 pb-90">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title pb-40 text-center">
                    <h5>OUR Comment</h5>
                    <h2>用户评价!</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="em_bar_bg text-left"></div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial_list owl-carousel">
                <?php for ($i=1; $i<=5; $i++) {?>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-sm-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-single-testimonial-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-content">
                                <div data-app-id="{{z(class)|upset_class()}}" class="testi-icon">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-quote-left"></i>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-text"><?php echo explode_array('||',z('ask_all_'.$i),2)?></div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-thumb">
                                <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>">
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="testi-titile">
                                <h2><?php echo explode_array('||',z('ask_all_'.$i),1)?></h2>
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
