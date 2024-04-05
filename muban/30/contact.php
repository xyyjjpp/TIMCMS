{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark">
            <div class="{{z(class)|upset_class()}} container"><br><br><br>
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Contact Us</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position novi-bg novi-bg-img" style="background-image: url({{z(contact_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-bg novi-bg-img section-xl bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-sm-8 col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-contacts">
                        <div class="{{z(class)|upset_class()}} box-contacts-body">
                            <div class="{{z(class)|upset_class()}} box-contacts-icon novi-icon fl-bigmug-line-cellphone55"></div>
                            <div class="{{z(class)|upset_class()}} box-contacts-decor"></div>
                            <p class="{{z(class)|upset_class()}} box-contacts-link">
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-8 col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-contacts">
                        <div class="{{z(class)|upset_class()}} box-contacts-body">
                            <div class="{{z(class)|upset_class()}} box-contacts-icon novi-icon fl-bigmug-line-up104"></div>
                            <div class="{{z(class)|upset_class()}} box-contacts-decor"></div>
                            <p class="{{z(class)|upset_class()}} box-contacts-link">
                                <a href="{{host}}">{{z(address)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-8 col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-contacts">
                        <div class="{{z(class)|upset_class()}} box-contacts-body">
                            <div class="{{z(class)|upset_class()}} box-contacts-icon novi-icon fl-bigmug-line-chat55"></div>
                            <div class="{{z(class)|upset_class()}} box-contacts-decor"></div>
                            <p class="{{z(class)|upset_class()}} box-contacts-link">
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-bg novi-bg-img section-xl bg-default text-start">
        <div class="{{z(class)|upset_class()}} container">
            <article class="{{z(class)|upset_class()}} title-classic">
                <div class="{{z(class)|upset_class()}} title-classic-title">
                    <h3>给我们发送邮箱</h3>
                </div>
            </article>
            <form class="{{z(class)|upset_class()}} rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                <div class="{{z(class)|upset_class()}} row row-14 row-fix gutters-14">
                    <div class="{{z(class)|upset_class()}} col-md-4">
                        <div class="{{z(class)|upset_class()}} form-wrap">
                            <input class="{{z(class)|upset_class()}} form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-your-name-2">Your Name</label>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-md-4">
                        <div class="{{z(class)|upset_class()}} form-wrap">
                            <input class="{{z(class)|upset_class()}} form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-email-2">E-mail</label>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-md-4">
                        <div class="{{z(class)|upset_class()}} form-wrap">
                            <input class="{{z(class)|upset_class()}} form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-phone-2">Phone</label>
                        </div>
                    </div>
                    <div class="{{z(class)|upset_class()}} col-12">
                        <div class="{{z(class)|upset_class()}} form-wrap">
                            <label class="{{z(class)|upset_class()}} form-label" for="contact-message-2">Message</label>
                            <textarea class="{{z(class)|upset_class()}} form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                        </div>
                    </div>
                </div>
                <button class="{{z(class)|upset_class()}} button button-secondary button-pipaluk" type="submit">Send Message</button>
            </form>
        </div>
    </section>
{{file footer}}
</body>
</html>