{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <div class="{{z(class)|upset_class()}} parallax-container">
        <div class="{{z(class)|upset_class()}} material-parallax">
            <img src="{{z(contact_banner_img)}}" alt="{{i(name)}}">
        </div>
        <div class="{{z(class)|upset_class()}} parallax-content red">
            <section class="{{z(class)|upset_class()}} breadcrumb-classic context-dark">
                <div class="{{z(class)|upset_class()}} shell section-35 section-lg-top-85 text-sm-left">
                    <h2 class="{{z(class)|upset_class()}} veil reveal-sm-block">{{i(name)}}</h2>
                    <div class="{{z(class)|upset_class()}} offset-lg-top-75 offset-sm-top-40">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-lg list-inline-dashed p">
                            <li>
                                <a class="{{z(class)|upset_class()}} text-light" href="{{host}}">首页</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} text-light">Contacts Us</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <main class="{{z(class)|upset_class()}} page-content">
        <section class="{{z(class)|upset_class()}} section-70 section-md-90 section-md-bottom-120">
            <div class="{{z(class)|upset_class()}} shell text-sm-left">
                <div class="{{z(class)|upset_class()}} range range-xs-center">
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-md-8">
                        <h2>给我们留言</h2>
                        <hr class="{{z(class)|upset_class()}} divider divider-lg bg-primary hr-sm-left-0">
                        <div class="{{z(class)|upset_class()}} offset-sm-top-55 offset-top-50">
                            <div class="{{z(class)|upset_class()}} range range-xs-center range-sm-left">
                                <div class="{{z(class)|upset_class()}} cell-sm-4">
                                    <div class="{{z(class)|upset_class()}} unit unit-sm unit-sm-horizontal text-sm-left">
                                        <div class="{{z(class)|upset_class()}} unit-left">
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs icon-primary fa-envelope-o offset-top-5"></span>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} unit-body">
                                            <h5>邮箱</h5>
                                            <div class="{{z(class)|upset_class()}} offset-top-10">
                                                <a class="{{z(class)|upset_class()}} text-primary text-light" href="mailto:{{z(email)}}">{{z(email)}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} cell-sm-8 offset-top-50 offset-sm-top-0">
                                    <div class="{{z(class)|upset_class()}} inset-sm-left-30">
                                        <div class="{{z(class)|upset_class()}} unit unit-sm unit-sm-horizontal text-sm-left">
                                            <div class="{{z(class)|upset_class()}} unit-left">
                                                <span class="{{z(class)|upset_class()}} icon icon-xs icon-primary fa-share-alt text-middle offset-top-5" style="font-size: 24px; line-height:24px;"></span>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} unit-body">
                                                <h5>找到我们</h5>
                                                <ul class="{{z(class)|upset_class()}} list-inline list-inline-dark list-inline-sm">
                                                    <li>
                                                        <a class="{{z(class)|upset_class()}} icon icon-xxs fa-facebook text-middle" href="{{host}}"></a>
                                                    </li>
                                                    <li>
                                                        <a class="{{z(class)|upset_class()}} icon icon-xxs fa-twitter text-middle" href="{{host}}"></a>
                                                    </li>
                                                    <li>
                                                        <a class="{{z(class)|upset_class()}} icon icon-xxs fa-pinterest text-middle" href="{{host}}"></a>
                                                    </li>
                                                    <li>
                                                        <a class="{{z(class)|upset_class()}} icon icon-xxs fa-vimeo text-middle" href="{{host}}"></a>
                                                    </li>
                                                    <li>
                                                        <a class="{{z(class)|upset_class()}} icon icon-xxs fa-google text-middle" href="{{host}}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} offset-sm-top-50 offset-top-65">
                            <h5>发送邮件</h5>
                        </div>
                        <div class="{{z(class)|upset_class()}} offset-top-30">
                            <form class="{{z(class)|upset_class()}} rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                                <div class="{{z(class)|upset_class()}} range range-narrow">
                                    <div class="{{z(class)|upset_class()}} cell-lg-6">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="contact-me-name">Your first name</label>
                                            <input class="{{z(class)|upset_class()}} form-control form-validation-inside" id="contact-me-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} cell-lg-6 offset-top-10 offset-lg-top-0">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="contact-me-phone">Your last name</label>
                                            <input class="{{z(class)|upset_class()}} form-control form-validation-inside" id="contact-me-phone" type="text" name="last-name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} cell-lg-12 offset-top-10">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="contact-me-email">Your e-mail</label>
                                            <input class="{{z(class)|upset_class()}} form-control form-validation-inside" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} cell-lg-12 offset-top-10">
                                        <div class="{{z(class)|upset_class()}} form-group">
                                            <label class="{{z(class)|upset_class()}} form-label" for="contact-me-message">Message</label>
                                            <textarea class="{{z(class)|upset_class()}} form-control form-validation-inside" id="contact-me-message" name="message" data-constraints="@Required" style="height: 160px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{z(class)|upset_class()}} text-center text-lg-left offset-top-10">
                                    <button class="{{z(class)|upset_class()}} btn btn-sm btn-primary" type="submit">send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{{file footer}}
</body>
</html>