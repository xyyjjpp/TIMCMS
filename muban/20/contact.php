{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" id="main-styles-link">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-inset">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">Contact Us</li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="box-position" style="background-image: url({{z(contact_banner_img)}});"></div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-md section-first bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30 justify-content-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-8 col-md-6 col-lg-4">
                    <article data-app-id="{{z(class)|upset_class()}}" class="box-contacts">
                        <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-body">
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-decor"></div>
                            <p data-app-id="{{z(class)|upset_class()}}" class="box-contacts-link">
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-8 col-md-6 col-lg-4">
                    <article data-app-id="{{z(class)|upset_class()}}" class="box-contacts">
                        <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-body">
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-icon fl-bigmug-line-up104"></div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-decor"></div>
                            <p data-app-id="{{z(class)|upset_class()}}" class="box-contacts-link">
                                <a href="{{host}}">{{z(address)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-8 col-md-6 col-lg-4">
                    <article data-app-id="{{z(class)|upset_class()}}" class="box-contacts">
                        <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-body">
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-icon fl-bigmug-line-chat55"></div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-contacts-decor"></div>
                            <p data-app-id="{{z(class)|upset_class()}}" class="box-contacts-link">
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-md section-last bg-default text-start">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <article data-app-id="{{z(class)|upset_class()}}" class="title-classic">
                <div data-app-id="{{z(class)|upset_class()}}" class="title-classic-title">
                    <h3>发送邮件</h3>
                </div>
            </article>
            <form data-app-id="{{z(class)|upset_class()}}" class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                <div data-app-id="{{z(class)|upset_class()}}" class="row row-14 gutters-14">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-your-name-2">Your Name</label>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-email-2">E-mail</label>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-4">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-phone-2">Phone</label>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-message-2">Message</label>
                            <textarea data-app-id="{{z(class)|upset_class()}}" class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                        </div>
                    </div>
                </div>
                <button data-app-id="{{z(class)|upset_class()}}" class="button button-primary button-pipaluk" type="submit">Send Message</button>
            </form>
        </div>
    </section>
{{file footer}}
</body>
</html>