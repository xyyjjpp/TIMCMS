{{file seo}}
<script src="{{tempdir}}static/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
<link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css-Poppins3004005006007007CLato7CKalam300400700.css">
<link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}static/css/style.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="preloader">
    <div data-app-id="{{z(class)|upset_class()}}" class="preloader-body">
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-container"></div>
        <div data-app-id="{{z(class)|upset_class()}}" class="cssload-speeding-wheel"></div>
    </div>
</div>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
    {{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-body context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <div data-app-id="{{z(class)|upset_class()}}" class="row align-items-center">
                    <div data-app-id="{{z(class)|upset_class()}}" class="col-12 col-md-5">
                        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-left"></div>
                        <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-footer">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">Our Product</li>
                </ul>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-30">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['page']=page}}
                {{$set['column']=id,title,content,shijian,pic}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-4">
                    <article data-app-id="{{z(class)|upset_class()}}" class="post post-classic box-md">
                        <a data-app-id="{{z(class)|upset_class()}}" class="post-classic-figure" href="{{$a['link']}}">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </a>
                        <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-content">
                            <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-time">
                                <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                            <h5 data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <p data-app-id="{{z(class)|upset_class()}}" class="post-classic-text">{{$a['content']|text(150)}}...</p>
                        </div>
                    </article>
                </div>
                {{/loop}}
            </div>
    </section>
    {{file footer}}
</body>
</html>