{{file seo}}
<link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
<link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="page">
    {{file header}}
    <div class="section page-header breadcrumbs-custom-wrap bg-image bg-image-9" style="background-image: url('{{z(works_banner_img)}}')">
        <section class="breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="container">
                <p class="heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="active">Our Project</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="section section-xl bg-gray-lighter novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-40 row-md-50">
                {{$set=array()}}
                {{$set['cid']=`cid}}
                {{$set['pagesize']=6}}
                {{$set['page']=page}}
                {{$set['column']=id,title,shijian,pic,content}}
                {{$articles=alist($set)}}
                {{loop $articles['list'] as $a}}
                <div class="col-md-6 col-xl-4">
                    <article class="post-default">
                        <div class="post-figure">
                            <img src="{{$a['pic']}}" alt="{{$a['title']}}">
                        </div>
                        <div class="post-body">
                            <div class="post-meta">
                                <span class="icon icon-sm icon-primary mdi mdi-clock"></span>
                                <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </div>
                            <h5 class="post-title">
                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                            </h5>
                            <div class="post-text">{{$a['content']|text(150)}}...</div>
                            <a class="button-link" href="{{$a['link']}}">阅读<span class="icon mdi mdi-arrow-right"></span>
                            </a>
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