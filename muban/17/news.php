{{file seo}}
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/jquery-ui.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/uikit.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/nivo-slider.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/theme-default.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/meanmenu.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/swiper.min.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/jquery.animatedheadline.css" type="text/css" media="all">
<link rel="stylesheet" href="{{tempdir}}static/css/simple-line-icons.min.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css" type="text/css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-section d-flex align-items-center" style="background-image: url('{{z(news_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumb-content">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fa fa-angle-right"></i>
                        </li>
                        <li>Our News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="blog-section style-one pt-70 pb-50">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['column']=id,title,content,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-12 col-md-6 col-lg-4">
                <div data-app-id="{{z(class)|upset_class()}}" class="single-blog">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-thumb">
                        <a href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-meta">
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-title">
                            <h4>
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="blog-text">
                            <p>{{$a['content']|text(150)}}...</p>
                        </div>
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