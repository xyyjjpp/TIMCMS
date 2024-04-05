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
<link rel="stylesheet" href="{{tempdir}}static/css/slick.css" type="text/css" media="screen">
<link rel="stylesheet" href="{{tempdir}}static/css/slick-theme.css" type="text/css" media="screen">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-area" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row d-flex align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-double-right"></i>
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="about-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-about-thumb-box">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-about-thumb">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row about-left">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title">
                            <h5>About Us</h5>
                            <h1><span>{{i(name,2)}}</span>
                            </h1>
                            <p>{{z(about_text)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="faq-area">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6  col-md-6 col-sm-12" >
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-section-title text-left">
                            <h5>FAQ</h5>
                            <h2><span>常见的问题解答?</span>
                            </h2>
                        </div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="accordion">
                            <?php for ($i=1; $i<=3; $i++) {?>
                                <li>
                                    <a>
                                        <span>1.</span> <?php echo explode_array('：',z('faq_text_'.$i),0) ?>
                                    </a>
                                    <p><?php echo explode_array('：',z('faq_text_'.$i),1) ?></p>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>