{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="text-center">
        <section data-app-id="{{z(class)|upset_class()}}" class="section parallax-container" data-parallax-img="{{z(news_banner_img)}}">
            <div data-app-id="{{z(class)|upset_class()}}" class="parallax-content parallax-header parallax-light">
                <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__inner">
                    <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="container">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-sm-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-10 col-xl-8">
                                    <h2 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name)}}</h2>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="heading-6">Our News</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section-md bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-60">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,content,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-xl-4">
                    <article data-app-id="{{z(class)|upset_class()}}" class="post-classic post-minimal">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">
                            <h6>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h6>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="post-meta">
                            <div data-app-id="{{z(class)|upset_class()}}" class="group">
                                <time datetime="{{$a['shijian']|date('Y',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-body">
                            <p>{{$a['content']|text(150)}}...</p>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="divider"></div>
    </div>
{{file footer}}
</body>
</html>