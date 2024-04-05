{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} preloader-body">
        <div class="{{z(class)|upset_class()}} cssload-container">
            <div class="{{z(class)|upset_class()}} cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-page-title novi-bg novi-bg-img" style="background-image: url({{z(contact_banner_img)}}); background-size: cover;">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} page-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Contacts Us</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-md bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <h2>联系我们</h2>
                    <div class="{{z(class)|upset_class()}} divider-lg"></div>
                    <form class="{{z(class)|upset_class()}} rd-mailform text-start rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} row row-15 row-novi">
                            <div class="{{z(class)|upset_class()}} col-sm-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-name">First name</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-sec-name">Last name</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-sec-name" type="text" name="sec-name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-phone">Phone</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-email">E-Mail</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-12">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="contact-message">Message</label>
                                    <textarea class="{{z(class)|upset_class()}} form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} form-button group-sm text-start">
                            <button class="{{z(class)|upset_class()}} button button-primary" type="submit">Send message</button>
                        </div>
                    </form>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <ul class="{{z(class)|upset_class()}} contact-list">
                        <li>
                            <p class="{{z(class)|upset_class()}} contact-list-title">地址</p>
                            <div class="{{z(class)|upset_class()}} contact-list-content">
                                <span class="{{z(class)|upset_class()}} icon novi-icon mdi mdi-map-marker icon-primary"></span>
                                <a href="{{host}}">{{z(address)}}</a>
                            </div>
                        </li>
                        <li>
                            <p class="{{z(class)|upset_class()}} contact-list-title">电话</p>
                            <div class="{{z(class)|upset_class()}} contact-list-content">
                                <span class="{{z(class)|upset_class()}} icon novi-icon mdi mdi-phone icon-primary"></span>
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </div>
                        </li>
                        <li>
                            <p class="{{z(class)|upset_class()}} contact-list-title">邮箱</p>
                            <div class="{{z(class)|upset_class()}} contact-list-content">
                                <span class="{{z(class)|upset_class()}} icon novi-icon mdi mdi-email-outline icon-primary"></span>
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </div>
                        </li>
                        <li>
                            <p class="{{z(class)|upset_class()}} contact-list-title">上班时间</p>
                            <div class="{{z(class)|upset_class()}} contact-list-content">
                                <span class="{{z(class)|upset_class()}} icon novi-icon mdi mdi-clock icon-primary"></span>
                                <ul class="{{z(class)|upset_class()}} list-xs">
                                    <li>礼拜一 - 礼拜六: 9 am – 6 pm</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>