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
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section section-bredcrumbs" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}})">
        <div class="{{z(class)|upset_class()}} container-fluid context-dark">
            <div class="{{z(class)|upset_class()}} row g-0 justify-content-xl-center">
                <div class="{{z(class)|upset_class()}} col-xxl-10">
                    <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                        <h2 class="{{z(class)|upset_class()}} decorative-title">{{i(name)}}</h2>
                    </div>
                    <ol class="{{z(class)|upset_class()}} breadcrumbs-custom">
                        <li>
                            <a href="{{host}}">首页</a>
                        </li>
                        <li>{{$article['title']}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-sm bg-white">
        <div class="{{z(class)|upset_class()}} container container-fluid">
            <div class="{{z(class)|upset_class()}} row row-60 g-xxl-0">
                <div class="{{z(class)|upset_class()}} col-lg-7 col-xl-7 col-xxl-6 offset-xxl-1 section-disabled-padding-top">
                    <section class="{{z(class)|upset_class()}} post-single-body section-lg bg-white">
                        <div class="{{z(class)|upset_class()}} decorative decorative-lg">
                            <h3 class="{{z(class)|upset_class()}} decorative-title post-heading">{{$article['title']}}</h3>
                            <ul class="{{z(class)|upset_class()}} post-meta list-dotted">
                                <li>
                                    <span class="{{z(class)|upset_class()}} time">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                </li>
                                <li>
                                    <span class="{{z(class)|upset_class()}} post-comments">{{$article['click']}}</span>
                                </li>
                            </ul>
                        </div>
                        {{$article['content']}}
                    </section>
                    <section class="{{z(class)|upset_class()}} section-lg bg-white post-single-section">
                        <div class="{{z(class)|upset_class()}} decorative decorative-lg text-center text-sm-start">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,pic,shijian,click}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div class="{{z(class)|upset_class()}} post-project unit unit-spacing-md flex-column flex-sm-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a href="{{$prev['link']}}">
                                        <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="220" height="160">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body project-body">
                                    <div class="{{z(class)|upset_class()}} project-caption">
                                        <p class="{{z(class)|upset_class()}} project-date">
                                            <span class="{{z(class)|upset_class()}} project-date">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                        </p>
                                        <h6 class="{{z(class)|upset_class()}} project-title">
                                            <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                                        </h6>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} project-meta">
                                        <span class="{{z(class)|upset_class()}} comment">
                                            {{$prev['click']}}<p class="{{z(class)|upset_class()}} link-gray-dark"></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,pic,shijian,click}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <div class="{{z(class)|upset_class()}} post-project unit unit-spacing-md flex-column flex-sm-row">
                                <div class="{{z(class)|upset_class()}} unit-left">
                                    <a href="{{$next['link']}}">
                                        <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="220" height="160">
                                    </a>
                                </div>
                                <div class="{{z(class)|upset_class()}} unit-body project-body">
                                    <div class="{{z(class)|upset_class()}} project-caption">
                                        <p class="{{z(class)|upset_class()}} project-date">
                                            <span class="{{z(class)|upset_class()}} project-date">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</span>
                                        </p>
                                        <h6 class="{{z(class)|upset_class()}} project-title">
                                            <a href="{{$next['link']}}">{{$next['title']}}</a>
                                        </h6>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} project-meta">
                                        <span class="{{z(class)|upset_class()}} comment">
                                            {{$next['click']}}<p class="{{z(class)|upset_class()}} link-gray-dark"></p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{/if}}
                        </div>
                    </section>
                </div>
                <div class="{{z(class)|upset_class()}} col-lg-5 col-xl-4 col-xxl-3 offset-xl-1">
                    <aside class="{{z(class)|upset_class()}} text-start">
                        <div class="{{z(class)|upset_class()}} row row-60 row-lg-90">
                            <div class="{{z(class)|upset_class()}} col-md-12 col-lg-12">
                                <div class="{{z(class)|upset_class()}} decorative decorative-md">
                                    <h5 class="{{z(class)|upset_class()}} decorative-title">搜索</h5>
                                    <form class="{{z(class)|upset_class()}} form-search rd-search rd-mailform-inline rd-mailform-small" action="{{host}}" method="GET">
                                        <div class="{{z(class)|upset_class()}} form-wrap">
                                            <label class="{{z(class)|upset_class()}} form-label form-search-label form-label-sm" for="blog-sidebar-2-form-search-widget">搜索...</label>
                                            <input class="{{z(class)|upset_class()}} form-input form-search-input form-control #{inputClass}" id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="{{z(class)|upset_class()}} button button-sm button-secondary form-search-submit" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="{{z(class)|upset_class()}} col-md-6 col-lg-12">
                                <div class="{{z(class)|upset_class()}} decorative">
                                    <div class="{{z(class)|upset_class()}} decorative decorative-md">
                                        <h5 class="{{z(class)|upset_class()}} decorative-title">导航</h5>
                                        <ul class="{{z(class)|upset_class()}} list-marked list-marked-1">
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
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>