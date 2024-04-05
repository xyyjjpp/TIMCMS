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
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css" id="main-styles-link">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-inset">
        <div data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom context-dark">
            <div data-app-id="{{z(class)|upset_class()}}" class="container">
                <h2 data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-title">{{i(name)}}</h2>
                <ul data-app-id="{{z(class)|upset_class()}}" class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">{{i(name)}}</li>
                    <li data-app-id="{{z(class)|upset_class()}}" class="active">{{$article['title']}}</li>
                </ul>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="box-position" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}});"></div>
        </div>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section section-xl bg-default text-start">
        <div data-app-id="{{z(class)|upset_class()}}" class="container">
            <div data-app-id="{{z(class)|upset_class()}}" class="row row-70">
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-8">
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-post">
                        <article data-app-id="{{z(class)|upset_class()}}" class="post post-classic">
                            <h4 data-app-id="{{z(class)|upset_class()}}" class="post-classic-title">{{$article['title']}}</h4>
                            <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-panel group-middle justify-content-start">
                                <a data-app-id="{{z(class)|upset_class()}}" class="badge badge-secondary" href="{{i(url)}}">
                                    <svg xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="27px" viewbox="0 0 16 27" enable-background="new 0 0 16 27" xml:space="preserve">
                                                <path d="M0,0v6c4.142,0,7.5,3.358,7.5,7.5S4.142,21,0,21v6h16V0H0z"></path>
                                            </svg>
                                    <div>{{i(name)}}</div>
                                </a>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-comments">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-comments-o"></span>
                                    <p>{{$article['click']}}</p>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-classic-time">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon fa fa-clock-o"></span>
                                    <time datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </div>
                        </article>
                        <article data-app-id="{{z(class)|upset_class()}}" class="quote-classic quote-classic-big">
                            {{$article['content']}}
                        </article>
                    </div>
                    <div data-app-id="{{z(class)|upset_class()}}" class="blog-post-comments">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title,pic,shijian,content}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="box-comment">
                            <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-md flex-column flex-md-row align-items-lg-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <a data-app-id="{{z(class)|upset_class()}}" class="box-comment-figure" href="{{$prev['link']}}">
                                        <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="119" height="119">
                                    </a>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-justify">
                                        <div>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-middle">
                                                <p data-app-id="{{z(class)|upset_class()}}" class="box-comment-author">
                                                    <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                                </p>
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
                        {{$nextset['column']=id,title,pic,shijian,content}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="box-comment">
                            <div data-app-id="{{z(class)|upset_class()}}" class="unit unit-spacing-md flex-column flex-md-row align-items-lg-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <a data-app-id="{{z(class)|upset_class()}}" class="box-comment-figure" href="{{$next['link']}}">
                                        <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="119" height="119">
                                    </a>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-justify">
                                        <div>
                                            <div data-app-id="{{z(class)|upset_class()}}" class="group-sm group-middle">
                                                <p data-app-id="{{z(class)|upset_class()}}" class="box-comment-author">
                                                    <a href="{{$next['link']}}">{{$next['title']}}</a>
                                                </p>
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
                <div data-app-id="{{z(class)|upset_class()}}" class="col-lg-4">
                    <div data-app-id="{{z(class)|upset_class()}}" class="post-sidebar post-sidebar-inset">
                        <div data-app-id="{{z(class)|upset_class()}}" class="row row-lg row-60">
                            <div data-app-id="{{z(class)|upset_class()}}" class="col-sm-6 col-lg-12">
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-sidebar-item">
                                    <form data-app-id="{{z(class)|upset_class()}}" class="rd-search form-search form-post-search" action="{{host}}" method="GET">
                                        <div data-app-id="{{z(class)|upset_class()}}" class="form-wrap">
                                            <label data-app-id="{{z(class)|upset_class()}}" class="form-label" for="search-form">Search the blog...</label>
                                            <input data-app-id="{{z(class)|upset_class()}}" class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                            <button data-app-id="{{z(class)|upset_class()}}" class="button-search fl-bigmug-line-search74" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="post-sidebar-item">
                                    <h5>导航</h5>
                                    <div data-app-id="{{z(class)|upset_class()}}" class="post-sidebar-item-inset">
                                        <ul data-app-id="{{z(class)|upset_class()}}" class="list list-categories">
                                            {{$channels=c(0,999,0,1)}}
                                            {{loop $channels as $channel}}
                                            {{if $channel['cid']!=1}}
                                            <li>
                                                <a data-app-id="{{z(class)|upset_class()}}" class="active" href="{{$channel['url']}}">{{$channel['name']}}</a>
                                            </li>
                                            {{/if}}
                                            {{/loop}}
                                        </ul>
                                    </div>
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