{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(contact_banner_img)}});">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-lg bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-md-center row-30">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8">
                    <div data-app-id="{{z(class)|upset_class()}}" class="block-md text-center">
                        <h3>发送邮件</h3>
                        <form data-app-id="{{z(class)|upset_class()}}" class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row row-20">
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                        <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                        <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-name">Your Name</label>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                        <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                                        <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-phone">Phone</label>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                        <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-message">Your Message</label>
                                        <textarea data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                        <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                    <button data-app-id="{{z(class)|upset_class()}}" class="button button-block button-secondary-light" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="contact-box-wrap">
                        <div data-app-id="{{z(class)|upset_class()}}" class="contact-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-box-item">
                                <p data-app-id="{{z(class)|upset_class()}}" class="contact-box-title">媒体</p>
                                <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline">
                                    <li>
                                        <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-gray-500 fa-facebook-f novi-icon" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-gray-500 fa-twitter novi-icon" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-gray-500 fa-google novi-icon" href="{{host}}"></a>
                                    </li>
                                    <li>
                                        <a data-app-id="{{z(class)|upset_class()}}" class="icon icon-lg icon-gray-500 fa-youtube novi-icon" href="{{host}}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-box-item">
                                <p data-app-id="{{z(class)|upset_class()}}" class="contact-box-title">电话</p>
                                <div data-app-id="{{z(class)|upset_class()}}" class="link-inline">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-primary-light material-icons-local_phone novi-icon"></span>
                                    <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-box-item">
                                <p data-app-id="{{z(class)|upset_class()}}" class="contact-box-title">邮箱</p>
                                <div data-app-id="{{z(class)|upset_class()}}" class="link-inline">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-primary-light mdi-email-outline novi-icon"></span>
                                    <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="contact-box-item">
                                <p data-app-id="{{z(class)|upset_class()}}" class="contact-box-title">地址</p>
                                <div data-app-id="{{z(class)|upset_class()}}" class="link-inline link-inline-top">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xl icon-primary-light material-icons-location_on novi-icon"></span>
                                    <a href="{{host}}">{{z(address)}}</a>
                                </div>
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