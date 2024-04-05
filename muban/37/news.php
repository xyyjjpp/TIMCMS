{{file seo}}
    <link href="{{tempdir}}assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{tempdir}}assets/css/styles.css" rel="stylesheet">
</head>
<body>
{{file header}}
<main id="main">
    <div class="{{z(class)|upset_class()}} breadcrumbs">
        <div class="{{z(class)|upset_class()}} page-header d-flex align-items-center" style="background-image: url({{z(news_banner_img)}});">
            <div class="{{z(class)|upset_class()}} container position-relative">
                <div class="{{z(class)|upset_class()}} row d-flex justify-content-center">
                    <div class="{{z(class)|upset_class()}} col-lg-6 text-center">
                        <h2>{{i(name)}}</h2>
                        <p>Our News</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="{{z(class)|upset_class()}} container">
                <ol>
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li>Our News</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="recent-posts" class="{{z(class)|upset_class()}} recent-posts">
        <div class="{{z(class)|upset_class()}} container" data-aos="fade-up">
            <div class="{{z(class)|upset_class()}} row gy-4">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <article>
                        <div class="{{z(class)|upset_class()}} post-img">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" class="{{z(class)|upset_class()}} img-fluid">
                        </div>
                        <h2 class="{{z(class)|upset_class()}} title">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h2>
                        <div class="{{z(class)|upset_class()}} d-flex align-items-center">
                            <div class="{{z(class)|upset_class()}} post-meta">
                                <p class="{{z(class)|upset_class()}} post-date">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
</main>
{{file footer}}
</body>
</html>