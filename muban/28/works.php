{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section parallax-container context-dark" data-parallax-img="{{z(works_banner_img)}}">
        <div class="{{z(class)|upset_class()}} parallax-content parallax-header">
            <div class="{{z(class)|upset_class()}} parallax-header__inner context-dark">
                <div class="{{z(class)|upset_class()}} parallax-header__content">
                    <div class="{{z(class)|upset_class()}} container">
                        <div class="{{z(class)|upset_class()}} row justify-content-sm-center">
                            <div class="{{z(class)|upset_class()}} col-md-10 col-xl-8">
                                <h2 class="{{z(class)|upset_class()}} heading-decorated">{{i(name)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-md bg-default text-center">
        <div class="{{z(class)|upset_class()}} bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
            <img src="{{tempdir}}assets/picture/bg-decor-6.png">
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <h4 class="{{z(class)|upset_class()}} heading-decorated">{{i(name,3)}}</h4>
            <div class="{{z(class)|upset_class()}} isotope-wrap row row-70">
                <div class="{{z(class)|upset_class()}} col-sm-12">
                    <div class="{{z(class)|upset_class()}} isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                        {{$set=array()}}
                        {{$set['cid']=3}}
                        {{$set['pagesize']=6}}
                        {{$set['column']=id,title,shijian,pic,content}}
                        {{$articles=alist($set)}}
                        {{loop $articles['list'] as $a}}
                        <div class="{{z(class)|upset_class()}} col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2">
                            <a class="{{z(class)|upset_class()}} img-thumbnail-variant-3" href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="418" height="315">
                                <span class="{{z(class)|upset_class()}} label-custom label-white">Link</span>
                                <div class="{{z(class)|upset_class()}} caption">
                                    <p class="{{z(class)|upset_class()}} heading-5 hover-top-element">{{$a['title']}}</p>
                                    <div class="{{z(class)|upset_class()}} divider"></div>
                                    <p class="{{z(class)|upset_class()}} small hover-bottom-element">{{$a['content']|text(100)}}...</p>
                                    <span class="{{z(class)|upset_class()}} icon arrow-right linear-icon-arrow-right"></span>
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