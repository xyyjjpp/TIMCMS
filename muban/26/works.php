{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(works_banner_img)}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our Properties</li>
            </ul>
        </div>
    </section>
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-12">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <article class="{{z(class)|upset_class()}} product-classic">
                        <div class="{{z(class)|upset_class()}} product-classic-media">
                            <div class="{{z(class)|upset_class()}} owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="480" height="287">
                            </div>
                        </div>
                        <h4 class="{{z(class)|upset_class()}} product-classic-title">
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h4>
                        <div class="{{z(class)|upset_class()}} product-classic-divider"></div>
                    </article>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>
