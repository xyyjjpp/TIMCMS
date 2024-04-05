{{file seo}}
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animate.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/all.min.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/flaticon.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/template-default.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/owl.transitions.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/venobox.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/animated-text.css" media="all">
    <link rel="stylesheet" href="{{tempdir}}static/css/widget.css" media="all">
    <script src="{{tempdir}}static/js/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="{{tempdir}}static/css/responsive.css" media="all">
</head>
<body>
{{file header}}
<div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-section d-flex align-items-center" style="background-image: url('{{z(works_banner_img)}}')">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-12 col-md-12">
                <div data-app-id="{{z(class)|upset_class()}}" class="breadcumn-content text-left" data-app-id="{{z(class)|upset_class()}}" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    <h2>{{i(name)}}</h2>
                    <ul>
                        <li>
                            <a href="{{host}}">
                                <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-home"></i>
                            </a>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">首页</li>
                        <li>
                            <i data-app-id="{{z(class)|upset_class()}}" class="fas fa-chevron-right"></i>
                        </li>
                        <li data-app-id="{{z(class)|upset_class()}}" class="style2">Our Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="portfolio-section single-style">
    <div data-app-id="{{z(class)|upset_class()}}" class="container">
        <div data-app-id="{{z(class)|upset_class()}}" class="row">
            {{$set=array()}}
            {{$set['cid']=`cid}}
            {{$set['pagesize']=6}}
            {{$set['page']=page}}
            {{$set['column']=id,title,shijian,pic}}
            {{$articles=alist($set)}}
            {{loop $articles['list'] as $a}}
            <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-md-6">
                <div data-app-id="{{z(class)|upset_class()}}" class="portfolio-items">
                    <div data-app-id="{{z(class)|upset_class()}}" class="portfolio-thumb">
                        <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="368">
                        <div data-app-id="{{z(class)|upset_class()}}" class="thumb-content">
                            <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                            <h2>{{$a['title']}}</h2>
                            <a href="{{$a['link']}}">阅读<i data-app-id="{{z(class)|upset_class()}}" class="fas fa-long-arrow-alt-right"></i>
                            </a>
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