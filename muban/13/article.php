{{$set=array()}}
{{$set['where']['id']=intval($_GET['id'])}}
{{$article=a($set)}}
{{if !$article}}
{{notfound()}}
{{/if}}
{{$editinfo=array()}}
{{$editinfo['id']=$article['id']}}
{{$editinfo['click']=$article['click']+1}}
{{$return=aedit($editinfo)}}
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
<div data-app-id="{{z(class)|upset_class()}}" class="breatcumb-area" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
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
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-single-blog-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="em-blog-content">
                                <div data-app-id="{{z(class)|upset_class()}}" class="blog-page-title">
                                    <h2>{{$article['title']}}</h2>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="meta-blog">
                                        <span> {{$article['shijian']|date('Y-m-d H:i:s',this)}} </span>
                                    </div>
                                    <br><br><br>
                                    {{$article['content']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,pic,shijian}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="single_blog style-three">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_thumb">
                                        <a href="{{$prev['link']}}">
                                            <img src="{{$prev['pic']}}" alt="{{$prev['title']}}">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_content">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="post-categories">
                                            <p>{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</p>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="blog_page_title">
                                            <h4>
                                                <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,pic,shijian}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-6 col-md-6 col-sm-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="single_blog style-three">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_thumb">
                                        <a href="{{$next['link']}}">
                                            <img src="{{$next['pic']}}" alt="{{$next['title']}}">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="single_blog_content">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="post-categories">
                                            <p>{{$next['shijian']|date('Y-m-d H:i:s',this)}}</p>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="blog_page_title">
                                            <h4>
                                                <a href="{{$next['link']}}">{{$next['title']}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                        </div>
                    </div>
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