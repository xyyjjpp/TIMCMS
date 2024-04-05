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
    <link rel="stylesheet" href="{{tempdir}}static/css/slick.css" type="text/css" media="screen">
    <link rel="stylesheet" href="{{tempdir}}static/css/slick-theme.css" type="text/css" media="screen">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-area" style="background-image: url('{{z(news_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row d-flex align-items-center">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content text-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-title">
                        <h2>{{i(name)}}</h2>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-content-text">
                        <ul>
                            <li>
                                <a href="{{host}}">首页</a>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-angle-double-right"></i>
                                <span>{{i(name)}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-list-area ">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['page']=page}}
                    {{$set['column']=id,title,shijian,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="single_blog style-three">
                            <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_thumb">
                                <a href="{{$a['link']}}">
                                    <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                </a>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_content">
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-categories">
                                    <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="blog_page_title">
                                    <h4>
                                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{/loop}}
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class=" col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="blog-left-side widget">
                    <div id="search-3" data-app-id="{{z(class)|upset_class()}}" class="widget widget_search">
                        <div data-app-id="{{z(class)|upset_class()}}" class="search">
                            <form action="{{host}}" method="get">
                                <input type="text" name="s" value="" placeholder="Search Here" title="Search for:">
                                <button type="submit" data-app-id="{{z(class)|upset_class()}}" class="icons">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="widget-sidebar-box-two">
                        <div data-app-id="{{z(class)|upset_class()}}" class="widget-sidebar-title text-left pb-20">
                            <h2>导航</h2>
                            <div data-app-id="{{z(class)|upset_class()}}" class="em_bar_bg text-left1"></div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="categories-content">
                            <ul>
                                {{$channels=c(0,999,0,1)}}
                                {{loop $channels as $channel}}
                                {{if $channel['cid']!=1}}
                                <li>
                                    <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                                </li>
                                {{/if}}
                                {{/loop}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>