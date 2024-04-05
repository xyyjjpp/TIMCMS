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
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section breadcrumbs-custom parallax-container context-dark" data-parallax-img="{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}">
        <div class="{{z(class)|upset_class()}} parallax-content">
            <div class="{{z(class)|upset_class()}} container">
                <p class="{{z(class)|upset_class()}} heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
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
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default">
        <div class="{{z(class)|upset_class()}} container container-wide">
            <div class="{{z(class)|upset_class()}} row justify-content-sm-center">
                <div class="{{z(class)|upset_class()}} col-lg-10 col-xl-8 col-xxl-6 sections-collapsable single-post-wrap">
                    <article class="{{z(class)|upset_class()}} post-blog-article">
                        <p class="{{z(class)|upset_class()}} post-blog-article-title">{{$article['title']}}</p>
                        <ul class="{{z(class)|upset_class()}} post-blog-article-meta group-xl">
                            <li>
                                <div class="{{z(class)|upset_class()}} box-inline">
                                    <span class="{{z(class)|upset_class()}} icon novi-icon icon-md icon-primary mdi mdi-calendar-clock"></span>
                                    <time datetime="{{$article['shijian']|date('Y-m-d',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </li>
                        </ul>
                        {{$article['content']}}
                    </article>
                    <div class="{{z(class)|upset_class()}} section-md">
                        <div class="{{z(class)|upset_class()}} comment-group">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,pic,shijian,content}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <article class="{{z(class)|upset_class()}} comment">
                                <div class="{{z(class)|upset_class()}} comment-avatar">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="80" height="80">
                                </div>
                                <div class="{{z(class)|upset_class()}} comment-body">
                                    <div class="{{z(class)|upset_class()}} comment-header">
                                        <p class="{{z(class)|upset_class()}} comment-title">{{$prev['title']}}</p>
                                        <time class="{{z(class)|upset_class()}} comment-time" datetime="{{$prev['shijian']|date('Y-m-d',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} comment-text">
                                        <p>{{$prev['content']|text(100)}}...</p>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} comment-footer">
                                        <a class="{{z(class)|upset_class()}} comment-link-reply" href="{{$prev['link']}}">阅读</a>
                                    </div>
                                </div>
                            </article>
                            {{/if}}
                            {{$nextset=array()}}
                            {{$nextset['column']=id,title,pic,shijian,content}}
                            {{$nextset['other']=`"id>".$article['id']}}
                            {{$nextset['order']=id asc}}
                            {{$next=a($nextset)}}
                            {{if $next}}
                            <article class="{{z(class)|upset_class()}} comment">
                                <div class="{{z(class)|upset_class()}} comment-avatar">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="80" height="80">
                                </div>
                                <div class="{{z(class)|upset_class()}} comment-body">
                                    <div class="{{z(class)|upset_class()}} comment-header">
                                        <p class="{{z(class)|upset_class()}} comment-title">{{$next['title']}}</p>
                                        <time class="{{z(class)|upset_class()}} comment-time" datetime="{{$next['shijian']|date('Y-m-d',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} comment-text">
                                        <p>{{$next['content']|text(100)}}...</p>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} comment-footer">
                                        <a class="{{z(class)|upset_class()}} comment-link-reply" href="{{$next['link']}}">阅读</a>
                                    </div>
                                </div>
                            </article>
                            {{/if}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} section section-lg bg-gray-100 novi-background bg-cover">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-fix row-50 justify-content-md-center">
                <div class="{{z(class)|upset_class()}} col-md-9 col-lg-7 col-xl-6">
                    <h3 class="{{z(class)|upset_class()}} text-center">订阅</h3>
                    <form class="{{z(class)|upset_class()}} rd-mailform rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                        <div class="{{z(class)|upset_class()}} rd-mailform-inline-inner">
                            <div class="{{z(class)|upset_class()}} form-wrap">
                                <input class="{{z(class)|upset_class()}} form-input button-ellipse-xl" type="email" name="email" data-constraints="@Email @Required" id="subscribe-form-email-1">
                                <label class="{{z(class)|upset_class()}} form-label" for="subscribe-form-email-1">Enter your e-mail</label>
                            </div>
                            <button class="{{z(class)|upset_class()}} button form-button button-sm button-primary button-ellipse-xl" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>