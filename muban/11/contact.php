{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.default.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/default-theme.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page-wrapper">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="page-title" style="background-image:url({{z(contact_banner_img)}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <h2 style="text-align: center;font-size: 52px;">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="bread-crumb clearfix">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="contact-section">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="form-column col-md-7 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="column-inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="form-title">
                            <h2>留言</h2>
                            <div data-app-id="{{z(class)|upset_class()}}" class="separator"></div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="text">给我们留言获取最新咨询以及优惠详情!</div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="contact-form">
                            <form id="contact-form" action="{{host}}" method="post">
                                <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class=" col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button data-app-id="{{z(class)|upset_class()}}" class="theme-btn btn-style-one" type="submit" name="submit-form">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="info-column col-md-5 col-sm-12 col-xs-12">
                    <ul data-app-id="{{z(class)|upset_class()}}" class="list-style-two">
                        <li>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-symbol"></span>
                            <div data-app-id="{{z(class)|upset_class()}}" class="info-featured">
                                <a href="mailto:{{z(email)}}" >{{z(email)}}</a>
                            </div>
                        </li>
                        <li>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-smartphone"></span>
                            <div data-app-id="{{z(class)|upset_class()}}" class="info-featured">{{z(phone)}}</div>
                        </li>
                        <li>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-placeholder"></span>
                            <div data-app-id="{{z(class)|upset_class()}}" class="text-info">地址</div>
                            <h3>{{z(address)}}</h3>
                        </li>
                        <li>
                            <span data-app-id="{{z(class)|upset_class()}}" class="icon flaticon-clock-1"></span>
                            <div data-app-id="{{z(class)|upset_class()}}" class="text-info">工作时间</div>
                            <h3>周一至周五
                                09:00 至 18:00</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>