{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css-Montserrat4007007CLato400700.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
    {{file header}}
    <section class="{{z(class)|upset_class()}} context-dark">
        <div class="{{z(class)|upset_class()}} parallax-container" data-parallax-img="{{z(works_banner_img)}}">
            <div class="{{z(class)|upset_class()}} parallax-content">
                <div class="{{z(class)|upset_class()}} container section-top-34 section-lg-top-98 section-bottom-34">
                    <div>
                        <h2 class="{{z(class)|upset_class()}} fw-bold">{{i(name)}}</h2>
                    </div>
                    <ul class="{{z(class)|upset_class()}} list-inline list-inline-dashed p text-light breadcrumb-modern offset-top-10 offset-lg-top-66">
                        <li class="{{z(class)|upset_class()}} list-inline-item active">
                            <a href="{{host}}">首页</a>
                        </li>
                        <li class="{{z(class)|upset_class()}} list-inline-item">Our Profiles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-bottom-60 section-top-34 section-lg-bottom-110 section-lg-top-66 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-60">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4">
                    <div class="{{z(class)|upset_class()}} box-products">
                        <img class="{{z(class)|upset_class()}} img-fluid d-inline-block" src="{{$a['pic']}}" width="370" height="250" alt="{{$a['title']}}">
                        <div class="{{z(class)|upset_class()}} text-md-start box-products-inner">
                            <h5 class="{{z(class)|upset_class()}} fw-bold text-primary">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <div>
                                <p>{{$a['content']|text(100)}}...</p>
                            </div>
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