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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark">
            <div class="{{z(class)|upset_class()}} container"><br><br><br>
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">{{$article['title']}}</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position novi-bg novi-bg-img" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-bg novi-bg-img section-xl bg-default text-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-70 row-fix">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <div class="{{z(class)|upset_class()}} blog-post">
                        <article class="{{z(class)|upset_class()}} post post-classic">
                            <h4 class="{{z(class)|upset_class()}} post-classic-title">{{$article['title']}}</h4>
                            <div class="{{z(class)|upset_class()}} post-classic-panel group-middle justify-content-start">
                                <div class="{{z(class)|upset_class()}} post-classic-time">
                                    <span class="{{z(class)|upset_class()}} novi-icon icon fa fa-clock-o"></span>
                                    <time datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </div>
                            {{$article['content']}}
                        </article>
                    </div>
                    <div class="{{z(class)|upset_class()}} blog-post-comments">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,shijian,content}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div class="{{z(class)|upset_class()}} box-comment">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-md flex-column flex-md-row align-items-lg-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a class="{{z(class)|upset_class()}} box-comment-figure" href="{{$prev['link']}}">
                                        <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="119" height="119">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <div class="{{z(class)|upset_class()}} group-sm group-justify">
                                        <div>
                                            <div class="{{z(class)|upset_class()}} group-sm group-middle">
                                                <p class="{{z(class)|upset_class()}} box-comment-author">{{$prev['title']}}</p>
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} box-comment-time">
                                            <time datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </div>
                                    </div>
                                    <p class="{{z(class)|upset_class()}} box-comment-text">{{$prev['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title,pic,shijian,content}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div class="{{z(class)|upset_class()}} box-comment">
                            <div class="{{z(class)|upset_class()}} unit unit-spacing-md flex-column flex-md-row align-items-lg-center">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a class="{{z(class)|upset_class()}} box-comment-figure" href="{{$next['link']}}">
                                        <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="119" height="119">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <div class="{{z(class)|upset_class()}} group-sm group-justify">
                                        <div>
                                            <div class="{{z(class)|upset_class()}} group-sm group-middle">
                                                <p class="{{z(class)|upset_class()}} box-comment-author">{{$next['title']}}</p>
                                            </div>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} box-comment-time">
                                            <time datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </div>
                                    </div>
                                    <p class="{{z(class)|upset_class()}} box-comment-text">{{$next['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                        {{/if}}
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} post-sidebar post-sidebar-inset">
                        <div class="{{z(class)|upset_class()}} row row-lg row-60 row-fix">
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12 post-sidebar-inner">
                                <div class="{{z(class)|upset_class()}} post-sidebar-item">
                                    <form class="{{z(class)|upset_class()}} rd-search form-search form-post-search" action="{{host}}" method="GET">
                                        <div class="{{z(class)|upset_class()}} form-wrap">
                                            <label class="{{z(class)|upset_class()}} form-label" for="search-form">搜索...</label>
                                            <input class="{{z(class)|upset_class()}} form-input" id="search-form" type="text" name="s" autocomplete="off">
                                            <button class="{{z(class)|upset_class()}} button-search fl-bigmug-line-search74" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="{{z(class)|upset_class()}} post-sidebar-item">
                                    <h5>导航</h5>
                                    <div class="{{z(class)|upset_class()}} post-sidebar-item-inset">
                                        <ul class="{{z(class)|upset_class()}} list list-categories">
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
                                <div class="{{z(class)|upset_class()}} post-sidebar-item">
                                    <h5>最新资讯</h5>
                                    <div class="{{z(class)|upset_class()}} post-sidebar-item-inset post-minimal-wrap">
                                        {{$set=array()}}
                                        {{$set['cid']=0}}
                                        {{$set['pagesize']=3}}
                                        {{$set['column']=id,title,pic}}
                                        {{$articles=alist($set)}}
                                        {{loop $articles['list'] as $a}}
                                        <article class="{{z(class)|upset_class()}} post post-minimal">
                                            <a class="{{z(class)|upset_class()}} post-minimal-figure" href="{{$a['link']}}">
                                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="232" height="138">
                                            </a>
                                            <p class="{{z(class)|upset_class()}} post-minimal-title">
                                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                                            </p>
                                        </article>
                                        {{/loop}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>