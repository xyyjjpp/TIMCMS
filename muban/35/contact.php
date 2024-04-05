{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{z(contact_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Contacts Us</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-md-center justify-content-xl-between">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-7">
                    <h3>发送邮件</h3>
                    <hr class="{{z(class)|upset_class()}} divider divider-left divider-default">
                    <form class="{{z(class)|upset_class()}} rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} row row-fix row-17">
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-name">First name</label>
                                    <input class="{{z(class)|upset_class()}} form-input form-bg" id="form-1-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-last-name">Last name</label>
                                    <input class="{{z(class)|upset_class()}} form-input form-bg" id="form-1-last-name" type="text" name="last-name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-email">E-mail</label>
                                    <input class="{{z(class)|upset_class()}} form-input form-bg" id="form-1-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-phone">Phone</label>
                                    <input class="{{z(class)|upset_class()}} form-input form-bg" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-12">
                                <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                    <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-message">Message</label>
                                    <textarea class="{{z(class)|upset_class()}} form-input form-bg" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-12 offset-custom-1">
                                <div class="{{z(class)|upset_class()}} form-button">
                                    <button class="{{z(class)|upset_class()}} button" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-5 col-xl-4">
                    <div class="{{z(class)|upset_class()}} column-aside">
                        <div class="{{z(class)|upset_class()}} row">
                            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-12">
                                <h6>地址</h6>
                                <hr class="{{z(class)|upset_class()}} divider-thin">
                                <article class="{{z(class)|upset_class()}} box-inline">
                                    <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                                    <span>
                                                <a href="{{host}}">{{z(address)}}</a>
                                            </span>
                                </article>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-12">
                                <h6>电话</h6>
                                <hr class="{{z(class)|upset_class()}} divider-thin">
                                <article class="{{z(class)|upset_class()}} box-inline">
                                    <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                                    <ul class="{{z(class)|upset_class()}} list-comma">
                                        <li>
                                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-12">
                                <h6>邮箱</h6>
                                <hr class="{{z(class)|upset_class()}} divider-thin">
                                <article class="{{z(class)|upset_class()}} box-inline">
                                    <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span>
                                    <span>
                                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                            </span>
                                </article>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-10 col-md-6 col-lg-12">
                                <h6>工作时间</h6>
                                <hr class="{{z(class)|upset_class()}} divider-thin">
                                <article class="{{z(class)|upset_class()}} box-inline">
                                    <span class="{{z(class)|upset_class()}} icon novi-icon icon-md-smaller icon-primary mdi mdi-calendar-clock"></span>
                                    <ul class="{{z(class)|upset_class()}} list-0">
                                        <li>礼拜一 - 礼拜六: 9:00 am–6:00 pm</li>
                                    </ul>
                                </article>
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