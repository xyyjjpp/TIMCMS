{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} preloader-body">
        <div class="{{z(class)|upset_class()}} cssload-container">
            <div class="{{z(class)|upset_class()}} cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section section-page-title novi-bg novi-bg-img" style="background-image: url({{z(news_banner_img)}}); background-size: cover;">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} page-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our News</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 justify-content-center">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <div class="{{z(class)|upset_class()}} post-classic">
                        <figure class="{{z(class)|upset_class()}} post-classic-img">
                            <a href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="300">
                            </a>
                        </figure>
                        <div class="{{z(class)|upset_class()}} post-classic-caption">
                            <h4 class="{{z(class)|upset_class()}} post-classic-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <ul class="{{z(class)|upset_class()}} post-classic-meta-list">
                                <li class="{{z(class)|upset_class()}} time">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>