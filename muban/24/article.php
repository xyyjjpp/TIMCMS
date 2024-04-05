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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}assets/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
</head>
<body>
<div class="page">
{{file header}}
    <div class="section page-header breadcrumbs-custom-wrap bg-image bg-image-9" style="background-image: url('{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}')">
        <section class="breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="container">
                <p class="heading-1 breadcrumbs-custom-title">{{i(name)}}</p>
                <ul class="breadcrumbs-custom-path">
                    <li>
                        <a href="{{host}}">首页</a>
                    </li>
                    <li class="active">{{i(name)}}</li>
                    <li class="active">{{$article['title']}}</li>
                </ul>
            </div>
        </section>
    </div>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-10 col-xl-8">
                    <article class="post-blog-article">
                        <p class="post-blog-article-title">{{$article['title']}}</p>
                        <ul class="post-blog-article-meta group-xl">
                            <li>
                                <div class="box-inline">
                                    <span class="icon novi-icon icon-md icon-primary mdi mdi-calendar-clock"></span>
                                    <time datetime="{{$article['shijian']|date('Y',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                </div>
                            </li>
                        </ul>
                        <article class="quote-primary">
                            {{$article['content']}}
                        </article>
                    </article>
                    <div class="section-md bg-default">
                        <div class="comment-group">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title,pic,shijian,content}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <article class="comment">
                                <div class="comment-avatar">
                                    <img src="{{$prev['pic']}}" alt="{{$prev['title']}}" width="80" height="80">
                                </div>
                                <div class="comment-body">
                                    <div class="comment-header">
                                        <p class="comment-title">{{$prev['title']}}</p>
                                        <time class="comment-time" datetime="{{$prev['shijian']|date('Y',this)}}">{{$prev['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                    <div class="comment-text">
                                        <p>{{$prev['content']|text(150)}}...</p>
                                    </div>
                                    <div class="comment-footer">
                                        <a class="comment-link-reply" href="{{$prev['link']}}">阅读</a>
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
                            <article class="comment">
                                <div class="comment-avatar">
                                    <img src="{{$next['pic']}}" alt="{{$next['title']}}" width="80" height="80">
                                </div>
                                <div class="comment-body">
                                    <div class="comment-header">
                                        <p class="comment-title">{{$next['title']}}</p>
                                        <time class="comment-time" datetime="{{$next['shijian']|date('Y',this)}}">{{$next['shijian']|date('Y-m-d H:i:s',this)}}</time>
                                    </div>
                                    <div class="comment-text">
                                        <p>{{$next['content']|text(150)}}...</p>
                                    </div>
                                    <div class="comment-footer">
                                        <a class="comment-link-reply" href="{{$next['link']}}">阅读</a>
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
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 justify-content-md-center">
                <div class="col-lg-10 col-xl-8">
                    <h3 class="text-center">订阅邮箱</h3>
                    <form class="rd-mailform rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{host}}">
                        <div class="rd-mailform-inline-inner">
                            <div class="form-wrap">
                                <input class="form-input" type="email" name="email" data-constraints="@Email @Required" id="subscribe-form-email-1">
                                <label class="form-label" for="subscribe-form-email-1">Enter your e-mail</label>
                            </div>
                            <button class="button form-button button-sm button-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>