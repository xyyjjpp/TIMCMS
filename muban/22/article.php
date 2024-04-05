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
    <link rel="stylesheet" type="text/css" href="{{tempdir}}static/css/css2.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/bootstrap.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}static/css/fonts.css">
</head>
<body>
<div data-app-id="{{z(class)|upset_class()}}" class="page">
{{file header}}
    <section data-app-id="{{z(class)|upset_class()}}" class="text-center">
        <section data-app-id="{{z(class)|upset_class()}}" class="section parallax-container" data-parallax-img="{{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}}">
            <div data-app-id="{{z(class)|upset_class()}}" class="parallax-content parallax-header parallax-light">
                <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__inner">
                    <div data-app-id="{{z(class)|upset_class()}}" class="parallax-header__content">
                        <div data-app-id="{{z(class)|upset_class()}}" class="container">
                            <div data-app-id="{{z(class)|upset_class()}}" class="row justify-content-sm-center">
                                <div data-app-id="{{z(class)|upset_class()}}" class="col-md-10 col-xl-8">
                                    <h2 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{i(name)}}</h2>
                                    <p data-app-id="{{z(class)|upset_class()}}" class="heading-6">{{$article['title']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section data-app-id="{{z(class)|upset_class()}}" class="section-sm bg-default">
        <div data-app-id="{{z(class)|upset_class()}}" class="container post-single">
            <div data-app-id="{{z(class)|upset_class()}}" class="post-single__header">
                <h4 data-app-id="{{z(class)|upset_class()}}" class="heading-decorated">{{$article['title']}}</h4>
                <div data-app-id="{{z(class)|upset_class()}}" class="post-meta">
                    <div data-app-id="{{z(class)|upset_class()}}" class="group">
                        <time datetime="{{$article['shijian']|date('Y',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                        <span>点击: {{$article['click']}}</span>
                    </div>
                </div>
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="post-single__body">
                {{$article['content']}}
            </div>
            <div data-app-id="{{z(class)|upset_class()}}" class="post-single__aside">
                <section data-app-id="{{z(class)|upset_class()}}" class="section-sm">
                    <div data-app-id="{{z(class)|upset_class()}}" class="row row-60 justify-content-md-between">
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-md-5 text-md-start">
                            <a data-app-id="{{z(class)|upset_class()}}" class="unit flex-row unit-spacing-md align-items-center" href="{{$prev['link']}}">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-left">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-md linear-icon-arrow-left"></span>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <p data-app-id="{{z(class)|upset_class()}}" class="small">{{$prev['title']}}</p>
                                </div>
                            </a>
                        </div>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <div data-app-id="{{z(class)|upset_class()}}" class="col-md-5 text-md-end">
                            <a data-app-id="{{z(class)|upset_class()}}" class="unit flex-row unit-spacing-md align-items-center" href="{{$next['link']}}">
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-body">
                                    <p data-app-id="{{z(class)|upset_class()}}" class="small">{{$next['title']}}</p>
                                </div>
                                <div data-app-id="{{z(class)|upset_class()}}" class="unit-right">
                                    <span data-app-id="{{z(class)|upset_class()}}" class="icon icon-md linear-icon-arrow-right"></span>
                                </div>
                            </a>
                        </div>
                        {{/if}}
                    </div>
                </section>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>