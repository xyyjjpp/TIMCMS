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
    <div class="{{z(class)|upset_class()}} section page-header breadcrumbs-custom-wrap bg-image" style="background-image: url({{z(works_banner_img)}})">
        <section class="{{z(class)|upset_class()}} breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="{{z(class)|upset_class()}} container">
                <br><br>
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our Profiles</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-sm row-50 row-lg-60" data-isotope-layout="masonry" data-column-class="{{z(class)|upset_class()}} .col-1" data-lightgallery="group" data-lg-animation="lg-zoom-in">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-xs-6 col-lg-5" data-filter="0">
                    <div class="{{z(class)|upset_class()}} product">
                        <a class="{{z(class)|upset_class()}} product-media" data-lightgallery="item" href="{{$a['link']}}">
                            <img class="{{z(class)|upset_class()}} product-img" src="{{$a['pic']}}" alt="{{$a['title']}}" width="500" height="500">
                        </a>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>