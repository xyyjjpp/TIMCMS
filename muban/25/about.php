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
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(about_banner_img)}});">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">About Us</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section bg-default section-lg">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-5">
                    <div data-app-id="{{z(class)|upset_class()}}" class="about-info">
                        <h2>{{i(name,2)}}</h2>
                        <p>About Us</p>
                        <p>{{z(about_text)}}</p>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-7">
                    <div data-app-id="{{z(class)|upset_class()}}" class="video" data-lightgallery="group">
                        <img src="{{z(about_img)}}" alt="{{i(name,2)}}" width="668" height="409">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section bg-gray-100 bg-triangle">
        <div data-app-id="{{z(class)|upset_class()}}" class="bg-triangle-item"></div>
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-5">
                    <img src="{{tempdir}}assets/picture/download-02-298x397.png">
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                    <div data-app-id="{{z(class)|upset_class()}}" class="section-lg">
                        <h3 data-app-id="{{z(class)|upset_class()}}" class="text-uppercase">现在联系我们可以获得最大优惠力度哦</h3>
                        <ul data-app-id="{{z(class)|upset_class()}}" class="button-group">
                            <li>
                                <a data-app-id="{{z(class)|upset_class()}}" class="button button-secondary-light" href="{{u(6)}}">{{i(name,6)}}</a>
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