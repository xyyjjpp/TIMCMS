{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{z(works_banner_img)}});">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Our Project</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-md bg-default text-center">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="isotope-wrap">
                <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                                {{$set=array()}}
                                {{$set['cid']=`cid}}
                                {{$set['pagesize']=6}}
                                {{$set['column']=id,title,shijian,pic,content}}
                                {{$articles=alist($set)}}
                                {{loop $articles['list'] as $a}}
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-4 isotope-item" data-filter="construction">
                                    <a data-app-id="{{z(class)|upset_class()}}" class="project-data" href="{{$a['link']}}">
                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="project-data-content">
                                            <h5 data-app-id="{{z(class)|upset_class()}}" class="project-data-title">{{$a['title']}}</h5>
                                            <p data-app-id="{{z(class)|upset_class()}}" class="project-data-text">{{$a['content']|text(150)}}...</p>
                                        </div>
                                    </a>
                                </div>
                                {{/loop}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>