{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
<script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-area d-flex align-items-center" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="brpt text-center">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="security-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-title text-left">
                    <h2>{{i(name,2)}}</h2>
                    {{z(about_text)}}
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="security-thumb bounce-animate">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="testimonial-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-title text-center">
                    <h6>Our Comment</h6>
                    <h2>用户给予我们公司的评价</h2><br>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="testimonial_list owl-carousel">
            <?php for ($i=1; $i<=5; $i++) {?>
                <div data-app-id="{{z(class)|upset_class()}}" class="testi-single">
                    <div data-app-id="{{z(class)|upset_class()}}" class="testi-items d-flex">
                        <div data-app-id="{{z(class)|upset_class()}}" class="testi-thumb">
                            <img src="<?php echo explode_array('||',z('ask_all_'.$i),0) ?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1) ?>" width="80" height="80">
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="testi-content">
                            <h2><?php echo explode_array('||',z('ask_all_'.$i),1) ?></h2>
                        </div>
                    </div>
                    <p><?php echo explode_array('||',z('ask_all_'.$i),2) ?></p>
                    <div data-app-id="{{z(class)|upset_class()}}" class="testi-rating">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-star"></i>
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-star"></i>
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-star"></i>
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-star"></i>
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-star-half-alt"></i>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="testi-quote">
                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-quote-right"></i>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>