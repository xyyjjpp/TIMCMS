{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(contact_banner_img)}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Contact Us</li>
            </ul>
        </div>
    </section>
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} layout-bordered">
                <div class="{{z(class)|upset_class()}} layout-bordered-aside">
                    <div class="{{z(class)|upset_class()}} layout-bordered-aside-inner">
                        <h2>找到我们</h2>
                        <div class="{{z(class)|upset_class()}} layout-bordered-aside-group">
                            <dl class="{{z(class)|upset_class()}} list-terms-1">
                                <dt>Client Support:</dt>
                                <dd>
                                    <span class="{{z(class)|upset_class()}} icon mdi-phone mdi"></span>
                                    <a class="{{z(class)|upset_class()}} list-terms-1-link-big" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </dd>
                            </dl>
                            <dl class="{{z(class)|upset_class()}} list-terms-1">
                                <dt>E-mail:</dt>
                                <dd>
                                    <span class="{{z(class)|upset_class()}} icon mdi mdi-email-outline"></span>
                                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </dd>
                            </dl>
                            <dl class="{{z(class)|upset_class()}} list-terms-1">
                                <dt>Main Office:</dt>
                                <dd>
                                    <span class="{{z(class)|upset_class()}} icon mdi mdi-map-marker"></span>
                                    <a href="{{host}}">{{z(address)}}</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} layout-bordered-main">
                    <div class="{{z(class)|upset_class()}} layout-bordered-main-inner">
                        <h2>现在联系我们</h2>
                        <form class="{{z(class)|upset_class()}} rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post">
                            <div class="{{z(class)|upset_class()}} row row-20">
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <input class="{{z(class)|upset_class()}} form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-name">Your Name</label>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <input class="{{z(class)|upset_class()}} form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <input class="{{z(class)|upset_class()}} form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-phone">Phone</label>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <label class="{{z(class)|upset_class()}} form-label" for="contact-message">Message</label>
                                        <textarea class="{{z(class)|upset_class()}} form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <button class="{{z(class)|upset_class()}} button button-sm button-secondary" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>
