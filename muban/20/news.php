{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" id="main-styles-link">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-inset">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">Our News</li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="box-position" style="background-image: url({{z(news_banner_img)}});"></div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default text-md-start">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-60">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['page']=page}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-4 wow fadeInLeft">
                    <article data-app-id="{{z(class)|upset_class()}}" class="post post-modern">
                        <a data-app-id="{{z(class)|upset_class()}}" class="post-modern-figure" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                            <div data-app-id="{{z(class)|upset_class()}}" class="post-modern-time">
                                <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="post-modern-time-number">{{$a['shijian']|date('d',this)}}</span>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="post-modern-time-month">{{$a['shijian']|date('m',this)}}</span>
                                </time>
                            </div>
                        </a>
                        <h5 data-app-id="{{z(class)|upset_class()}}" class="post-modern-title">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h5>
                        <p data-app-id="{{z(class)|upset_class()}}" class="post-modern-text">{{$a['content']|text(150)}}...</p>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>