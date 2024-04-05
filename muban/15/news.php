{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-area d-flex align-items-center" style="background-image: url('{{z(news_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="brpt text-center">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li>Our News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-section">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-items">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-thumb">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta-top">
                        <span>
                                    <i data-app-id="{{z(class)|upset_class()}}" class="far fa-calendar-check"></i> {{$a['shijian']|date('Y-m-d H:i:s',this)}}
                                </span>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-content">
                        <h2>
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-btn">
                        <a href="{{$a['link']}}">
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-double-right"></i>
                        </a>
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