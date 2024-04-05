{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{z(news_banner_img)}})">
        <div class="{{z(class)|upset_class()}} container-fluid context-dark">
            <div class="{{z(class)|upset_class()}} row g-0 justify-content-xl-center">
                <div class="{{z(class)|upset_class()}} col-xxl-10">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h2 class="{{z(class)|upset_class()}} decorative-title">{{i(name)}}</h2>
                    </div>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Our News</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-gray">
        <div class="{{z(class)|upset_class()}} container container-fluid">
            <div class="{{z(class)|upset_class()}} row row-60 g-xxl-0">
                <div class="{{z(class)|upset_class()}} col-lg-7 col-xl-7 col-xxl-6 offset-xxl-1">
                    <section class="{{z(class)|upset_class()}} section-masonry-post">
                        <div class="{{z(class)|upset_class()}} row row-40 row-lg-60">
                            {{$set=array()}}
                            {{$set['cid']=`cid}}
                            {{$set['pagesize']=6}}
                            {{$set['column']=id,title,content,shijian,pic}}
                            {{$articles=alist($set)}}
                            {{loop $articles['list'] as $a}}
                            <div class="{{z(class)|upset_class()}} col-md-6">
                                <article class="{{z(class)|upset_class()}} post-masonry">
                                    <div class="{{z(class)|upset_class()}} post-media">
                                        <a href="{{$a['link']}}">
                                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="480" height="360">
                                        </a>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} post-content">
                                        <div class="{{z(class)|upset_class()}} post-meta">
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs icon-secondary mdi mdi-calendar"></span>
                                            <span class="{{z(class)|upset_class()}} time">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                        </div>
                                        <h5 class="{{z(class)|upset_class()}} post-title">
                                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                                        </h5>
                                        <p class="{{z(class)|upset_class()}} post-exeption">{{$a['content']|text(100)}}...</p>
                                    </div>
                                </article>
                            </div>
                            {{/loop}}
                        </div>
                    </section>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-5 col-xl-4 col-xxl-3 offset-xl-1">
                    <aside class="{{z(class)|upset_class()}} text-start">
                        <div class="{{z(class)|upset_class()}} row row-60 row-lg-90">
                            <div class="{{z(class)|upset_class()}} col-md-12 col-lg-12">
                                <div class="{{z(class)|upset_class()}} decorative decorative-md">
                                    <h5 class="{{z(class)|upset_class()}} decorative-title">搜索</h5>
                                    <form class="{{z(class)|upset_class()}} form-search rd-search rd-mailform-inline rd-mailform-small" action="{{host}}" method="GET">
                                        <div class="{{z(class)|upset_class()}} form-wrap">
                                            <label class="{{z(class)|upset_class()}} form-label form-search-label form-label-sm" for="blog-sidebar-2-form-search-widget">搜索...</label>
                                            <input class="{{z(class)|upset_class()}} form-input form-search-input form-control #{inputClass}" id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="{{z(class)|upset_class()}} button button-sm button-secondary form-search-submit" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-12">
                                <div class="{{z(class)|upset_class()}} decorative">
                                    <div class="{{z(class)|upset_class()}} decorative decorative-md">
                                        <h5 class="{{z(class)|upset_class()}} decorative-title">导航</h5>
                                        <ul class="{{z(class)|upset_class()}} list-marked list-marked-1">
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
                    </aside>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>