{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/widget.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome-area d-flex align-items-center" style="background-image: url('{{z(works_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                                <span>Our Portfolio</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="portfolio_area  pt-80 pb-70" id="portfolio">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row image_load">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12 grid-item branding portfolio">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-single-portfolio">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-portfolio-thumb">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-forfolio-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="fortfolio-addrees">
                            <ul>
                                <li>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="fortfolio-addrees venobox vbox-item" data-gall="myportfolio" href="{{$a['pic']}}">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-image"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$a['link']}}">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        <div data-app-id="{{z(class)|upset_class()}}" class="fortfolio-title">
                            <h3>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>