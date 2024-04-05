{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} wrapper-triangle">
        <div class="{{z(class)|upset_class()}} pen">
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} bg-gray-7">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom box-transform-wrap context-dark">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
                <div class="{{z(class)|upset_class()}} breadcrumbs-custom-decor"></div>
            </div>
            <div class="{{z(class)|upset_class()}} box-transform" style="background-image: url({{z(news_banner_img)}});"></div>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our News</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-40 row-lg-60 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 order-lg-1">
                    <article class="{{z(class)|upset_class()}} post post-classic">
                        <div class="{{z(class)|upset_class()}} post-classic-figure">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="210">
                        </div>
                        <div class="{{z(class)|upset_class()}} post-classic-content">
                            <p class="{{z(class)|upset_class()}} post-classic-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </p>
                        </div>
                        <time class="{{z(class)|upset_class()}} post-classic-time" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>