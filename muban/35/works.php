{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{z(works_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our Products</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-variant-1 bg-default novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row row-xxl-60 row-50 offset-top-xxl-93">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-6 col-xl-4">
                    <article class="{{z(class)|upset_class()}} event-default-wrap">
                        <div class="{{z(class)|upset_class()}} event-default">
                            <figure class="{{z(class)|upset_class()}} event-default-image">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="570" height="370">
                            </figure>
                            <div class="{{z(class)|upset_class()}} event-default-caption">
                                <a class="{{z(class)|upset_class()}} button button-xs button-primary" href="{{$a['link']}}">阅读</a>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} event-default-inner">
                            <h5>
                                <a class="{{z(class)|upset_class()}} event-default-title" href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
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