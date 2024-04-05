{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css">
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.css">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.default.css">
<link rel="stylesheet" href="{{tempdir}}static/css/default-theme.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page-wrapper">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="page-title" style="background-image:url({{z(works_banner_img)}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <h2 style="text-align: center;font-size: 52px;">{{i(name)}}</h2>
            <ul data-app-id="{{z(class)|upset_class()}}" class="bread-crumb clearfix">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li data-app-id="{{z(class)|upset_class()}}" class="active">Our Product</li>
            </ul>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="project-section project-page-section">
        <div data-app-id="{{z(class)|upset_class()}}" class="auto-container">
            <div data-app-id="{{z(class)|upset_class()}}" class="mixitup-gallery">
                <div data-app-id="{{z(class)|upset_class()}}" class="filter-list row clearfix">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,shijian,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div data-app-id="{{z(class)|upset_class()}}" class="gallery-block mix architecture facility all col-md-6 col-sm-6 col-xs-12">
                        <div data-app-id="{{z(class)|upset_class()}}" class="item">
                            <div>
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                            </div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="info">
                                <h3>
                                    <a href="{{$a['link']}}">{{$a['title']}}</a>
                                </h3>
                                <h4>
                                    <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                                </h4>
                                <a href="{{$a['link']}}">
                                    <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-arrow-right"></i>
                                </a>
                            </div>
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