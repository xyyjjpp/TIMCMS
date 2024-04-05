{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css" id="main-styles-link">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Contact Us</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position" style="background-image: url({{z(contact_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm section-first bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-sm-8 col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-contacts">
                        <div class="{{z(class)|upset_class()}} box-contacts-body">
                            <div class="{{z(class)|upset_class()}} box-contacts-icon fl-bigmug-line-cellphone55"></div>
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
                            <div class="{{z(class)|upset_class()}} box-contacts-icon fl-bigmug-line-up104"></div>
                            <div class="{{z(class)|upset_class()}} box-contacts-decor"></div>
                            <p class="{{z(class)|upset_class()}} box-contacts-link">
                                <a href="/">{{z(address)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-sm-8 col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} box-contacts">
                        <div class="{{z(class)|upset_class()}} box-contacts-body">
                            <div class="{{z(class)|upset_class()}} box-contacts-icon fl-bigmug-line-chat55"></div>
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
    <section class="{{z(class)|upset_class()}} section section-sm section-last bg-default text-left">
        <div class="{{z(class)|upset_class()}} container">
            <article class="{{z(class)|upset_class()}} title-classic">
                <div class="{{z(class)|upset_class()}} title-classic-title">
                    <h3>现在就联系我们</h3>
                </div>
            </article>
            <form class="{{z(class)|upset_class()}} rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="{{z(class)|upset_class()}} row row-14 gutters-14">
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