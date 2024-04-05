{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} wrapper-triangle">
        <div class="{{z(class)|upset_class()}} pen">
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} bg-gray-7">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom box-transform-wrap context-dark">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
                <div class="{{z(class)|upset_class()}} breadcrumbs-custom-decor"></div>
            </div>
            <div class="{{z(class)|upset_class()}} box-transform" style="background-image: url({{z(contact_banner_img)}});"></div>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Contacts Us</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-md-left">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-60 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <h4 class="{{z(class)|upset_class()}} text-spacing-25 text-transform-none">留言</h4>
                    <form class="{{z(class)|upset_class()}} rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} row row-20 gutters-20">
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-your-name-5">Your Name*</label>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-email-5" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-email-5">Your E-mail*</label>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <select class="{{z(class)|upset_class()}} form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                        <option value="1">Select a Service</option>
                                        <option value="2">Value Engineering</option>
                                        <option value="3">HVAC Design</option>
                                        <option value="4">Geospatial Design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-phone-5">Your Phone*</label>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-12">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-message-5">Message</label>
                                    <textarea class="{{z(class)|upset_class()}} form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="{{z(class)|upset_class()}} button button-secondary button-winona" type="submit">Contact us</button>
                    </form>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} aside-contacts">
                        <div class="{{z(class)|upset_class()}} row row-30">
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="{{z(class)|upset_class()}} aside-contacts-title">社交平台</p>
                                <ul class="{{z(class)|upset_class()}} list-inline contacts-social-list list-inline-sm">
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-facebook" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-twitter" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-instagram" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a class="{{z(class)|upset_class()}} icon mdi mdi-google-plus" href="{{host}}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="{{z(class)|upset_class()}} aside-contacts-title">电话</p>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-phone"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} phone" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="{{z(class)|upset_class()}} aside-contacts-title">邮箱</p>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-email-outline"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} mail" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="{{z(class)|upset_class()}} aside-contacts-title">地址</p>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-map-marker"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} address" href="{{host}}">{{z(address)}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>