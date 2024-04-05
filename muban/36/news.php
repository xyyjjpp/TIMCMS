{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    <header class="{{z(class)|upset_class()}} page-header subpage_header">
        {{file header}}
        <section>
            <div class="{{z(class)|upset_class()}} swiper-container swiper-slider" data-loop="true" data-slide-effect="fade" data-autoplay="5000">
                <div class="{{z(class)|upset_class()}} jumbotron text-center">
                    <h2>{{i(name)}}</h2>
                    <p class="{{z(class)|upset_class()}} big"></p>
                </div>
                <div class="{{z(class)|upset_class()}} swiper-wrapper">
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{z(news_banner_img)}}">
                        <div class="{{z(class)|upset_class()}} swiper-slide-caption"></div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="{{z(class)|upset_class()}} section section-border">
        <ol class="{{z(class)|upset_class()}} breadcrumb">
            <li>
                <a href="{{host}}">首页</a>
            </li>
            <li class="{{z(class)|upset_class()}} active">Our News</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm inset-bottom-2 text-center text-lg-start">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content,click}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <article class="{{z(class)|upset_class()}} thumbnail thumbnail-4">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        <div class="{{z(class)|upset_class()}} caption">
                            <h4>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <p class="{{z(class)|upset_class()}} text-dark-variant-2">{{$a['content']|text(100)}}...</p>
                            <div class="{{z(class)|upset_class()}} blog-info">
                                <div class="{{z(class)|upset_class()}} pull-md-left">
                                    <time class="{{z(class)|upset_class()}} meta fa-calendar" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    <p class="{{z(class)|upset_class()}} badge fa-comments font-secondary">{{$a['click']}}</p>
                                </div>
                                <a class="{{z(class)|upset_class()}} button-link" href="{{$a['link']}}">阅读</a>
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