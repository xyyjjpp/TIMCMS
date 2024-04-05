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
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">{{$article['title']}}</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-lg bg-gray-100">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-single">
                        <div data-app-id="{{z(class)|upset_class()}}" class="post-single-body">
                            <h4>{{$article['title']}}</h4>
                            <hr>
                            <br>
                            {{$article['content']}}
                            <ul data-app-id="{{z(class)|upset_class()}}" class="post-single-meta">
                                <li>
                                    <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline">
                                        <li>
                                            <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-clock novi-icon"></span>
                                            <a>{{$article['shijian']|date('Y-m-d H:i:s',this)}}</a>
                                        </li>
                                        <li>
                                            <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-thumb-up-outline novi-icon"></span>
                                            <a>{{$article['click']}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-related">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row row-20">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,pic,shijian,click}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                <article data-app-id="{{z(class)|upset_class()}}" class="news-recent">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="news-recent-image">
                                        <a href="{{$prev['link']}}">
                                            <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="736" height="464">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="news-recent-body">
                                        <h5 data-app-id="{{z(class)|upset_class()}}" class="news-recent-title">
                                            <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                        </h5>
                                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline-divided">
                                            <li>
                                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-clock novi-icon"></span>
                                                <a>{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</a>
                                            </li>
                                            <li>
                                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-thumb-up-outline novi-icon"></span>
                                                <a>{{$prev['click']}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,pic,shijian,click}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6">
                                <article data-app-id="{{z(class)|upset_class()}}" class="news-recent">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="news-recent-image">
                                        <a href="{{$next['link']}}">
                                            <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="736" height="464">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="news-recent-body">
                                        <h5 data-app-id="{{z(class)|upset_class()}}" class="news-recent-title">
                                            <a href="{{$next['link']}}">{{$next['title']}}</a>
                                        </h5>
                                        <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline-divided">
                                            <li>
                                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-clock novi-icon"></span>
                                                <a>{{$next['shijian']|date('Y-m-d H:i:s',this)}}</a>
                                            </li>
                                            <li>
                                                <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-thumb-up-outline novi-icon"></span>
                                                <a>{{$next['click']}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            {{/if}}
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-single-sidebar">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row row-30 row-xl-60">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-single-sidebar-item post-single-sidebar-item-no-padding">
                                    <form data-app-id="{{z(class)|upset_class()}}" class="rd-search" action="{{host}}" method="GET">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="rd-sidebar-search">Search the blog...</label>
                                            <input data-app-id="{{z(class)|upset_class()}}" class="rd-sidebar-search form-input" id="rd-sidebar-search" type="text" name="s" autocomplete="off">
                                            <button data-app-id="{{z(class)|upset_class()}}" class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-single-sidebar-item text-center">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post-minimal-wrap">
                                        {{$set=array()}}
                                        {{$set['cid']=0}}
                                        {{$set['pagesize']=3}}
                                        {{$set['column']=id,title,pic,shijian}}
                                        {{$articles=alist($set)}}
                                        {{loop $articles['list'] as $a}}
                                        <a data-app-id="{{z(class)|upset_class()}}" class="post-minimal" href="{{$a['link']}}">
                                            <span data-app-id="{{z(class)|upset_class()}}" class="post-minimal-image">
                                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="92" height="78">
                                            </span>
                                            <span data-app-id="{{z(class)|upset_class()}}" class="post-minimal-body">
                                                <span data-app-id="{{z(class)|upset_class()}}" class="post-minimal-title">{{$a['title']}}</span>
                                                <span data-app-id="{{z(class)|upset_class()}}" class="post-minimal-time">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                            </span>
                                        </a>
                                        {{/loop}}
                                    </div>
                                </div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-single-sidebar-item">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post-single-newsletter">
                                        <h5>订阅邮箱</h5>
                                        <form data-app-id="{{z(class)|upset_class()}}" class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                                            <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                                <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                                                <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="subscribe-form-email">Your e-mail address...</label>
                                            </div>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="form-button">
                                                <button data-app-id="{{z(class)|upset_class()}}" class="button button-block button-gray-600" type="submit">Subscribe</button>
                                            </div>
                                        </form>
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