{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} wrapper-triangle">
        <div class="{{z(class)|upset_class()}} pen">
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} bg-gray-7">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom box-transform-wrap context-dark">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
                <div class="{{z(class)|upset_class()}} breadcrumbs-custom-decor"></div>
            </div>
            <div class="{{z(class)|upset_class()}} box-transform" style="background-image: url({{z(works_banner_img)}});"></div>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">Our Profiles</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-xl bg-default text-center">
        <div class="{{z(class)|upset_class()}} container-fluid container-inset-0">
            <div class="{{z(class)|upset_class()}} row row-30 row-desktop-8 gutters-8 hoverdir" data-lightgallery="group">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=8}}
                {{$set['column']=id,title,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 col-xxl-3">
                    <div class="{{z(class)|upset_class()}} oh-desktop">
                        <article class="{{z(class)|upset_class()}} thumbnail thumbnail-modern wow slideInUp hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption">
                            <a class="{{z(class)|upset_class()}} thumbnail-modern-figure" href="{{$a['link']}}" data-lightgallery="item">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="474" height="355">
                            </a>
                            <div class="{{z(class)|upset_class()}} thumbnail-modern-caption">
                                <h5 class="{{z(class)|upset_class()}} thumbnail-modern-title">
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h5>
                            </div>
                        </article>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>