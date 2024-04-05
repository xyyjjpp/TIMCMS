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
<div data-app-id="{{z(class)|upset_class()}}" class="page-title-area" style="background-image: url('{{z(contact_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="page-title-content">
            <h2>{{i(name)}}</h2>
            <p>Contact Us</p>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="contact-area ptb-100">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="section-title">
            <h2>现在给我们发送邮件</h2>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-12">
                <ul data-app-id="{{z(class)|upset_class()}}" class="contact-info">
                    <li>
                        <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-map-pin-line"></i>
                        </div>
                        <h3>地址:</h3>
                        <p>{{z(address)}}</p>
                    </li>
                    <li>
                        <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-phone-line"></i>
                        </div>
                        <h3>致电我们:</h3>
                        <p>
                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                        </p>
                    </li>
                    <li>
                        <div data-app-id="{{z(class)|upset_class()}}" class="icon">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-mail-send-line"></i>
                        </div>
                        <h3>邮箱:</h3>
                        <p>
                            <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                        </p>
                    </li>
                </ul>
                <ul data-app-id="{{z(class)|upset_class()}}" class="contact-social-links">
                    <li>
                        <a href="{{host}}" target="_blank">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-facebook-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{host}}" target="_blank">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-linkedin-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{host}}" target="_blank">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-twitter-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{host}}" target="_blank">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-instagram-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{host}}" target="_blank">
                            <i data-app-id="{{z(class)|upset_class()}}" class="ri-youtube-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="contact-form">
                    <form data-app-id="{{z(class)|upset_class()}}" class="contact__form" method="post" action="{{host}}">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="name" data-app-id="{{z(class)|upset_class()}}" class="form-control" id="name" required data-error="Please enter your name" placeholder="Name">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="email" name="email" data-app-id="{{z(class)|upset_class()}}" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email address">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="phone_number" data-app-id="{{z(class)|upset_class()}}" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Phone number">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-6">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="text" name="msg_subject" data-app-id="{{z(class)|upset_class()}}" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12 col-sm-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <textarea name="message" id="message" data-app-id="{{z(class)|upset_class()}}" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Message..."></textarea>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="default-btn">Send Message</button>
                                <div id="msgSubmit" data-app-id="{{z(class)|upset_class()}}" class="h3 text-center hidden"></div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="clearfix"></div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message has been sent successfully.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>