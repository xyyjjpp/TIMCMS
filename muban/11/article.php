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
    <section data-app-id="{{z(class)|upset_class()}}" class="page-title" style="background-image:url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <h2 style="text-align: center;font-size: 52px;">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="bread-crumb clearfix">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li>
                    <a href="{{i(url)}}">{{i(name)}}</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">{{$article['title']}}</li>
            </ul>
        </div>
    </section>
    <div data-app-id="{{z(class)|upset_class()}}" class="sidebar-page-container">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row clearfix">
                <div data-app-id="{{z(class)|upset_class()}}" class="content-side col-md-8 col-sm-12 col-xs-12">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-single">
                        <div data-app-id="{{z(class)|upset_class()}}" class="inner-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="lower-box">
                                <h2>{{$article['title']}}</h2>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-info">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="far fa-calendar-alt"></i> {{$article['shijian']|date('Y-m-d H:i:s',this)}}
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="text">
                                    {{$article['content']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="comments-area">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,shijian}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="author-thumb">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}">
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="comment-inner clearfix">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="comment-info clearfix">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-time">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</div>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="text">{{$prev['title']}}</div>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="comment-reply" href="{{$prev['link']}}">阅读 <span data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-double-right"></span>
                                    </a>
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
                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-box">
                            <div data-app-id="{{z(class)|upset_class()}}" class="comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="author-thumb">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}">
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="comment-inner clearfix">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="comment-info clearfix">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="comment-time">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</div>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="text">{{$next['title']}}</div>
                                    <a data-app-id="{{z(class)|upset_class()}}" class="comment-reply" href="{{$next['link']}}">阅读 <span data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-double-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{/if}}
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