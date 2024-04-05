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
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-area d-flex align-items-center" style="background-image: url('{{z(contact_banner_img)}}')">
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
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="contact-us">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="section-title text-center">
                    <h6>Contact Us</h6>
                    <h2>{{i(name)}}</h2><br><br>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                <form action="{{host}}" method="POST" id="dreamit-form">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row">
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                <form action="post">
                                    <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Frist Name*" required="">
                                </form>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                <form action="post">
                                    <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Your Email*" required="">
                                </form>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                <form action="post">
                                    <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Phone Number*" required="">
                                </form>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-form_2">
                                <form action="post">
                                    <input data-app-id="{{z(class)|upset_class()}}" class="contact-style_2" type="text" name="name" placeholder="Subject*" required="">
                                </form>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-form-msg-2 style3">
                                <form action="post">
                                    <textarea name="text" data-app-id="{{z(class)|upset_class()}}" class="contact-style-msg2" name="message" id="text" placeholder="Enter Message" cols="30" rows="10"></textarea>
                                </form>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-button style3 text-right">
                                <input data-app-id="{{z(class)|upset_class()}}" class="blog-button" type="submit" value="Sent Message">
                            </div>
                        </div>
                    </div>
                </form>
                <div id="status"></div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>