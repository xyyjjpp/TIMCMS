{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="text-center">
        <section data-app-id="{{z(class)|upset_class()}}" class="section parallax-container" data-parallax-img="{{z(contact_banner_img)}}">
            <div data-app-id="{{z(class)|upset_class()}}" class="parallax-content parallax-header parallax-light">
                <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__inner">
                    <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="container">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-sm-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-10 col-xl-8">
                                    <h2 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name)}}</h2>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="heading-6">Contact Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section-md bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-50">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-5 col-lg-4">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name)}}</h4>
                    <ul data-app-id="{{z(class)|upset_class()}}" class="list-sm contact-info">
                        <li>
                            <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-inline">
                                <dt>地址</dt>
                                <dd>{{z(address)}}</dd>
                            </dl>
                        </li>
                        <li>
                            <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-inline">
                                <dt>电话</dt>
                                <dd>
                                    <ul data-app-id="{{z(class)|upset_class()}}" class="list-semicolon">
                                        <li>
                                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl data-app-id="{{z(class)|upset_class()}}" class="list-terms-inline">
                                <dt>工作时间</dt>
                                <dd>周一至周五：上午 10 点至晚上 8 点</dd>
                            </dl>
                        </li>
                        <li>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline-sm">
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-facebook novi-icon icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-twitter novi-icon icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-google-plus novi-icon icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-vimeo novi-icon icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-youtube novi-icon icon" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="icon-sm fa-pinterest-p novi-icon icon" href="{{host}}"></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-7 col-lg-8">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">Push Email</h4>
                    <form data-app-id="{{z(class)|upset_class()}}" class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap form-wrap_icon linear-icon-man">
                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-name">Your name</label>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap form-wrap_icon linear-icon-envelope">
                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-email">Your e-mail</label>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap form-wrap_icon linear-icon-feather">
                            <textarea data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-message">Your message</label>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap form-validation-left">
                            <div data-app-id="{{z(class)|upset_class()}}" class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt" data-auto-size=""></div>
                        </div>
                        <button data-app-id="{{z(class)|upset_class()}}" class="button button-primary" type="submit">send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>