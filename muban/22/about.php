{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css">
<link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="text-center">
        <section data-app-id="{{z(class)|upset_class()}}" class="section parallax-container" data-parallax-img="{{z(about_banner_img)}}">
            <div data-app-id="{{z(class)|upset_class()}}" class="parallax-content parallax-header parallax-light">
                <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__inner">
                    <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="container">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-sm-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-10 col-xl-8">
                                    <h2 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name)}}</h2>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="heading-6">About Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section-md bg-gray-lighter">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-md-center row-30 row-md-50">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-11 col-lg-10 col-xl-6">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name,2)}}</h4>
                    <span>About Us</span>
                    <p>{{z(about_text)}}</p>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-11 col-lg-10 col-xl-6">
                    <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section-md bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 text-center">
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">常见的问题解答?</h4>
                    <span>F A Q</span>
                </div>
            </div>
            <div id="accordion" role="tablist">
                <div data-app-id="{{z(class)|upset_class()}}" class="card card-custom">
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-heading" id="accordionHeading1" role="tab">
                        <h5 data-app-id="{{z(class)|upset_class()}}" class="card-custom-title">
                            <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1"><?php echo explode_array('：',z('faq_text_1'),0) ?></a>
                        </h5>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-collapse collapse" id="accordionCollapse1" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="accordionHeading1">
                        <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-body">
                            <p><?php echo explode_array('：',z('faq_text_1'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="card card-custom">
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-heading" id="accordionHeading2" role="tab">
                        <h5 data-app-id="{{z(class)|upset_class()}}" class="card-custom-title">
                            <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2"><?php echo explode_array('：',z('faq_text_2'),0) ?></a>
                        </h5>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-collapse collapse" id="accordionCollapse2" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="accordionHeading2">
                        <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-body">
                            <p><?php echo explode_array('：',z('faq_text_2'),1) ?></p>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="card card-custom">
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-heading" id="accordionHeading3" role="tab">
                        <h5 data-app-id="{{z(class)|upset_class()}}" class="card-custom-title">
                            <a data-app-id="{{z(class)|upset_class()}}" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3"><?php echo explode_array('：',z('faq_text_3'),0) ?></a>
                        </h5>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-collapse collapse" id="accordionCollapse3" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="accordionHeading3">
                        <div data-app-id="{{z(class)|upset_class()}}" class="card-custom-body">
                            <p><?php echo explode_array('：',z('faq_text_3'),1) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>