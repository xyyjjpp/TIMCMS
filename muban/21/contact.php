{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
</head>
<body>
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-inset-1 bg-default text-center bg-image background-position-1" id="home" style="background-image: url({{z(contact_banner_img)}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="title-style-1-wrap">
                <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop wow slideInLeft">
                    <h2 data-app-id="{{z(class)|upset_class()}}" class="title-style-1 wow slideInRight">{{i(name)}}</h2>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30 justify-content-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".1s">
                    <article data-app-id="{{z(class)|upset_class()}}" class="contacts-modern">
                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-icon fl-bigmug-line-cellphone55"></div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-list">
                            <li data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-link">
                                <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-4 wow blurIn">
                    <article data-app-id="{{z(class)|upset_class()}}" class="contacts-modern">
                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-icon fl-bigmug-line-up104"></div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-list">
                            <li data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-link">
                                <a href="{{host}}">{{z(address)}}</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-md-4 wow blurIn" data-wow-delay=".1s">
                    <article data-app-id="{{z(class)|upset_class()}}" class="contacts-modern">
                        <div data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-icon fl-bigmug-line-chat55"></div>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-list">
                            <li data-app-id="{{z(class)|upset_class()}}" class="contacts-modern-link">
                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>