{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
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
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-area d-flex align-items-center" style="background-image: url('{{z(works_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-right"></i>
                                <span>Our Product</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="portfolio_area pt-100 pb-80" id="portfolio">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row image_load">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12 grid-item physics cemes">
                <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio">
                    <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio_inner">
                        <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio_thumb">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                            <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio_content">
                                <h3>
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h3>
                                <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                            </div>
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