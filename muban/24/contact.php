{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="page">
{{file header}}
    <div class="section page-header breadcrumbs-custom-wrap bg-image bg-image-9" style="background-image: url('{{z(contact_banner_img)}}')">
        <section class="breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="container">
                <p class="heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="active">Contacts Us</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-ten row-50 justify-content-md-center justify-content-xl-between">
                <div class="col-md-9 col-lg-6">
                    <h3>发送邮件</h3>
                    <hr class="divider divider-left divider-default">
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                        <div class="row row-20 row-fix">
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-name">First name</label>
                                    <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-last-name">Last name</label>
                                    <input class="form-input" id="form-1-last-name" type="text" name="last-name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-email">E-mail</label>
                                    <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-phone">Phone</label>
                                    <input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label-outside" for="form-1-message">Message</label>
                                    <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 offset-custom-4">
                                <div class="form-button">
                                    <button class="button button-primary" type="submit">Send message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-4 col-xl-3">
                    <div class="column-aside">
                        <div class="row">
                            <div class="col-sm-10 col-md-6 col-lg-12">
                                <h6>地址</h6>
                                <hr class="divider-thin">
                                <article class="box-inline">
                                    <span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                                    <span>
                                                <a href="{{host}}">{{z(address)}}</a>
                                            </span>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-12">
                                <h6>电话</h6>
                                <hr class="divider-thin">
                                <article class="box-inline">
                                    <span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                                    <ul class="list-comma">
                                        <li>
                                            <a href="tel:{{z(phone)}}">{{z(phone)}}</a>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-12">
                                <h6>邮箱</h6>
                                <hr class="divider-thin">
                                <article class="box-inline">
                                    <span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span>
                                    <span>
                                                <a href="mailto:{{z(email)}}">{{z(email)}}</a>
                                            </span>
                                </article>
                            </div>
                            <div class="col-sm-10 col-md-6 col-lg-12">
                                <h6>上班时间</h6>
                                <hr class="divider-thin">
                                <article class="box-inline">
                                    <span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-calendar-clock"></span>
                                    <ul class="list-0">
                                        <li>周一 - 周六 早上八点至下午6点</li>
                                    </ul>
                                </article>
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