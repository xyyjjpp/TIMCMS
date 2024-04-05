{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{z(about_banner_img)}})">
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
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40">
                <div class="{{z(class)|upset_class()}} col-lg-6 col-xl-5">
                    <div class="{{z(class)|upset_class()}} entry-video ratio ratio-16x9">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}">
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-6 offset-xxl-1">
                    <h3>{{i(name,2)}}</h3>
                    <h6 class="{{z(class)|upset_class()}} text-regular">{{z(about_text)}}</h6>
                    <a class="{{z(class)|upset_class()}} button button-secondary" href="{{u(2)}}">了解我们</a>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm  context-dark" style="background-color: #0d66c2">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} row row-40">
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3">
                    <div class="{{z(class)|upset_class()}} counter-wrap counter-icon">
                        <div class="{{z(class)|upset_class()}} icon icon-md icon-white mdi mdi-calendar-check"></div>
                        <div class="{{z(class)|upset_class()}} heading-1">
                            <span class="{{z(class)|upset_class()}} counter" data-step="100000">60</span>
                        </div>
                        <h6 class="{{z(class)|upset_class()}} counter-description">多年经验</h6>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3">
                    <div class="{{z(class)|upset_class()}} counter-wrap counter-icon">
                        <div class="{{z(class)|upset_class()}} icon icon-md icon-white mdi mdi-account-multiple"></div>
                        <div class="{{z(class)|upset_class()}} heading-1">
                            <span class="{{z(class)|upset_class()}} counter" data-step="100000">3575</span>
                        </div>
                        <h6 class="{{z(class)|upset_class()}} counter-description">完成的项目</h6>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3">
                    <div class="{{z(class)|upset_class()}} counter-wrap counter-icon">
                        <div class="{{z(class)|upset_class()}} icon icon-md icon-white mdi mdi-fan"></div>
                        <div class="{{z(class)|upset_class()}} heading-1">
                            <span class="{{z(class)|upset_class()}} counter" data-step="100000">84049</span>
                        </div>
                        <h6 class="{{z(class)|upset_class()}} counter-description">忠实的客户</h6>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-3">
                    <div class="{{z(class)|upset_class()}} counter-wrap counter-icon">
                        <div class="{{z(class)|upset_class()}} icon icon-md icon-white mdi mdi-briefcase-check"></div>
                        <div class="{{z(class)|upset_class()}} heading-1">
                            <span class="{{z(class)|upset_class()}} counter" data-step="100000">28</span>
                        </div>
                        <h6 class="{{z(class)|upset_class()}} counter-description">获得的奖项</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>