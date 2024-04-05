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
    <section class="{{z(class)|upset_class()}} section section-page-title novi-bg novi-bg-img" style="background-image: url({{z(works_banner_img)}}); background-size: cover;">
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
                <li class="{{z(class)|upset_class()}} active">Our Profiles</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-center">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-30">
                <div class="{{z(class)|upset_class()}} col-lg-12">
                    <div class="{{z(class)|upset_class()}} isotope row" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group" data-column-class=".col-sm-6.col-lg-4">
                        {{$set=array()}}
                        {{$set['cid']=`cid}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,pic}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-sm-6 col-lg-4 isotope-item" data-filter="other">
                            <a class="{{z(class)|upset_class()}} gallery-item" data-lightgallery="item" href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="570" height="570">
                                <span class="{{z(class)|upset_class()}} gallery-item-title">{{$a['title']}}</span>
                                <span class="{{z(class)|upset_class()}} gallery-item-button"></span>
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