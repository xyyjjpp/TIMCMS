{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(news_banner_img)}});">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Our News</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-lg bg-gray-100">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['page']=page}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-11 col-md-10 col-lg-6">
                    <article data-app-id="{{z(class)|upset_class()}}" class="news-full-width">
                        <div data-app-id="{{z(class)|upset_class()}}" class="news-full-width-image">
                            <a href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                            </a>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="news-full-width-body">
                            <h4>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="list-inline-divided">
                                <li>
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-xs icon-primary mdi mdi-clock novi-icon"></span>
                                    <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                                </li>
                            </ul>
                            <p>{{$a['content']|text(150)}}...</p>
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