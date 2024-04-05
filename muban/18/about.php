{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
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
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome-area d-flex align-items-center" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-area style-three">
    <div data-app-id="{{z(class)|upset_class()}}" class="container-fluid">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 p-0">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-thumb">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 pl-60 pt-40">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title pb-30">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-sub-title">
                        <h5>About Us</h5>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-main-title">
                        <h2>{{i(name,2)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-bar"></div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-text-inner mt-35">
                        <p>{{z(about_text)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial-area pt-80 pb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title style-two pb-30">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-sub-title">
                        <h5>Our Comment</h5>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-main-title pb-30">
                        <h2 data-app-id="{{z(class)|upset_class()}}" class="text-black">用户给予的评价</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-bar"></div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row pt-30">
            <div data-app-id="{{z(class)|upset_class()}}" class="testimonials_list owl-carousel">
                <?php for ($i=1; $i<=5; $i++) {?>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-testimonial">
                            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-content-text">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),2) ?></p>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-content-inner d-flex">
                                <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-thumb ">
                                    <img src="<?php echo explode_array('||',z('ask_all_'.$i),0) ?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1) ?>">
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="testimonial-content-title ml-4 ">
                                    <h2><?php echo explode_array('||',z('ask_all_'.$i),1) ?></h2>
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