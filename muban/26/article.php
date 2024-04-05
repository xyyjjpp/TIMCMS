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
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} preloader">
    <div class="{{z(class)|upset_class()}} banter-loader">
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"> </div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
        <div class="{{z(class)|upset_class()}} banter-loader__box"></div>
    </div>
</div>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} breadcrumbs-custom bg-image context-dark" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});">
        <div class="{{z(class)|upset_class()}} container">
            <h2 class="{{z(class)|upset_class()}} breadcrumbs-custom-title">{{$article['title']}}</h2>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section-xs bg-white">
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
    <div class="{{z(class)|upset_class()}} divider-section"></div>
    <section class="{{z(class)|upset_class()}} section section-md bg-default">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row justify-content-lg-center">
                <div class="{{z(class)|upset_class()}} col-lg-8">
                    <article class="{{z(class)|upset_class()}} blog-post-solo">
                        <h4>{{$article['title']}}</h4>
                        {{$article['content']}}
                        <div class="{{z(class)|upset_class()}} blog-post-solo-footer">
                            <div class="{{z(class)|upset_class()}} blog-post-solo-footer-left">
                                <ul class="{{z(class)|upset_class()}} blog-post-solo-footer-list">
                                    <li>
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-clock"></span>{{$article['shijian']|date('Y-m-d H:i:s',this)}}
                                    </li>
                                    <li>
                                        <span class="{{z(class)|upset_class()}} icon mdi mdi-thumb-up-outline"></span>{{$article['click']}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="{{z(class)|upset_class()}} post-simple-group">
                            <div class="{{z(class)|upset_class()}} post-simple-group-divider"></div>
                            <div class="{{z(class)|upset_class()}} row row-30">
                                {{$prevset=array()}}
                                {{$prevset['column']=id,title,pic,shijian}}
                                {{$prevset['order']=id desc}}
                                {{$prevset['other']=`"id<".$article['id']}}
                                {{$prev=a($prevset)}}
                                {{if $prev}}
                                <div class="{{z(class)|upset_class()}} col-sm-6">
                                    <article class="{{z(class)|upset_class()}} post-simple">
                                        <div class="{{z(class)|upset_class()}} post-simple-img">
                                            <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="736" height="540">
                                        </div>
                                        <div class="{{z(class)|upset_class()}} post-simple-body">
                                            <div class="{{z(class)|upset_class()}} post-simple-title">
                                                <h4>
                                                    <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                                </h4>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-simple-time">
                                                <span class="{{z(class)|upset_class()}} icon mdi mdi-clock"></span>
                                                <a class="{{z(class)|upset_class()}} time">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</a>
                                            </div>
                                        </div>
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
                                    <article class="{{z(class)|upset_class()}} post-simple">
                                        <div class="{{z(class)|upset_class()}} post-simple-img">
                                            <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="736" height="540">
                                        </div>
                                        <div class="{{z(class)|upset_class()}} post-simple-body">
                                            <div class="{{z(class)|upset_class()}} post-simple-title">
                                                <h4>
                                                    <a href="{{$next['link']}}">{{$next['title']}}</a>
                                                </h4>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-simple-time">
                                                <span class="{{z(class)|upset_class()}} icon mdi mdi-clock"></span>
                                                <a class="{{z(class)|upset_class()}} time">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                {{/if}}
                            </div>
                        </div>
                    </article>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-4">
                    <div class="{{z(class)|upset_class()}} pdl-xl-40">
                        <div class="{{z(class)|upset_class()}} row row-60">
                            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-12">
                                <form class="{{z(class)|upset_class()}} form-lg rd-search rd-search-classic">
                                    <div class="{{z(class)|upset_class()}} form-wrap">
                                        <label class="{{z(class)|upset_class()}} form-label" for="rd-search-form-input">搜索...</label>
                                        <input class="{{z(class)|upset_class()}} form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                    </div>
                                    <button class="{{z(class)|upset_class()}} rd-search-submit" type="submit"> </button>
                                </form>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-12">
                                <div class="{{z(class)|upset_class()}} block-info-2">
                                    <div class="{{z(class)|upset_class()}} block-info-2-title">
                                        <h3>导航</h3>
                                    </div>
                                    <ul class="{{z(class)|upset_class()}} list-quadrate">
                                        {{$channels=c(0,999,0,1)}}
                                        {{loop $channels as $channel}}
                                        {{if $channel['cid']!=1}}
                                        <li>
                                            <a href="{{$channel['url']}}">
                                                <span class="{{z(class)|upset_class()}} list-quadrate-text">{{$channel['name']}}</span>
                                            </a>
                                        </li>
                                        {{/if}}
                                        {{/loop}}
                                    </ul>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-12">
                                <div class="{{z(class)|upset_class()}} block-info-2">
                                    <div class="{{z(class)|upset_class()}} block-info-2-title">
                                        <h3>最新发布</h3>
                                    </div>
                                    {{$set=array()}}
                                    {{$set['cid']=0}}
                                    {{$set['pagesize']=3}}
                                    {{$set['column']=id,title,shijian,pic}}
                                    {{$articles=alist($set)}}
                                    {{loop $articles['list'] as $a}}
                                    <a class="{{z(class)|upset_class()}} post-minimal-1" href="#">
                                        <div class="{{z(class)|upset_class()}} post-minimal-1-left">
                                            <img src="{{$a['pic']}}" alt="{{$a['title']}}" width="212" height="208">
                                        </div>
                                        <div class="{{z(class)|upset_class()}} post-minimal-1-body">
                                            <div class="{{z(class)|upset_class()}} post-minimal-1-title">
                                                <span>{{$a['title']}}</span>
                                            </div>
                                            <div class="{{z(class)|upset_class()}} post-minimal-1-text">
                                                <span>{{$a['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                            </div>
                                        </div>
                                    </a>
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