{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page text-center">
    {{file header}}
    <div class="{{z(class)|upset_class()}} parallax-container">
        <div class="{{z(class)|upset_class()}} material-parallax">
            <img src="{{z(works_banner_img)}}" alt="{{i(name)}}">
        </div>
        <div class="{{z(class)|upset_class()}} parallax-content red">
            <section class="{{z(class)|upset_class()}} breadcrumb-classic context-dark">
                <div class="{{z(class)|upset_class()}} shell section-35 section-lg-top-85 text-sm-left">
                    <h2 class="{{z(class)|upset_class()}} veil reveal-sm-block">{{i(name)}}</h2>
                    <div class="{{z(class)|upset_class()}} offset-lg-top-75 offset-sm-top-40">
                        <ul class="{{z(class)|upset_class()}} list-inline list-inline-lg list-inline-dashed p">
                            <li>
                                <a class="{{z(class)|upset_class()}} text-light" href="{{host}}">首页</a>
                            </li>
                            <li class="{{z(class)|upset_class()}} text-light">Our Profiles</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <main class="{{z(class)|upset_class()}} page-content">
        <section class="{{z(class)|upset_class()}} section-100 bg-lighter">
            <div class="{{z(class)|upset_class()}} shell">
                <div class="{{z(class)|upset_class()}} range text-left range-xs-center offset-top-50">
                    {{$set=array()}}
                    {{$set['cid']=`cid}}
                    {{$set['pagesize']=6}}
                    {{$set['column']=id,title,pic}}
                    {{$articles=alist($set)}}
                    {{loop $articles['list'] as $a}}
                    <div class="{{z(class)|upset_class()}} cell-xs-8 cell-sm-6 cell-md-4">
                        <a class="{{z(class)|upset_class()}} thumbnail-classic" href="{{$a['link']}}" target="_self">
                            <figure>
                                <img width="370" height="250" src="{{$a['pic']}}" alt="{{$a['title']}}">
                                <figcaption class="{{z(class)|upset_class()}} thumbnail-classic-caption text-center">
                                    <span class="{{z(class)|upset_class()}} icon icon-xxs fa-arrow-right"></span>
                                    <h6 class="{{z(class)|upset_class()}} thumbnail-classic-title offset-top-0 text-uppercase text-light">{{$a['title']}}</h6>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    {{/loop}}
                </div>
            </div>
        </section>
    </main>
    {{file footer}}
</body>
</html>