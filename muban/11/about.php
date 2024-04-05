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
    <section data-app-id="{{z(class)|upset_class()}}" class="page-title" style="background-image:url({{z(about_banner_img)}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <h2 style="text-align: center;font-size: 52px;">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="bread-crumb clearfix">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">About Us</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="about-section-home">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="about-details col-md-12 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="inner-column">
                        <div data-app-id="{{z(class)|upset_class()}}" class="sec-title style-two">
                            <div data-app-id="{{z(class)|upset_class()}}" class="sub-title">About Us</div>
                            <h2>{{i(name,2)}}</h2>
                            <div data-app-id="{{z(class)|upset_class()}}" class="separator"></div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="text">
                            <p>{{z(about_text)}}</p>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="about-details-image col-md-6 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="image">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="faqs-section">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="faqs-title">
                <h3>常见的问题解答?</h3>
                <div data-app-id="{{z(class)|upset_class()}}" class="separator"></div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="column col-md-6">
                    <div data-app-id="{{z(class)|upset_class()}}" class="panel-group faq-accordion theme-accordion" id="accordion">
                        <div data-app-id="{{z(class)|upset_class()}}" class="panel panel-default">
                            <div data-app-id="{{z(class)|upset_class()}}" class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true"><?php echo explode_array('：',z('faq_text_1'),0) ?></a>
                            </div>
                            <div id="collapse-1" data-app-id="{{z(class)|upset_class()}}" class="panel-collapse collapse in">
                                <div data-app-id="{{z(class)|upset_class()}}" class="panel-body">
                                    <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="panel panel-default">
                            <div data-app-id="{{z(class)|upset_class()}}" class="panel-heading">
                                <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2"><?php echo explode_array('：',z('faq_text_2'),0) ?></a>
                            </div>
                            <div id="collapse-2" data-app-id="{{z(class)|upset_class()}}" class="panel-collapse collapse">
                                <div data-app-id="{{z(class)|upset_class()}}" class="panel-body">
                                    <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="panel panel-default">
                            <div data-app-id="{{z(class)|upset_class()}}" class="panel-heading">
                                <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3"><?php echo explode_array('：',z('faq_text_3'),0) ?></a>
                            </div>
                            <div id="collapse-3" data-app-id="{{z(class)|upset_class()}}" class="panel-collapse collapse">
                                <div data-app-id="{{z(class)|upset_class()}}" class="panel-body">
                                    <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="column col-md-6">
                    <div data-app-id="{{z(class)|upset_class()}}" class="panel-group faq-accordion theme-accordion" id="accordion2">
                        <div data-app-id="{{z(class)|upset_class()}}" class="panel panel-default">
                            <div data-app-id="{{z(class)|upset_class()}}" class="panel-heading">
                                <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse-6"><?php echo explode_array('：',z('faq_text_4'),0) ?></a>
                            </div>
                            <div id="collapse-6" data-app-id="{{z(class)|upset_class()}}" class="panel-collapse collapse">
                                <div data-app-id="{{z(class)|upset_class()}}" class="panel-body">
                                    <p><?php echo explode_array('：',z('faq_text_4'),1) ?></p>
                                </div>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="panel panel-default">
                            <div data-app-id="{{z(class)|upset_class()}}" class="panel-heading">
                                <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse-7"><?php echo explode_array('：',z('faq_text_5'),0) ?></a>
                            </div>
                            <div id="collapse-7" data-app-id="{{z(class)|upset_class()}}" class="panel-collapse collapse">
                                <div data-app-id="{{z(class)|upset_class()}}" class="panel-body">
                                    <p><?php echo explode_array('：',z('faq_text_5'),1) ?></p>
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