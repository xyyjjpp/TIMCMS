{{$set=array()}}
{{$set['where']['id']=intval($_GET['id'])}}
{{$article=a($set)}}
{{if !$article}}
{{notfound()}}
{{/if}}
{{$editinfo=array()}}
{{$editinfo['id']=$article['id']}}
{{$editinfo['click']=$article['click']+1}}
{{$return=aedit($editinfo)}}
{{file seo}}
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} wrapper-triangle">
        <div class="{{z(class)|upset_class()}} pen">
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
            <div class="{{z(class)|upset_class()}} line-triangle">
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
                <div class="{{z(class)|upset_class()}} triangle"></div>
            </div>
        </div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} bg-gray-7">
        <div class="{{z(class)|upset_class()}} breadcrumbs-custom box-transform-wrap context-dark">
            <div class="{{z(class)|upset_class()}} container">
                <h3 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{i(name)}}</h3>
                <div class="{{z(class)|upset_class()}} breadcrumbs-custom-decor"></div>
            </div>
            <div class="{{z(class)|upset_class()}} box-transform" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});"></div>
        </div>
        <div class="{{z(class)|upset_class()}} container">
            <ul class="{{z(class)|upset_class()}} breadcrumbs-custom-path">
                <li>
                    <a href="{{host}}">首页</a>
                </li>
                <li>
                    <a href="{{i(url)}}">{{i(name)}}</a>
                </li>
                <li class="{{z(class)|upset_class()}} active">{{$article['title']}}</li>
            </ul>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-60 row-xl-75">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <div class="{{z(class)|upset_class()}} single-post section-style-2">
                        <h5 class="{{z(class)|upset_class()}} text-spacing-50 font-weight-normal text-transform-none">{{$article['title']}}</h5>
                        <div class="{{z(class)|upset_class()}} group-md group-middle">
                            <time class="{{z(class)|upset_class()}} post-classic-time" datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            <div>
                                <ul class="{{z(class)|upset_class()}} list-inline list-inline-xl post-classic-info">
                                    <li class="{{z(class)|upset_class()}} post-classic-views">
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-eye"></span>
                                        <span>{{$article['click']}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{$article['content']}}
                    </div>
                    <div class="{{z(class)|upset_class()}} single-post-title"></div>
                    <div class="{{z(class)|upset_class()}} row row-lg row-30 justify-content-center">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,shijian}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div class="{{z(class)|upset_class()}} col-sm-6">
                            <article class="{{z(class)|upset_class()}} post post-classic post-classic-2">
                                <div class="{{z(class)|upset_class()}} post-classic-figure">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="370" height="365">
                                </div>
                                <div class="{{z(class)|upset_class()}} post-classic-content">
                                    <p class="{{z(class)|upset_class()}} post-classic-title">
                                        <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                    </p>
                                </div>
                                <time class="{{z(class)|upset_class()}} post-classic-time" datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </article>
                        </div>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title,pic,shijian}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div class="{{z(class)|upset_class()}} col-sm-6">
                            <article class="{{z(class)|upset_class()}} post post-classic post-classic-2">
                                <div class="{{z(class)|upset_class()}} post-classic-figure">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="370" height="365">
                                </div>
                                <div class="{{z(class)|upset_class()}} post-classic-content">
                                    <p class="{{z(class)|upset_class()}} post-classic-title">
                                        <a href="{{$next['link']}}">{{$next['title']}}</a>
                                    </p>
                                </div>
                                <time class="{{z(class)|upset_class()}} post-classic-time" datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                            </article>
                        </div>
                        {{/if}}
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} inset-left-xl-40">
                        <div class="{{z(class)|upset_class()}} aside row row-60 row-xl-75">
                            <div class="{{z(class)|upset_class()}} aside-item col-12">
                                <form class="{{z(class)|upset_class()}} form-search rd-search form-search" action="{{host}}" method="GET">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <label class="{{z(class)|upset_class()}} form-label" for="search-form-2">搜索...</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="search-form-2" type="text" name="s" autocomplete="off">
                                        <button class="{{z(class)|upset_class()}} button-search fl-bigmug-line-search74" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <div class="{{z(class)|upset_class()}} aside-item col-md-6 col-lg-12">
                                <h6 class="{{z(class)|upset_class()}} aside-title">导航</h6>
                                <ul class="{{z(class)|upset_class()}} list-marked-2 list-category-2">
                                    {{$channels=c(0,999,0,1)}}
                                    {{loop $channels as $channel}}
                                    {{if $channel['cid']!=1}}
                                    <li>
                                        <a href="{{$channel['url']}}">{{$channel['name']}}</a>
                                    </li>
                                    {{/if}}
                                    {{/loop}}
                                </ul>
                            </div>
                            <div class="{{z(class)|upset_class()}} aside-item col-md-6 col-lg-12">
                                <h6 class="{{z(class)|upset_class()}} aside-title">最新资讯</h6>
                                <div class="{{z(class)|upset_class()}} list-popular-post">
                                    {{$set=array()}}
                                    {{$set['cid']=0}}
                                    {{$set['pagesize']=5}}
                                    {{$set['column']=id,title,pic,shijian}}
                                    {{$articles=alist($set)}}
                                    {{loop $articles['list'] as $a}}
                                    <div class="{{z(class)|upset_class()}} list-popular-post-item">
                                        <article class="{{z(class)|upset_class()}} post post-minimal">
                                            <div class="{{z(class)|upset_class()}} unit unit-spacing-2 align-items-center unit-spacing-md">
                                                <div class="{{z(class)|upset_class()}} unit-left">
                                                    <a class="{{z(class)|upset_class()}} post-minimal-figure" href="">
                                                        <img src="{{$a['pic']}}" alt="{{$a['title']}}" style="width:106px;height:104px;">
                                                    </a>
                                                </div>
                                                <div class="{{z(class)|upset_class()}} unit-body">
                                                    <p class="{{z(class)|upset_class()}} post-minimal-title">
                                                        <a href="{{$a['link']}}">{{$a['title']}}</a>
                                                    </p>
                                                    <div class="{{z(class)|upset_class()}} post-minimal-time">
                                                        <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    {{/loop}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>