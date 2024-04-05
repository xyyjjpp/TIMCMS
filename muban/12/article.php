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
    <script src="{{tempdir}}static/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css-Poppins3004005006007007CLato7CKalam300400700.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container"></div>
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-body context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-12 col-md-5">
                        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-left"></div>
                        <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-footer">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>
                        <a href="{{i(url)}}">{{i(name)}}</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">{{$article['title']}}</li>
                </ul>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default text-md-start">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 row-md-60">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8 col-xl-9">
                    <div data-app-id="{{z(class)|upset_class()}}" class="inset-xl-right-100">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 row-md-60 row-lg-80">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                                <article data-app-id="{{z(class)|upset_class()}}" class="post post-modern box-xxl">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post-modern-panel">
                                        <div>
                                            <a data-app-id="{{z(class)|upset_class()}}" class="post-modern-tag" href="{{i(url)}}">{{i(name)}}</a>
                                        </div>
                                        <div>
                                            <time data-app-id="{{z(class)|upset_class()}}" class="post-modern-time" datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </div>
                                    </div>
                                    <h3 data-app-id="{{z(class)|upset_class()}}" class="post-modern-title">{{$article['title']}}</h3>
                                    {{$article['content']}}
                                </article>
                                <div data-app-id="{{z(class)|upset_class()}}" class="single-post-bottom-panel"></div>
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                                    {{$prevset=array()}}
                                    {{$prevset['column']=id,title,pic,content,shijian}}
                                    {{$prevset['order']=id desc}}
                                    {{$prevset['other']=`"id<".$article['id']}}
                                    {{$prev=a($prevset)}}
                                    {{if $prev}}
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6">
                                        <article data-app-id="{{z(class)|upset_class()}}" class="post post-classic box-md">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="post-classic-figure" href="{{$prev['link']}}">
                                                <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="370" height="239">
                                            </a>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-content">
                                                <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-time">
                                                    <time datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                </div>
                                                <h5 data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">
                                                    <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                                </h5>
                                                <p data-app-id="{{z(class)|upset_class()}}" class="post-classic-text">{{$prev['content']|text(150)}}...</p>
                                            </div>
                                        </article>
                                    </div>
                                    {{/if}}
                                    {{$nextset=array()}}
                                    {{$nextset['column']=id,title,pic,content,shijian}}
                                    {{$nextset['other']=`"id>".$article['id']}}
                                    {{$nextset['order']=id asc}}
                                    {{$next=a($nextset)}}
                                    {{if $next}}
                                    <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6">
                                        <article data-app-id="{{z(class)|upset_class()}}" class="post post-classic box-md">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="post-classic-figure" href="{{$next['link']}}">
                                                <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="370" height="239">
                                            </a>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-content">
                                                <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-time">
                                                    <time datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                </div>
                                                <h5 data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">
                                                    <a href="{{$next['link']}}">{{$next['title']}}</a>
                                                </h5>
                                                <p data-app-id="{{z(class)|upset_class()}}" class="post-classic-text">{{$next['content']|text(150)}}...</p>
                                            </div>
                                        </article>
                                    </div>
                                    {{/if}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-xl-3">
                    <div data-app-id="{{z(class)|upset_class()}}" class="aside row row-30 row-md-50 justify-content-md-between">
                        <div data-app-id="{{z(class)|upset_class()}}" class="aside-item col-12">
                            <form data-app-id="{{z(class)|upset_class()}}" class="rd-search form-search" action="{{host}}" method="GET">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                    <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="search-form">Search blog...</label>
                                    <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                    <button data-app-id="{{z(class)|upset_class()}}" class="button-search fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="aside-item col-sm-6 col-md-5 col-lg-12">
                            <h6 data-app-id="{{z(class)|upset_class()}}" class="aside-title">导航</h6>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="list-categories">
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
    </section>
    {{file footer}}
</body>
</html>