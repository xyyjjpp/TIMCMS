{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css">
</head>
<body>
{{file header}}
<section data-app-id="{{z(class)|upset_class()}}" class="section section-inset-1 bg-default text-center bg-image background-position-1" id="home" style="background-image: url({{z(news_banner_img)}})">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="title-style-1-wrap">
            <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop wow slideInLeft">
                <h2 data-app-id="{{z(class)|upset_class()}}" class="title-style-1 wow slideInRight">{{i(name)}}</h2>
            </div>
        </div>
    </div>
</section>
<section data-app-id="{{z(class)|upset_class()}}" class="section section-full section-xs section-last bg-default text-md-center" id="news">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row row-xxl row-30 justify-content-center">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,content}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-4 wow blurIn" data-wow-delay=".1s">
                <article data-app-id="{{z(class)|upset_class()}}" class="post-classic">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-time">
                        <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                    </div>
                    <h4 data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">
                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                    </h4>
                    <p data-app-id="{{z(class)|upset_class()}}" class="post-classic-text">{{$a['content']|text(150)}}...</p>
                </article>
            </div>
            {{/loop}}
        </div>
    </div>
</section>
{{file footer}}
</body>
</html>