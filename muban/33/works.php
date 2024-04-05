{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} bg-dark-overlay section-bredcrumbs" style="background-image: url({{z(works_banner_img)}})">
                <div class="{{z(class)|upset_class()}} breadcrumb-wrapper">
                    <h2 class="{{z(class)|upset_class()}} title">{{i(name)}}</h2>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>Our Profiles</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-light">
        <div class="{{z(class)|upset_class()}} container text-center">
            <div class="{{z(class)|upset_class()}} row row-30 justify-content-center text-start">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-sm-11 col-md-4 wow fadeInUpSmall">
                    <div class="{{z(class)|upset_class()}} project post-shadow">
                        <a class="{{z(class)|upset_class()}} img-mobile-height" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="510">
                        </a>
                        <div class="{{z(class)|upset_class()}} caption">
                            <h4 class="{{z(class)|upset_class()}} project-title">
                                <a class="{{z(class)|upset_class()}} heading-link" href="{{$a['link']}}">{{$a['title']}}</a>
                            </h4>
                            <p class="{{z(class)|upset_class()}} project-exeption">{{$a['content']|text(100)}}...</p>
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