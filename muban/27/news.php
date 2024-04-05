{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css" id="main-styles-link">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark bg-overlay-60">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
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
    <section class="{{z(class)|upset_class()}} section section-sm bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-9 col-md-6 col-lg-5 col-xl-4 wow fadeInLeft" data-wow-delay="0s">
                    <article class="{{z(class)|upset_class()}} post post-creative post-creative-2">
                        <a class="{{z(class)|upset_class()}} post-creative-figure" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="267">
                        </a>
                        <div class="{{z(class)|upset_class()}} post-creative-footer">
                            <h5 class="{{z(class)|upset_class()}} post-creative-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
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