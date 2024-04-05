{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
    {{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom-inset">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom context-dark">
            <div class="{{z(class)|upset_class()}} container"><br><br><br>
                <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="{{z(class)|upset_class()}} active">Our Projects</li>
                </ul>
            </div>
            <div class="{{z(class)|upset_class()}} box-position novi-bg novi-bg-img" style="background-image: url({{z(works_banner_img)}});"></div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section novi-bg novi-bg-img section-xl bg-default text-center isotope-wrap">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-50 isotope" data-lightgallery="group">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="{{z(class)|upset_class()}} col-md-6 col-lg-4 isotope-item" data-filter="Type 3">
                    <article class="{{z(class)|upset_class()}} thumbnail thumbnail-modern thumbnail-sm">
                        <a class="{{z(class)|upset_class()}} thumbnail-modern-figure" href="{{$a['link']}}" data-lightgallery="item">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="370" height="303">
                        </a>
                        <div class="{{z(class)|upset_class()}} thumbnail-modern-caption">
                            <h5 class="{{z(class)|upset_class()}} thumbnail-modern-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <p class="{{z(class)|upset_class()}} thumbnail-modern-subtitle">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</p>
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