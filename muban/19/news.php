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
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome_area" style="background-image: url('{{z(news_banner_img)}}')">
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
                                <span>Our News</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog_area blog-grid" id="blog">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class=" col-lg-4 col-md-4 col-sm-5 col-xs-12 sidebar-right content-widget pdsr">
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-left-side widget">
                    <div id="search-3" data-app-id="{{z(class)|upset_class()}}" class="widget widget_search">
                        <div data-app-id="{{z(class)|upset_class()}}" class="search">
                            <form action="{{host}}" method="get">
                                <input type="text" name="s" value="" placeholder="Type Your Keyword" title="Search for:">
                                <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="icons">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div id="categories-3" data-app-id="{{z(class)|upset_class()}}" class="widget widget_categories">
                        <h2 data-app-id="{{z(class)|upset_class()}}" class="widget-title">导航</h2>
                        <ul>
                            {{$channels=c(0,999,0,1)}}
                            {{loop $channels as $channel}}
                            {{if $channel['cid']!=1}}
                            <li data-app-id="{{z(class)|upset_class()}}" class="cat-item cat-item-11">
                                <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                            </li>
                            {{/if}}
                            {{/loop}}
                        </ul>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic,content,click}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12 col-sm-12-col-xs-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-single-blog ">
                            <div data-app-id="{{z(class)|upset_class()}}" class="blog_thumb_inner">
                                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-thumb ">
                                    <a href="{{$a['link']}}">
                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                    </a>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="blog_icon">
                                        <a href="{{$a['link']}}">
                                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="em-blog-content-area ">
                                <div data-app-id="{{z(class)|upset_class()}}" class="blog-page-title ">
                                    <h2>
                                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                                    </h2>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="blog_description">
                                    <p>{{$a['content']|text(150)}}...</p>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta">
                                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta-left">
                                            <span>
                                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-calendar"></i>{{$a['shijian']|date('Y-m-d H:i:s',this)}}
                                            </span>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta-right">
                                            <span>
                                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-thumbs-up"></i>{{$a['click']}}
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{/loop}}
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>