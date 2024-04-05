{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/elements.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/slick.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/themify-icons.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/widget.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/unittest.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
<script type="text/javascript" src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome_area" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container-fluid">
        <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
            <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_title">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_title_inner">
                    <h2>{{i(name)}}</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_content">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about_area about-left-img about-pages">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row ">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-12 col-xm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit_about">
                    <div data-app-id="{{z(class)|upset_class()}}" class="section_title_lefts about_subtitle">
                        <h2 style="font-size: 30px">{{i(name,2)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="about_text">
                        <p>{{z(about_text)}}</p>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-12 col-xm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-video">
                    <div data-app-id="{{z(class)|upset_class()}}" class="em-video-image">
                        <img src="{{z(about_img)}}" alt="insert image">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="choose-video-icon">
                        <div data-app-id="{{z(class)|upset_class()}}" class="video-icon">
                            <a data-app-id="{{z(class)|upset_class()}}" class="video-vemo-icon venobox vbox-item" href="{{z(about_img)}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-play-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial_area" id="testimonial">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="testimonial_list owl-carousel curosel-style">
                        <?php for ($i=1; $i<=5; $i++) {?>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="single_testimonial">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="em_test_thumb">
                                        <img src="<?php echo explode_array('||',z('ask_all_'.$i),0) ?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1) ?>" width="80" height="80">
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="em_testi_content">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="em_testi_title">
                                            <h2><?php echo explode_array('||',z('ask_all_'.$i),1) ?></h2>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="em_testi_text">
                                            <p><?php echo explode_array('||',z('ask_all_'.$i),2) ?></p>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="testi_review">
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-star"></i>
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-star"></i>
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-star"></i>
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-star"></i>
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-star-o"></i>
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
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="dreamit_contact_info">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4 col-sm-6 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit_single_info">
                    <span data-app-id="{{z(class)|upset_class()}}" class="ti-map"></span>
                    <h3>地址</h3>
                    <p>{{z(address)}}</p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4 col-sm-6 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit_single_info">
                    <span data-app-id="{{z(class)|upset_class()}}" class="ti-mobile"></span>
                    <h3>电话</h3>
                    <p>{{z(phone)}}</p>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4 col-sm-6 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit_single_info">
                    <span data-app-id="{{z(class)|upset_class()}}" class="ti-email"></span>
                    <h3>邮箱</h3>
                    <p>{{z(email)}} </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>