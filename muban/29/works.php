{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{z(works_banner_img)}})">
        <div class="{{z(class)|upset_class()}} container-fluid context-dark">
            <div class="{{z(class)|upset_class()}} row g-0 justify-content-xl-center">
                <div class="{{z(class)|upset_class()}} col-xxl-10">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h2 class="{{z(class)|upset_class()}} decorative-title">{{i(name)}}</h2>
                    </div>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Our Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-white">
        <div class="{{z(class)|upset_class()}} container container-fluid">
            <div class="{{z(class)|upset_class()}} row row-40 row-lg-90 justify-content-between g-xxl-0">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4 col-xl-6 col-xxl-3 offset-xxl-1">
                    <div class="{{z(class)|upset_class()}} product unit unit-spacing-lg flex-column flex-xl-row">
                        <div class="{{z(class)|upset_class()}} unit-left product-media">
                            <a href="{{$a['link']}}">
                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="206" height="174">
                            </a>
                        </div>
                        <div class="{{z(class)|upset_class()}} unit-body product-body">
                            <h5 class="{{z(class)|upset_class()}} product-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <p class="{{z(class)|upset_class()}} product-description">{{$a['content']|text(100)}}...</p>
                        </div>
                    </div>
                </div>
                {{/loop}}
            </div>
        </div>
    </section>
    {{file footer}}
</body>
</html>