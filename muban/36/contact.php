{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    <header class="{{z(class)|upset_class()}} page-header subpage_header">
        {{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2>{{i(name)}}</h2>
                    <p class="{{z(class)|upset_class()}} big"></p>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{z(contact_banner_img)}}">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-border">
        <ol class="{{z(class)|upset_class()}} breadcrumb">
            <li>
                <a href="{{host}}">首页</a>
            </li>
            <li class="{{z(class)|upset_class()}} active">Contact Us</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30">
                <div class="{{z(class)|upset_class()}} col-lg-4 text-center text-lg-start">
                    <address class="{{z(class)|upset_class()}} contact-block">
                        <dl>
                            <dt class="{{z(class)|upset_class()}} heading-6">地址</dt>
                            <dd>{{z(address)}}</dd>
                            <dt class="{{z(class)|upset_class()}} heading-6">工作时间</dt>
                            <dd>礼拜一 - 礼拜六: 8.00-18.00 Mon-Sat</dd>
                            <dt class="{{z(class)|upset_class()}} heading-6">电话</dt>
                            <dd>
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </dd>
                            <dt class="{{z(class)|upset_class()}} heading-6">邮箱</dt>
                            <dd>
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </dd>
                        </dl>
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-3">
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>
                    </address>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <div class="{{z(class)|upset_class()}} button-shadow py-5 px-3 round-large">
                        <h5 class="{{z(class)|upset_class()}} text-center">给我们发送邮件</h5>
                        <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                            <div class="{{z(class)|upset_class()}} row row-20 align-items-end">
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                        <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-name">First name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-name" type="text" name="name" placeholder="Your First Name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                        <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-last-name">Last name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-last-name" type="text" name="last-name" placeholder="Your Last Name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                        <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-message">Your message</label>
                                        <textarea class="{{z(class)|upset_class()}} form-input" id="forms-message" name="message" placeholder="Write your message here" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation validation-with-outside-label">
                                        <label class="{{z(class)|upset_class()}} form-label-outside" for="forms-email">E-mail</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-email" type="email" name="email" placeholder="example@domain.com" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <button class="{{z(class)|upset_class()}} button button-primary button-xs round-xl button-block form-el-offset-1" type="submit">提交</button>
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