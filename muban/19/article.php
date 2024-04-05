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
<div data-app-id="{{z(class)|upset_class()}}" class="breatcome_area" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
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
                                <span>{{i(name)}}</span>
                                <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                                <span>{{$article['title']}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog_area blog-grid blog-details-area" id="blog">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="row">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog_details">
                            <div data-app-id="{{z(class)|upset_class()}}" class="blog_dtl_content">
                                <h2>{{$article['title']}}</h2>
                                <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta-left">
                                                <span>
                                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-calendar"></i>{{$article['shijian']|date('Y-m-d H:i:s',this)}}
                                                </span>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="dreamit-blog-meta-right">
                                                <span>
                                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-thumbs-up"></i>{{$article['click']}}
                                                </span>
                                    </div>
                                </div>
                                {{$article['content']}}
                            </div>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-md-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog_comments_section">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,content,shijian,pic}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="single_comments">
                                <div data-app-id="{{z(class)|upset_class()}}" class="comments_thumb">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="80" height="80">
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="commentst_content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post_meta">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="badmin"><a href="{{$prev['link']}}">{{$prev['title']}}</a></span>
                                        <span data-app-id="{{z(class)|upset_class()}}" class="badmin">
                                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-clock-o"></i> {{$prev['shijian']|date('Y-m-d H:i:s',this)}}
                                                </span>
                                    </div>
                                    <p>{{$prev['content']|text(150)}}...</p>
                                </div>
                            </div>
                            <br><br>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,content,shijian,pic}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="single_comments">
                                <div data-app-id="{{z(class)|upset_class()}}" class="comments_thumb">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}"  width="80" height="80">
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="commentst_content">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post_meta">
                                        <span data-app-id="{{z(class)|upset_class()}}" class="badmin"><a href="{{$next['link']}}">{{$next['title']}}</a></span>
                                        <span data-app-id="{{z(class)|upset_class()}}" class="badmin">
                                                    <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-clock-o"></i> {{$next['shijian']|date('Y-m-d H:i:s',this)}}
                                                </span>
                                    </div>
                                    <p>{{$next['content']|text(150)}}...</p>
                                </div>
                            </div>
                            {{/if}}
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>