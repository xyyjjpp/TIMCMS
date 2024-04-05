{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{z(news_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our News</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-gray-100">
        <div class="{{z(class)|upset_class()}} container container-bigger">
            <div class="{{z(class)|upset_class()}} row row-50 row-md-90 justify-content-md-center justify-content-xl-between">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-8 col-xl-7 text-center">
                    <div class="{{z(class)|upset_class()}} row row-30">
                        {{$set=array()}}
                        {{$set['cid']=`cid}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,content,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-md-6">
                            <article class="{{z(class)|upset_class()}} post-blog">
                                <a class="{{z(class)|upset_class()}} post-blog-image" href="{{$a['link']}}">
                                    <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="420" height="305">
                                </a>
                                <div class="{{z(class)|upset_class()}} post-blog-caption">
                                    <div class="{{z(class)|upset_class()}} post-blog-caption-body">
                                        <h5>
                                            <a class="{{z(class)|upset_class()}} post-blog-title" href="{{$a['link']}}">{{$a['title']}}</a>
                                        </h5>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} post-blog-caption-footer">
                                        <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                </div>
                            </article>
                        </div>
                        {{/loop}}
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-4 blog-aside">
                    <div class="{{z(class)|upset_class()}} blog-aside-item">
                        <h6>搜索</h6>
                        <form class="{{z(class)|upset_class()}} rd-search rd-search-modern" action="{{host}}" method="GET">
                            <div class="{{z(class)|upset_class()}} form-wrap">
                                <input class="{{z(class)|upset_class()}} rd-search-input form-input rounded-30" id="rd-search-input" type="text" name="s" autocomplete="off">
                                <label class="{{z(class)|upset_class()}} form-label form-label" for="rd-search-input">搜索...</label>
                            </div>
                            <button class="{{z(class)|upset_class()}} button mdi mdi-magnify" type="submit"></button>
                        </form>
                    </div>
                    <div class="{{z(class)|upset_class()}} blog-aside-item">
                        <h6>导航</h6>
                        <ul class="{{z(class)|upset_class()}} list-marked list-marked-secondary">
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
    </section>
{{file footer}}
</body>
</html>