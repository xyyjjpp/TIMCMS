{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
{{file header}}
    <div class="{{z(class)|upset_class()}} parallax-container">
        <div class="{{z(class)|upset_class()}} material-parallax">
            <img src="{{z(news_banner_img)}}" alt="{{i(name)}}">
        </div>
        <div class="{{z(class)|upset_class()}} parallax-content red">
            <section class="{{z(class)|upset_class()}} breadcrumb-classic context-dark">
                <div class="{{z(class)|upset_class()}} shell section-35 section-lg-top-85 text-sm-left">
                    <h2 class="{{z(class)|upset_class()}} veil reveal-sm-block">{{i(name)}}</h2>
                    <div class="{{z(class)|upset_class()}} offset-lg-top-75 offset-sm-top-40">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-lg list-inline-dashed p">
                            <li>
                                <a class="{{z(class)|upset_class()}} text-light" href="{{host}}">首页</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} text-light">Our News</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <main class="{{z(class)|upset_class()}} page-content">
        <section class="{{z(class)|upset_class()}} section-70 section-md-90">
            <div class="{{z(class)|upset_class()}} shell">
                <div class="{{z(class)|upset_class()}} range text-sm-left range-xs-center">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,content,shijian,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} cell-xs-10 cell-sm-6">
                        <article class="{{z(class)|upset_class()}} post-default">
                            <a class="{{z(class)|upset_class()}} thumbnail-default" href="{{$a['link']}}" target="_self">
                                <figure>
                                    <img class="{{z(class)|upset_class()}} img-responsive" width="770" height="520" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                </figure>
                                <span class="{{z(class)|upset_class()}} icon icon-xxs fa-link"></span>
                            </a>
                            <div class="{{z(class)|upset_class()}} offset-top-10">
                                <h5 class="{{z(class)|upset_class()}} text-primary text-bold post-default-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h5>
                            </div>
                            <div class="{{z(class)|upset_class()}} offset-top-15">
                                <div class="{{z(class)|upset_class()}} post-meta">
                                    <ul class="{{z(class)|upset_class()}} list-inline">
                                        <li>
                                            <span class="{{z(class)|upset_class()}} icon icon-xxs fa-calendar text-gray text-middle"></span>
                                            <time class="{{z(class)|upset_class()}} text-gray inset-left-5 text-middle" datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>{{$a['content']|text(100)}}...</p>
                            <div class="{{z(class)|upset_class()}} offset-top-20">
                                <a class="{{z(class)|upset_class()}} btn btn-primary btn-sm" href="{{$a['link']}}">阅读</a>
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