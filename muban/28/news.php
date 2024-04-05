{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section parallax-container context-dark" data-parallax-img="{{z(news_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content parallax-header">
            <div class="{{z(class)|upset_class()}} parallax-header__inner context-dark">
                <div class="{{z(class)|upset_class()}} parallax-header__content">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-sm-center">
                            <div class="{{z(class)|upset_class()}} col-md-10 col-xl-8">
                                <h2 class="{{z(class)|upset_class()}} heading-decorated">{{i(name)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} bg-default section-md">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-60">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,content,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} post-slider post-minimal">
                        <div class="{{z(class)|upset_class()}} entry-video ratio ratio-16x9">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </div>
                        <div class="{{z(class)|upset_class()}} post-classic-title">
                            <h6>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h6>
                        </div>
                        <div class="{{z(class)|upset_class()}} post-meta">
                            <div class="{{z(class)|upset_class()}} group">
                                 <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} post-classic-body">
                            <p>{{$a['content']|text(100)}}...</p>
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