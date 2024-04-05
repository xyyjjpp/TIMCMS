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
                    <div class="{{z(class)|upset_class()}} swiper-slide" data-slide-bg="{{z(works_banner_img)}}">
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
            <li class="{{z(class)|upset_class()}} active">Our Products</li>
        </ol>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm text-center">
        <div class="{{z(class)|upset_class()}} container isotope-wrap">
            <div class="{{z(class)|upset_class()}} isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                <div class="{{z(class)|upset_class()}} row">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} col-12 col-md-6 col-lg-4 isotope-item" data-filter="type-1">
                        <div class="{{z(class)|upset_class()}} thumbnail-variant-2 thumbnail-4 text-center">
                            <a href="{{$a['link']}}" data-lightgallery="item">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                <div class="{{z(class)|upset_class()}} caption">
                                    <h4 class="{{z(class)|upset_class()}} text-white">{{$a['title']}}</h4>
                                </div>
                            </a>
                            <a class="{{z(class)|upset_class()}} icon icon-sm text-white fa-chain" href="{{$a['link']}}"></a>
                        </div>
                    </div>
                    {{/loop}}
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>