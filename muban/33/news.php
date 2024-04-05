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
            <div class="{{z(class)|upset_class()}} bg-dark-overlay section-bredcrumbs" style="background-image: url({{z(news_banner_img)}})">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <h2 class="{{z(class)|upset_class()}} title">{{i(name)}}</h2>
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
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-light">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center text-start">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-6 d-flex wow fadeInLeft">
                    <article class="{{z(class)|upset_class()}} post-grid post-1" style="background-image: url('{{$a['pic']}}');">
                        <div class="{{z(class)|upset_class()}} post-item">
                            <div class="{{z(class)|upset_class()}} content">
                                <div class="{{z(class)|upset_class()}} time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                                <h4 class="{{z(class)|upset_class()}} post-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h4>
                                <div class="{{z(class)|upset_class()}} post-exeption">
                                    <p>{{$a['content']|text(100)}}...</p>
                                </div>
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