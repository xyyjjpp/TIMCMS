{{file seo}}
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/animate.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/meanmenu.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/odometer.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/remixicon.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/responsive.css">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="page-title-area" style="background-image: url('{{z(works_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="page-title-content">
            <h2>{{i(name)}}</h2>
            <p>Our Project</p>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-area pt-100 pb-70">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-center">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,shijian,pic,content}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6 col-sm-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog-post">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-image">
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="d-block">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-content">
                        <ul data-app-id="{{z(class)|upset_class()}}" class="meta">
                            <li>
                                <p>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
                            </li>
                        </ul>
                        <h3>
                            <a href="{{$a['link']}}">{{$a['title']}}</a>
                        </h3>
                        <p>{{$a['content']|text(150)}}...</p>
                        <a href="{{$a['link']}}" data-app-id="{{z(class)|upset_class()}}" class="link-btn">阅读</a>
                    </div>
                </div>
            </div>
            {{/loop}}
        </div>
    </div>
</div>
{{file footer}}
</body>
</html>