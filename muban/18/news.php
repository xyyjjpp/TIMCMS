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
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome-area d-flex align-items-center" style="background-image: url('{{z(news_banner_img)}}')">
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
                                <span>Our News</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-area style-two pt-125 pb-70">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row pt-55">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic,content}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-single-blog">
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-thumb">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-meta-box">
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-title">
                            <a href="{{$a['link']}}">
                                <h3>{{$a['title']}}</h3>
                            </a>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-content-text">
                            <p>{{$a['content']|text(150)}}...</p>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-button">
                            <a href="{{$a['link']}}">阅读<span data-app-id="{{z(class)|upset_class()}}" class="flaticon-right-arrow-2"></span>
                            </a>
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