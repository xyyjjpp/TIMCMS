{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section parallax-container context-dark" data-parallax-img="{{z(contact_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content parallax-header">
            <div class="{{z(class)|upset_class()}} parallax-header__inner context-dark">
                <div class="{{z(class)|upset_class()}} parallax-header__content">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-sm-center">
                            <div class="{{z(class)|upset_class()}} col-md-10 col-xl-8">
                                <h2 class="{{z(class)|upset_class()}} heading-decorated">{{i(name)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-default decor-text" data-content="Contact">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50">
                <div class="{{z(class)|upset_class()}} col-md-5 col-lg-4">
                    <h4 class="{{z(class)|upset_class()}} heading-decorated">联系方式</h4>
                    <ul class="{{z(class)|upset_class()}} list-sm contact-info">
                        <li>
                            <dl class="{{z(class)|upset_class()}} list-terms-inline">
                                <dt>地址</dt>
                                <dd>{{z(address)}}</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="{{z(class)|upset_class()}} list-terms-inline">
                                <dt>电话</dt>
                                <dd>
                                    <ul class="{{z(class)|upset_class()}} list-semicolon">
                                        <li>
                                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <ul class="{{z(class)|upset_class()}} list-inline-sm">
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-facebook icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-twitter icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-google-plus icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-vimeo icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-youtube icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon-sm fa-pinterest-p icon" href="{{host}}"></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-7 col-lg-8">
                    <h4 class="{{z(class)|upset_class()}} heading-decorated">给我发送邮件</h4>
                    <form class="{{z(class)|upset_class()}} rd-mailform rd-mailform_style-1 form-shadow" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap_icon linear-icon-man">
                            <input class="{{z(class)|upset_class()}} form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-name">Your name</label>
                        </div>
                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap_icon linear-icon-envelope">
                            <input class="{{z(class)|upset_class()}} form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-email">Your e-mail</label>
                        </div>
                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap_icon linear-icon-feather">
                            <textarea class="{{z(class)|upset_class()}} form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-message">Your message</label>
                        </div>
                        <button class="{{z(class)|upset_class()}} button button-primary button-shadow" type="submit">send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>