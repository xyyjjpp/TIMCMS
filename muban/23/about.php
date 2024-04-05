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
<div data-app-id="{{z(class)|upset_class()}}" class="page-title-area" style="background-image: url('{{z(about_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="page-title-content">
            <h2>{{i(name)}}</h2>
            <p>About Us</p>
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
{{file footer}}
</body>
</html>