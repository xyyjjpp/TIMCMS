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
    <link rel="stylesheet" href="{{tempdir}}assets/css/style.css">
    <link rel="stylesheet" href="{{tempdir}}assets/css/fonts.css">
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <section class="{{z(class)|upset_class()}} section-xxl text-center" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}})">
        <div class="{{z(class)|upset_class()}} container nonstandart-post-header">
            <div class="{{z(class)|upset_class()}} row justify-content-center">
                <div class="{{z(class)|upset_class()}} col-lg-8 col-xxl-6">
                    <br><br>
                    <h3>{{$article['title']}}</h3>
                </div>
            </div>
            <div class="{{z(class)|upset_class()}} post-meta">
                <div class="{{z(class)|upset_class()}} group">
                    <div class="{{z(class)|upset_class()}} icon-list-wrap icon icon-gray linear-icon-clock3">
                        <time datetime="{{$article['shijian']|date('Y',this)}}">{{$article['shijian']|date('Y-m-d H:i:s',this)}}</time>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="{{z(class)|upset_class()}} bg-default section-lg">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-60 justify-content-sm-center">
                <div class="{{z(class)|upset_class()}} col-lg-8 section-divided__main">
                    <section class="{{z(class)|upset_class()}} section-md post-single-body">
                        {{$article['content']}}
                    </section>
                    <section class="{{z(class)|upset_class()}} section-sm">
                        <div class="{{z(class)|upset_class()}} row row-60 justify-content-md-between">
                            {{$prevset=array()}}
                            {{$prevset['column']=id,title}}
                            {{$prevset['order']=id desc}}
                            {{$prevset['other']=`"id<".$article['id']}}
                            {{$prev=a($prevset)}}
                            {{if $prev}}
                            <div class="{{z(class)|upset_class()}} col-md-5 text-md-start">
                                <a class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md align-items-center" href="{{$prev['link']}}">
                                    <div class="{{z(class)|upset_class()}} unit-left">
                                        <span class="{{z(class)|upset_class()}} icon icon-md linear-icon-arrow-left"></span>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <p class="{{z(class)|upset_class()}} small">{{$prev['title']}}</p>
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
                            <div class="{{z(class)|upset_class()}} col-md-5 text-md-end">
                                <a class="{{z(class)|upset_class()}} unit flex-row unit-spacing-md align-items-center" href="{{$next['link']}}">
                                    <div class="{{z(class)|upset_class()}} unit-body">
                                        <p class="{{z(class)|upset_class()}} small">{{$next['title']}}</p>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} unit-right">
                                        <span class="{{z(class)|upset_class()}} icon icon-md linear-icon-arrow-right"></span>
                                    </div>
                                </a>
                            </div>
                            {{/if}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
{{file footer}}
</body>
</html>