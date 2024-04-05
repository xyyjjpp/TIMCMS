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
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">About Us</li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="box-position" style="background-image: url({{z(about_banner_img)}});"></div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-md section-first bg-default text-md-start">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 text-center wow fadeInUp">
                    <div data-app-id="{{z(class)|upset_class()}}" class="figure-classic figure-classic-left">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                    <div data-app-id="{{z(class)|upset_class()}}" class="box-width-lg-470">
                        <h3>{{i(name,2)}}</h3>
                        <div data-app-id="{{z(class)|upset_class()}}" class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-start" id="tabs-7">
                            <div data-app-id="{{z(class)|upset_class()}}" class="tab-content">
                                <div data-app-id="{{z(class)|upset_class()}}" class="tab-pane fade show active" id="tabs-7-1">
                                    <p>{{z(about_text)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-lg bg-gray-4">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h3 data-app-id="{{z(class)|upset_class()}}" class="wow fadeInLeft">用户评价</h3>
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-xxl row-70 justify-content-center">
                <?php for ($i=1; $i<=3; $i++) {?>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight">
                        <article data-app-id="{{z(class)|upset_class()}}" class="quote-creative">
                            <a data-app-id="{{z(class)|upset_class()}}" class="quote-creative-figure">
                                <img data-app-id="{{z(class)|upset_class()}}" class="img-circles" src="<?php echo explode_array('||',z('ask_all_'.$i),0) ?>" alt="<?php echo explode_array('||',z('ask_all_'.$i),1) ?>" width="87" height="87">
                            </a>
                            <div data-app-id="{{z(class)|upset_class()}}" class="quote-creative-text">
                                <p data-app-id="{{z(class)|upset_class()}}" class="q"><?php echo explode_array('||',z('ask_all_'.$i),2) ?></p>
                            </div>
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="quote-creative-cite">
                                <p><?php echo explode_array('||',z('ask_all_'.$i),1) ?></p>
                            </h5>
                        </article>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>