{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} bg-dark-overlay section-bredcrumbs" style="background-image: url({{z(contact_banner_img)}})">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <h2 class="{{z(class)|upset_class()}} title">{{i(name)}}</h2>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Contacts Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-40 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6">
                    <div class="{{z(class)|upset_class()}} custom-wrapper">
                        <h3>给我们留言</h3>
                        <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="forms" method="post" action="{{host}}">
                            <div class="{{z(class)|upset_class()}} row justify-content-sm-center row-21">
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label" for="forms-name">First name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label" for="forms-last-name">Last name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-last-name" type="text" name="last-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label" for="forms-phone">Phone</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label" for="forms-email">E-mail</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label" for="forms-message">Message</label>
                                        <textarea class="{{z(class)|upset_class()}} form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} form-button">
                                <button class="{{z(class)|upset_class()}} button button-primary" type="submit">
                                    <span>Send</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-6">
                    <div class="{{z(class)|upset_class()}} row justify-content-sm-center row-30 row-xxl-76">
                        <div class="{{z(class)|upset_class()}} col-md-6">
                            <h4 class="{{z(class)|upset_class()}} fw-bold">找到我们</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <ul class="{{z(class)|upset_class()}} list-inline-2">
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-facebook" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-twitter" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-instagram" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-google" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-pinterest" href="{{host}}"></a>
                                </li>
                                <li>
                                    <a class="{{z(class)|upset_class()}} icon icon-xs icon icon-hover-gray fa-linkedin" href="{{host}}"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-6">
                            <h4 class="{{z(class)|upset_class()}} fw-bold">电话</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <div class="{{z(class)|upset_class()}} contact-item unit flex-row unit-spacing-xxs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-sm-1 icon-primary mdi mdi-phone"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-6">
                            <h4 class="{{z(class)|upset_class()}} fw-bold">地址</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <div class="{{z(class)|upset_class()}} contact-item unit flex-row unit-spacing-xxs">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-sm-1 icon-primary mdi mdi-map-marker"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="{{z(address)}}">{{z(address)}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} col-md-6">
                            <h4 class="{{z(class)|upset_class()}} fw-bold">邮箱</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <div class="{{z(class)|upset_class()}} contact-item unit flex-row unit-spacing-xxs align-items-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <span class="{{z(class)|upset_class()}} icon icon-sm-1 icon-primary mdi mdi-email-outline"></span>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <a class="{{z(class)|upset_class()}} hover-text" href="mailto:{{z(email)}}">{{z(email)}}</a>
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