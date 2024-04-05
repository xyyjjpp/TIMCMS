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
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} section-bredcrumbs section-bredcrumbs-2 bg-dark-overlay" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <div class="{{z(class)|upset_class()}} row justify-content-center">
                        <div class="{{z(class)|upset_class()}} col-md-10 col-lg-12 col-xl-10 col-xxl-9">
                            <p class="{{z(class)|upset_class()}} date">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            <h2 class="{{z(class)|upset_class()}} title">{{$article['title']}}</h2>
                            <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                                <li>
                                    <a href="{{host}}">首页</a>
                                </li>
                                <li>
                                    <a href="{{i(url)}}">{{i(name)}}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-40 justify-content-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-8 col-xl-6 offset-xl-1">
                    <article class="{{z(class)|upset_class()}} single-post">
                        <div class="{{z(class)|upset_class()}} post-section">
                            {{$article['content']}}
                        </div>
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,content}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div class="{{z(class)|upset_class()}} post-section">
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <div class="{{z(class)|upset_class()}} post-author unit unit-spacing-md flex-column flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="150" height="150">
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h5>
                                        <a class="{{z(class)|upset_class()}} heading-link" href="{{$prev['link']}}">{{$prev['title']}}</a>
                                    </h5>
                                    <p>{{$prev['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title,pic,content}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div class="{{z(class)|upset_class()}} post-section">
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <div class="{{z(class)|upset_class()}} post-author unit unit-spacing-md flex-column flex-md-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="150" height="150">
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body">
                                    <h5>
                                        <a class="{{z(class)|upset_class()}} heading-link" href="{{$next['link']}}">{{$next['title']}}</a>
                                    </h5>
                                    <p>{{$next['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                        {{/if}}
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-4 offset-xl-1">
                    <div class="{{z(class)|upset_class()}} widget-list">
                        <div class="{{z(class)|upset_class()}} widget-list-item">
                            <h4>搜索</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <form class="{{z(class)|upset_class()}} rd-search rd-blog-search rd-search-form rd-mailform-inline" action="{{host}}" method="GET" data-search-live="rd-search-results-live">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-search-form-input">Search...</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                </div>
                                <button class="{{z(class)|upset_class()}} icon mdi mdi-magnify" type="submit"></button>
                            </form>
                        </div>
                        <div class="{{z(class)|upset_class()}} widget-list-item">
                            <h4>导航</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            <ul class="{{z(class)|upset_class()}} list-marked list-2-colums">
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
                        <div class="{{z(class)|upset_class()}} widget-list-item">
                            <h4>最新资讯</h4>
                            <div class="{{z(class)|upset_class()}} divider divider-5"></div>
                            {{$set=array()}}
                            {{$set['cid']=0}}
                            {{$set['pagesize']=3}}
                            {{$set['column']=id,title,pic,shijian}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <article class="{{z(class)|upset_class()}} post-recent">
                                <div class="{{z(class)|upset_class()}} post-media">
                                    <a href="{{$a['link']}}">
                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="160" height="100">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} caption">
                                    <h5 class="{{z(class)|upset_class()}} post-title">
                                        <a class="{{z(class)|upset_class()}} heading-link" href="{{$a['link']}}">{{$a['title']}}</a>
                                    </h5>
                                    <div class="{{z(class)|upset_class()}} time">
                                        <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                </div>
                            </article>
                            {{/loop}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>