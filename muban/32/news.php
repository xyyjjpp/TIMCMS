{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <div class="{{z(class)|upset_class()}} section page-header breadcrumbs-custom-wrap bg-image" style="background-image: url({{z(news_banner_img)}})">
        <section class="{{z(class)|upset_class()}} breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="{{z(class)|upset_class()}} container">
                <br><br>
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our News</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-sm">
                <div class="{{z(class)|upset_class()}} col-sm-12 col-md-7 wow fadeInLeft">
                    {{$set=array()}}
                    {{$set['cid']=4}}
                    {{$set['pagesize']=1}}
                    {{$set['column']=id,title,shijian,pic,content}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <article class="{{z(class)|upset_class()}} post post-nikki post-nikki-2">
                        <div class="{{z(class)|upset_class()}} post-nikki-figure">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="720" height="430">
                        </div>
                        <div class="{{z(class)|upset_class()}} post-nikki-body">
                            <div>
                                <div class="{{z(class)|upset_class()}} post-nikki-time">
                                    <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                                <div class="{{z(class)|upset_class()}} post-nikki-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </div>
                                <div class="{{z(class)|upset_class()}} post-nikki-content">
                                    <p>{{$a['content']|text(100)}}...</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    {{/loop}}
                </div>
                <div class="{{z(class)|upset_class()}} col-md-5 mt-5 mt-md-0">
                    <div class="{{z(class)|upset_class()}} row row-30">
                        {{$set=array()}}
                        {{$set['cid']=4}}
                        {{$set['pagesize']=5}}
                        {{$set['column']=id,title,shijian,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        {{if $a['key'] != 1}}
                        <div class="{{z(class)|upset_class()}} col-6 col-md-12 wow fadeInRight">
                            <article class="{{z(class)|upset_class()}} post post-nikki">
                                <div class="{{z(class)|upset_class()}} unit unit-spacing-lg flex-column flex-md-row">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <a class="{{z(class)|upset_class()}} post-nikki-figure" href="{{$a['link']}}">
                                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" style="width:170px;height:120px;">
                                        </a>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <div class="{{z(class)|upset_class()}} post-nikki-time">
                                            <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                        </div>
                                        <div class="{{z(class)|upset_class()}} post-nikki-title">
                                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        {{/if}}
                        {{/loop}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>