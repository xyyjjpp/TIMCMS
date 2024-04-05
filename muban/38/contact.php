{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" data-parallax-img="{{z(contact_banner_img)}}">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-top-34 section-lg-top-98 section-bottom-34">
                    <div>
                        <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name)}}</h2>
                    </div>
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-lg-top-66">
                        <li class="{{z(class)|upset_class()}} list-inline-item active">
                            <a href="{{host}}">首页</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">Contacts Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} bg-lighter section-66 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center text-md-start">
                <div class="{{z(class)|upset_class()}} col-sm-10 col-md-8 col-lg-12">
                    <div class="{{z(class)|upset_class()}} row row-50 justify-content-sm-center">
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-3 col-xxl-2">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-xs unit-sm flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} novi-icon icon icon-xs mdi mdi-phone text-primary" style="font-size: 26px"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h6>电话</h6>
                                    <div class="{{z(class)|upset_class()}} p">
                                        <a class="{{z(class)|upset_class()}} d-block" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-3 col-xxl-2">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-xs unit-sm flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} novi-icon icon icon-xs mdi mdi-email-open text-primary" style="font-size: 26px"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h6>邮箱</h6>
                                    <div class="{{z(class)|upset_class()}} p">
                                        <a class="{{z(class)|upset_class()}} d-block" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-3 col-xxl-2">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-xs unit-sm flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} novi-icon icon icon-xs mdi mdi-map text-primary" style="font-size: 26px"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h6>地址</h6>
                                    <address class="{{z(class)|upset_class()}} contact-info">{{z(address)}}</address>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-3 col-xxl-2">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-xs unit-sm flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} novi-icon icon icon-xs mdi mdi-timelapse text-primary" style="font-size: 26px"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h6>工作时间</h6>
                                    <div>
                                        <p>8:00 – 19:00 Mon – Fri</p>
                                    </div>
                                    <p class="{{z(class)|upset_class()}} offset-top-0">9:00 – 17:00 Sat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-66 section-lg-110 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} fw-bold">留言</h2>
            <hr class="{{z(class)|upset_class()}} divider bg-saffron">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-sm-center offset-top-41 offset-lg-top-66">
                <div class="{{z(class)|upset_class()}} col-sm-10 col-lg-8">
                    <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} row row-30 row-fix justify-content-sm-center">
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <label class="{{z(class)|upset_class()}} form-label" for="mailform-first-name">姓</label>
                                    <input class="{{z(class)|upset_class()}} form-control bg-white" id="mailform-first-name" type="text" name="first name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <label class="{{z(class)|upset_class()}} form-label" for="mailform-last-name">名</label>
                                    <input class="{{z(class)|upset_class()}} form-control bg-white" id="mailform-last-name" type="text" name="last name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <label class="{{z(class)|upset_class()}} form-label" for="mailform-phone">电话</label>
                                    <input class="{{z(class)|upset_class()}} form-control bg-white" id="mailform-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <label class="{{z(class)|upset_class()}} form-label" for="mailform-email">邮箱</label>
                                    <input class="{{z(class)|upset_class()}} form-control bg-white" id="mailform-email" type="text" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-12">
                                <div class="{{z(class)|upset_class()}} form-group">
                                    <label class="{{z(class)|upset_class()}} form-label" for="mailform-message">信息</label>
                                    <textarea class="{{z(class)|upset_class()}} form-control bg-white" id="mailform-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} offset-top-24 text-center">
                            <button class="{{z(class)|upset_class()}} btn btn-primary" type="submit">发送</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>