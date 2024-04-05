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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
</head>
<body>
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-inset-1 bg-default text-center bg-image background-position-1" id="home" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}})">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="title-style-1-wrap">
                <div data-app-id="{{z(class)|upset_class()}}" class="oh-desktop wow slideInLeft">
                    <h2 data-app-id="{{z(class)|upset_class()}}" class="title-style-1 wow slideInRight">{{i(name)}}</h2>
                </div>
            </div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 row-md-60 justify-content-center justify-content-xl-between">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row row-50 row-md-60 row-lg-80">
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                            <article data-app-id="{{z(class)|upset_class()}}" class="post post-modern">
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-modern-panel">
                                    <div>
                                        <a data-app-id="{{z(class)|upset_class()}}" class="post-modern-tag link-tag" href="{{i(url)}}">{{i(name)}}</a>
                                    </div>
                                    <div>
                                        <time data-app-id="{{z(class)|upset_class()}}" class="post-modern-time" datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                </div>
                                <h3 data-app-id="{{z(class)|upset_class()}}" class="post-modern-title">{{$article['title']}}</h3>
                                <p data-app-id="{{z(class)|upset_class()}}" class="post-modern-text">{{$article['content']}}</p>
                            </article>
                        </div>
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-12">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,shijian,content,pic}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit flex-column flex-sm-row unit-spacing-md">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                        <a data-app-id="{{z(class)|upset_class()}}" class="box-comment-figure" href="{{$prev['link']}}">
                                            <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="100" height="100">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-justify">
                                            <div>
                                                <div data-app-id="{{z(class)|upset_class()}}" class="group-xs group-middle">
                                                    <h5 data-app-id="{{z(class)|upset_class()}}" class="box-comment-author">
                                                        <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="box-comment-time">
                                                <time datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                            </div>
                                        </div>
                                        <p data-app-id="{{z(class)|upset_class()}}" class="box-comment-text">{{$prev['content']|text(150)}}...</p>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,shijian,content,pic}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <div data-app-id="{{z(class)|upset_class()}}" class="box-comment">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit flex-column flex-sm-row unit-spacing-md">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                        <a data-app-id="{{z(class)|upset_class()}}" class="box-comment-figure" href="{{$next['link']}}">
                                            <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="100" height="100">
                                        </a>
                                    </div>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-justify">
                                            <div>
                                                <div data-app-id="{{z(class)|upset_class()}}" class="group-xs group-middle">
                                                    <h5 data-app-id="{{z(class)|upset_class()}}" class="box-comment-author">
                                                        <a href="{{$next['link']}}">{{$next['title']}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="box-comment-time">
                                                <time datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                            </div>
                                        </div>
                                        <p data-app-id="{{z(class)|upset_class()}}" class="box-comment-text">{{$next['content']|text(150)}}...</p>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                        </div>
                    </div>
                </div>
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4 col-xl-3">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row row-60 aside text-sm-start">
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-12 aside-item">
                            <form data-app-id="{{z(class)|upset_class()}}" class="rd-search form-search" action="{{host}}" method="GET">
                                <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                    <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="search-form">Search blog...</label>
                                    <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                    <button data-app-id="{{z(class)|upset_class()}}" class="button-search fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                            <div data-app-id="{{z(class)|upset_class()}}" class="aside-title">导航</div>
                            <ul data-app-id="{{z(class)|upset_class()}}" class="list-style-1 list-style-2">
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
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-12 aside-item">
                            <div data-app-id="{{z(class)|upset_class()}}" class="aside-title">最新咨询</div>
                            <div data-app-id="{{z(class)|upset_class()}}" class="post-minimal-wrap">
                                {{$set=array()}}
                                {{$set['cid']=0}}
                                {{$set['pagesize']=3}}
                                {{$set['column']=id,title,pic,shijian}}
                                {{$articles=alist($set)}}
                                {{loop $articles['list'] as $a}}
                                <article data-app-id="{{z(class)|upset_class()}}" class="post-minimal post-minimal-2">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-md align-items-center">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                            <a data-app-id="{{z(class)|upset_class()}}" class="post-minimal-figure" href="{{$a['link']}}">
                                                <img src="{{$a['pic']}}" alt="{{$a['title']}}" style="width: 100px;height: 100px;">
                                            </a>
                                        </div>
                                        <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                            <div data-app-id="{{z(class)|upset_class()}}" class="post-minimal-time">
                                                <time datetime="{{$a['shijian']|date('Y-m-d',this)}}">{{$a['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                            </div>
                                            <p data-app-id="{{z(class)|upset_class()}}" class="post-minimal-title">
                                                <a href="{{$a['link']}}">{{$a['title']}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                {{/loop}}
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