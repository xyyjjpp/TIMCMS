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
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-section d-flex align-items-center" style="background-image: url('{{z(contact_banner_img)}}')">
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
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-form" data-app-id="{{z(class)|upset_class()}}" class="pt-100 pb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6 p-0">
                <div data-app-id="{{z(class)|upset_class()}}" class="appointment-form">
                    <div data-app-id="{{z(class)|upset_class()}}" class="appoinment-title text-left mb-30">
                        <h4>给我们发送邮件</h4>
                    </div>
                    <form action="{{host}}" method="POST" id="dreamit-form">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="name" data-app-id="{{z(class)|upset_class()}}" class="txt-name form-control" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="email" data-app-id="{{z(class)|upset_class()}}" class="txt-email form-control" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="number" data-app-id="{{z(class)|upset_class()}}" class="txt-number form-control" placeholder="Your Number" required="">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="subject" data-app-id="{{z(class)|upset_class()}}" class="txt-subject form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <textarea name="message" data-app-id="{{z(class)|upset_class()}}" class="txt-message form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="btn-submit"> Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div id="status"></div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-6 p-0">
                <div data-app-id="{{z(class)|upset_class()}}" class="contact-info-wrapper">
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-info d-flex">
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-time"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-content">
                            <h4>地址</h4>
                            <p>{{z(address)}}</p>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-info d-flex">
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-call"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-content">
                            <h4>电话</h4>
                            <p>{{Z(phone)}}</p>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="single-info d-flex">
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="flaticon-next-1"></i>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="info-content">
                            <h4>邮箱</h4>
                            <p>{{z(email)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>