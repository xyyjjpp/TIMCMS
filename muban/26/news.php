{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(news_banner_img)}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our News</li>
            </ul>
        </div>
    </section>
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-md bg-gray-12">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40 row-lg-60">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,content,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} post-default">
                        <a class="{{z(class)|upset_class()}} post-default-image" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="736" height="540">
                        </a>
                        <div class="{{z(class)|upset_class()}} post-default-body">
                            <div class="{{z(class)|upset_class()}} post-default-title">
                                <h4>
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h4>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-default-divider"></div>
                            <div class="{{z(class)|upset_class()}} post-default-text">
                                <p>{{$a['content']|text(200)}}...</p>
                            </div>
                            <div class="{{z(class)|upset_class()}} post-default-time">
                                <span class="{{z(class)|upset_class()}} icon mdi mdi-clock"></span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>
