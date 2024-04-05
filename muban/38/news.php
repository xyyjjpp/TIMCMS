{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
    {{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" data-parallax-img="{{z(news_banner_img)}}">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-top-34 section-lg-top-98 section-bottom-34">
                    <div>
                        <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name)}}</h2>
                    </div>
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-lg-top-66">
                        <li class="{{z(class)|upset_class()}} list-inline-item active">
                            <a href="{{host}}">首页</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">Our News</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-background section-66 section-lg-124 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-fix justify-content-md-center">
                <div class="{{z(class)|upset_class()}} col-md-10 col-lg-12">
                    <div class="{{z(class)|upset_class()}} row row-40 row-md-30">
                        {{$set=array()}}
                        {{$set['cid']=`cid}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-lg-6">
                            <a class="{{z(class)|upset_class()}} d-block" href="{{$a['link']}}">
                                <div class="{{z(class)|upset_class()}} post post-boxed">
                                    <div class="{{z(class)|upset_class()}} post-media">
                                        <img class="{{z(class)|upset_class()}} img-fluid" width="570" height="321" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                    </div>
                                    <div class="{{z(class)|upset_class()}} post-content text-start">
                                        <div class="{{z(class)|upset_class()}} post-body">
                                            <div class="{{z(class)|upset_class()}} post-title">
                                                <h3 title="7 Important Tips for Buying a Home">{{$a['title']}}</h3>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-meta small">
                                                <ul class="{{z(class)|upset_class()}} list-inline list-inline-sm p">
                                                    <li class="{{z(class)|upset_class()}} list-inline-item">
                                                        <span class="{{z(class)|upset_class()}} align-middle novi-icon icon-xxs mdi mdi-clock"></span>
                                                        <time class="{{z(class)|upset_class()}} fst-italic align-middle text-primary" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{/loop}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>