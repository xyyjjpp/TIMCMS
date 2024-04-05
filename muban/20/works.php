{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" id="main-styles-link">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-inset">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">Our Product</li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="box-position" style="background-image: url({{z(works_banner_img)}});"></div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default text-center">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 isotope isotope-wrap" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,shijian}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-6 col-lg-4 isotope-item" data-filter="Type 3">
                    <article data-app-id="{{z(class)|upset_class()}}" class="thumbnail thumbnail-modern thumbnail-sm">
                        <a data-app-id="{{z(class)|upset_class()}}" class="thumbnail-modern-figure" href="{{$a['pic']}}" data-lightgallery="item">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="303">
                        </a>
                        <div data-app-id="{{z(class)|upset_class()}}" class="thumbnail-modern-caption">
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="thumbnail-modern-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <p data-app-id="{{z(class)|upset_class()}}" class="thumbnail-modern-subtitle">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
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