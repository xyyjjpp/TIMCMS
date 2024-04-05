{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/widget.css" media="all">
<script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-section d-flex align-items-center" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-content text-left" data-app-id="{{z(class)|upset_class()}}" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-home"></i>
                            </a>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">首页</li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-section style-three">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-thumb">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    <div data-app-id="{{z(class)|upset_class()}}" class="about-thumb-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="about-count">
                            <h3>25</h3>
                            <span>+</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="about-desc">
                            <h6>Years Of Experience</h6>
                            <h6>We Just Achived </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
                    <h5>// ABOUT Us</h5><br>
                    <h2>{{i(name,2)}}</h2>
                    <p>{{z(about_text)}}</p>
                </div>
            </div>
        </div>
    </div>
    <div data-app-id="{{z(class)|upset_class()}}" class="skill-shape bounce-animate">
        <img src="{{tempdir}}static/picture/shape5.png">
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-title text-center">
                    <h5>// Our Message</h5><br>
                    <h2>用户的评价</h2><br>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="testi_list owl-carousel">
                <?php for ($i=1; $i<=4; $i++) {?>
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-testimonial text-center">
                        <div data-app-id="{{z(class)|upset_class()}}" class="testi-thumb">
                            <img src="<?php echo explode_array('||',z('ask_all_'.$i),0)?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1)?>" width="80" height="80">
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="testi-content">
                            <div data-app-id="{{z(class)|upset_class()}}" class="testi-desc">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),2)?></p>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="testi-title">
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
