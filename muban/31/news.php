{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our News</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position" style="background-image: url({{z(news_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default text-md-start section-our-cars">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-70">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic,click}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <article class="{{z(class)|upset_class()}} post post-classic">
                        <h5 class="{{z(class)|upset_class()}} post-classic-title title-block">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h5>
                        <div class="{{z(class)|upset_class()}} post-classic-panel group-middle justify-content-start">
                            <div class="{{z(class)|upset_class()}} post-classic-meta">
                                <div class="{{z(class)|upset_class()}} post-meta-icon material-icons-toys"></div>
                                <div class="{{z(class)|upset_class()}} post-meta-text">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</div>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-classic-meta">
                                <div class="{{z(class)|upset_class()}} post-meta-icon material-icons-person"></div>
                                <div class="{{z(class)|upset_class()}} post-meta-text">{{$a['click']}}</div>
                            </div>
                        </div>
                        <a class="{{z(class)|upset_class()}} post-classic-figure" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="770" height="430">
                        </a>
                    </article>
                    {{/loop}}
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} post-sidebar post-sidebar-inset">
                        <div class="{{z(class)|upset_class()}} row row-lg row-60">
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12">
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
                                    <h6 class="{{z(class)|upset_class()}} text-uppercase">导航</h6>
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
                            </div>
                            <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-12">
                                <div class="{{z(class)|upset_class()}} post-sidebar-item">
                                    <h6 class="{{z(class)|upset_class()}} text-uppercase">最新新闻</h6>
                                    <div class="{{z(class)|upset_class()}} post-sidebar-item-inset">
                                        {{$set=array()}}
                                        {{$set['cid']=0}}
                                        {{$set['pagesize']=3}}
                                        {{$set['column']=id,title,shijian}}
                                        {{$articles=alist($set)}}
                                        {{loop $articles['list'] as $a}}
                                        <article class="{{z(class)|upset_class()}} quote-minimal">
                                            <div class="{{z(class)|upset_class()}} quote-minimal-text">
                                                <p class="{{z(class)|upset_class()}} q"><a href="{{$a['link']}}">{{$a['title']}}</a></p>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} h6 quote-minimal-cite">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</div>
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