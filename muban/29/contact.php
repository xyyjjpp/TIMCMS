{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{z(contact_banner_img)}})">
        <div class="{{z(class)|upset_class()}} container-fluid context-dark">
            <div class="{{z(class)|upset_class()}} row g-0 justify-content-xl-center">
                <div class="{{z(class)|upset_class()}} col-xxl-10">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h2 class="{{z(class)|upset_class()}} decorative-title">{{i(name)}}</h2>
                    </div>
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
    <section class="{{z(class)|upset_class()}} section section-sm">
        <div class="{{z(class)|upset_class()}} container container-fluid">
            <div class="{{z(class)|upset_class()}} row row-60 g-xxl-0">
                <div class="{{z(class)|upset_class()}} col-lg-7 col-xl-6 offset-xxl-1">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h3 class="{{z(class)|upset_class()}} decorative-title">给我们留言</h3>
                        <form class="{{z(class)|upset_class()}} rd-mailform text-start" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                            <div class="{{z(class)|upset_class()}} row justify-content-center row-15">
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label form-label-outside" for="forms-name">First name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label form-label-outside" for="forms-last-name">Last name</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-last-name" type="text" name="last-name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label form-label-outside" for="forms-email">E-mail</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-6">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label form-label-outside" for="forms-phone">Phone</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} col-md-12">
                                    <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                        <label class="{{z(class)|upset_class()}} form-label form-label-outside" for="forms-message">Message</label>
                                        <textarea class="{{z(class)|upset_class()}} form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} form-button">
                                <button class="{{z(class)|upset_class()}} button button-secondary" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4 col-xl-5 col-xxl-3 offset-xl-1">
                    <div class="{{z(class)|upset_class()}} contact-box decorative decorative-md">
                        <h5 class="{{z(class)|upset_class()}} decorative-title">找到我们</h5>
                        <ul class="{{z(class)|upset_class()}} list-lg">
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon icon-xs icon-primary mdi mdi-map-marker"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} link-default" href="{{host}}">{{z(address)}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs align-items-center">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon icon-xs icon-primary mdi mdi-email-outline"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} link-default" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-xxs align-items-center">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon icon-xs icon-primary mdi mdi-phone"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <a class="{{z(class)|upset_class()}} link-default" href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>