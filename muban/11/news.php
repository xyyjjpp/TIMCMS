{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.default.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/default-theme.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page-wrapper">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="page-title" style="background-image:url({{z('news_banner_img')}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <h2 style="text-align: center;font-size: 52px;">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="bread-crumb clearfix">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Our News</li>
            </ul>
        </div>
    </section>
    <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-page-container">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="content-side col-md-8 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-classic">
                        {{$set=array()}}
                        {{$set['cid']=`cid}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,content,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="news-block-four">
                            <div data-app-id="{{z(class)|upset_class()}}" class="inner-box">
                                <a href="{{$a['link']}}">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="image">
                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                    </div>
                                </a>
                                <div data-app-id="{{z(class)|upset_class()}}" class="lower-box">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post-date">
                                        <i data-app-id="{{z(class)|upset_class()}}" class="far fa-calendar-alt"></i> {{$a['shijian']|date('Y-m-d H:i:s',this)}}
                                    </div>
                                    <h3>
                                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                                    </h3>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="text">{{$a['content']|text(150)}}...</div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="clearfix">
                                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="read-more">阅读 <span data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{/loop}}
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-side col-md-4 col-sm-12 col-xs-12">
                    <aside data-app-id="{{z(class)|upset_class()}}" class="sidebar right-sidebar">
                        <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-widget search-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-title">
                                <h2>搜索</h2>
                            </div>
                            <form method="post" action="{{host}}">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keyword..." required="">
                                    <button type="submit">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-widget categories-blog">
                            <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-title">
                                <h2>导航</h2>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="inner-box">
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
                    </aside>
                </div>
            </div>
        </div>
    </div>
{{file footer}}
</body>
</html>