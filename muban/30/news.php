{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark">
            <div class="{{z(class)|upset_class()}} container"><br><br><br>
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our News</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position novi-bg novi-bg-img" style="background-image: url({{z(news_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-9 col-md-6 col-lg-5 col-xl-4 wow fadeInLeft" data-wow-delay="0s">
                    <article class="{{z(class)|upset_class()}} post post-creative">
                        <div class="{{z(class)|upset_class()}} post-creative-header">
                            <div class="{{z(class)|upset_class()}} group-md">
                                <div class="{{z(class)|upset_class()}} post-creative-time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </div>
                        </div>
                        <a class="{{z(class)|upset_class()}} post-creative-figure" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="267">
                        </a>
                        <div class="{{z(class)|upset_class()}} post-creative-footer">
                            <h5 class="{{z(class)|upset_class()}} post-creative-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
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