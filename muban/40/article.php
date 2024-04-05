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
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} preloader-body">
        <div class="{{z(class)|upset_class()}} cssload-container">
            <div class="{{z(class)|upset_class()}} cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-page-title novi-bg novi-bg-img" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}); background-size: cover;">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} page-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li>
                    <a href="{{i(url)}}">{{i(name)}}</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">{{$article['title']}}</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <div class="{{z(class)|upset_class()}} single-post-content">
                        <h4>{{$article['title']}}</h4>
                        <ul class="{{z(class)|upset_class()}} post-meta-list">
                            <li class="{{z(class)|upset_class()}} time">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</li>
                        </ul>
                        {{$article['content']}}
                    </div>
                    {{$prevset=array()}}
                    {{$prevset['column']=id,title,pic,content}}
                    {{$prevset['order']=id desc}}
                    {{$prevset['other']=`"id<".$article['id']}}
                    {{$prev=a($prevset)}}
                    {{if $prev}}
                    <div class="{{z(class)|upset_class()}} single-post-author">
                        <div class="{{z(class)|upset_class()}} single-post-author-img">
                            <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="115" height="115">
                        </div>
                        <div class="{{z(class)|upset_class()}} single-post-author-content">
                            <h5><a href="{{$prev['link']}}">{{$prev['title']}}</a></h5>
                            <p>{{$prev['content']|text(100)}}...</p>
                        </div>
                    </div>
                    {{/if}}
                    {{$nextset=array()}}
                    {{$nextset['column']=id,title,pic,content}}
                    {{$nextset['other']=`"id>".$article['id']}}
                    {{$nextset['order']=id asc}}
                    {{$next=a($nextset)}}
                    {{if $next}}
                    <div class="{{z(class)|upset_class()}} single-post-author">
                        <div class="{{z(class)|upset_class()}} single-post-author-img">
                            <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="115" height="115">
                        </div>
                        <div class="{{z(class)|upset_class()}} single-post-author-content">
                            <h5><a href="{{$next['link']}}">{{$next['title']}}</a></h5>
                            <p>{{$next['content']|text(100)}}...</p>
                        </div>
                    </div>
                    {{/if}}
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} blog-aside-list">
                        <div class="{{z(class)|upset_class()}} blog-aside-list-item">
                            <h4 class="{{z(class)|upset_class()}} blog-aside-list-item-title">搜索</h4>
                            <form class="{{z(class)|upset_class()}} rd-search" action="{{host}}" method="GET" data-search-live="rd-search-results-live">
                                <div class="{{z(class)|upset_class()}} form-wrap">
                                    <label class="{{z(class)|upset_class()}} form-label" for="rd-search-form-input">搜索...</label>
                                    <input class="{{z(class)|upset_class()}} form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                    <button class="{{z(class)|upset_class()}} icon mdi mdi-magnify" type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <div class="{{z(class)|upset_class()}} blog-aside-list-item">
                            <h4 class="{{z(class)|upset_class()}} blog-aside-list-item-title">导航</h4>
                            <ul class="{{z(class)|upset_class()}} list-marked list-two-column">
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
                        <div class="{{z(class)|upset_class()}} blog-aside-list-item">
                            <h4 class="{{z(class)|upset_class()}} blog-aside-list-item-title">最新资讯</h4>
                            {{$set=array()}}
                            {{$set['cid']=0}}
                            {{$set['pagesize']=6}}
                            {{$set['column']=id,title,shijian}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <div class="{{z(class)|upset_class()}} blog-aside-post">
                                <h5>
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h5>
                                <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            </div>
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