{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/elements.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/themify-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/widget.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/unittest.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
    <script type="text/javascript" src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome_area" style="background-image: url('{{z(works_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container-fluid">
        <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
            <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_title">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_title_inner">
                    <h2>{{i(name)}}</h2>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcome_content">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                                <span>Our Portfolio</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="portfolio_area portfolio_style_one gutter_less portfolio-pages" id="about">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row prot_image_load">
            <div data-app-id="{{z(class)|upset_class()}}" class="gallery_items">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 physics  col-sm-6 col-xs-12 grid-item">
                    <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio">
                        <div data-app-id="{{z(class)|upset_class()}}" class="single_portfolio_thumb">
                            <a href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                            </a>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="portfolio_content">
                            <h2>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h2>
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>