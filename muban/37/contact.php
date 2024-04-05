{{file seo}}
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<main id="main">
    <div class="{{z(class)|upset_class()}} breadcrumbs">
        <div class="{{z(class)|upset_class()}} page-header d-flex align-items-center" style="background-image: url({{z(contact_banner_img)}});">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <div class="{{z(class)|upset_class()}} row d-flex justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-lg-6 text-center">
                        <h2>{{i(name)}}</h2>
                        <p>Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="{{z(class)|upset_class()}} container">
                <ol>
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </nav>
    </div>
    <div class="{{z(class)|upset_class()}} single-page">
        <div id="contact" class="{{z(class)|upset_class()}} contact-section section">
            <div class="{{z(class)|upset_class()}} container">
                <div class="{{z(class)|upset_class()}} row">
                    <div class="{{z(class)|upset_class()}} col-lg-8 col-md-12" data-aos="fade-left">
                        <div class="{{z(class)|upset_class()}} contact-form-box contact-form contact-form-3">
                            <div class="{{z(class)|upset_class()}} form-container-box">
                                <form class="{{z(class)|upset_class()}} contact-form form" id="ajax-contact" method="post" action="{{host}}">
                                    <div class="{{z(class)|upset_class()}} controls">
                                        <div class="{{z(class)|upset_class()}} row">
                                            <div class="{{z(class)|upset_class()}} col-md-6">
                                                <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                    <input type="text" class="{{z(class)|upset_class()}} form-control" id="name" name="name" placeholder="Name*" required="required" data-error="Name is required.">
                                                    <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} col-md-6">
                                                <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                    <input type="email" class="{{z(class)|upset_class()}} form-control" id="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                                    <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} col-md-12">
                                                <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                    <input type="text" class="{{z(class)|upset_class()}} form-control" name="subject" placeholder="Subject" required="required">
                                                </div>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} col-12">
                                                <div class="{{z(class)|upset_class()}} form-group form-input-box">
                                                    <textarea class="{{z(class)|upset_class()}} form-control" id="message" name="message" rows="7" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
                                                    <div class="{{z(class)|upset_class()}} help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} col-md-12">
                                                <button type="submit" data-text="Send Message">Send Message</button>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} messages">
                                                <div class="{{z(class)|upset_class()}} alert alert alert-success alert-dismissable alert-dismissable hidden" id="msgSubmit">
                                                    <button type="button" class="{{z(class)|upset_class()}} close" data-dismiss="alert" aria-hidden="true">&times;</button> Thank You! your message has been sent.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-lg-4 col-md-12" data-aos="fade-right">
                        <div class="{{z(class)|upset_class()}} contact-information-box-3">
                            <div class="{{z(class)|upset_class()}} row">
                                <div class="{{z(class)|upset_class()}} col-lg-12">
                                    <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                        <div class="{{z(class)|upset_class()}} contact-info">
                                            <h6>地址:</h6>
                                            <p>{{z(address)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-lg-12">
                                    <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                        <div class="{{z(class)|upset_class()}} contact-info">
                                            <h6>电话:</h6>
                                            <p>{{z(phone)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-lg-12">
                                    <div class="{{z(class)|upset_class()}} single-contact-info-box">
                                        <div class="{{z(class)|upset_class()}} contact-info">
                                            <h6>邮箱:</h6>
                                            <p>{{z(email)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{{file footer}}
</body>
</html>