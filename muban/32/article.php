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
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="{{z(class)|upset_class()}} page">
{{file header}}
    <div class="{{z(class)|upset_class()}} section page-header breadcrumbs-custom-wrap bg-image" style="background-image: url({{if i('cid') == 3}} {{z(works_banner_img)}} {{elseif i('cid') == 4}} {{z(news_banner_img)}} {{/if}})">
        <section class="{{z(class)|upset_class()}} breadcrumbs-custom breadcrumbs-custom-svg">
            <div class="{{z(class)|upset_class()}} container">
                <br><br>
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
        </section>
    </div>
    <section class="{{z(class)|upset_class()}} section section-lg bg-default text-start novi-bg novi-bg-img">
        <div class="{{z(class)|upset_class()}} container">
            <div class="{{z(class)|upset_class()}} row row-70 row-ten row-fix justify-content-xl-between">
                <div class="{{z(class)|upset_class()}} col-xl-3">
                    <div class="{{z(class)|upset_class()}} row row-70 row-fix align-items-md-center">
                        <div class="{{z(class)|upset_class()}} col-md-6 col-xl-12 text-md-start">
                            <h6>留言</h6>
                            <form class="{{z(class)|upset_class()}} rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{host}}">
                                <div class="{{z(class)|upset_class()}} row row-20 row-fix">
                                    <div class="{{z(class)|upset_class()}} col-md-12">
                                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                            <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-name">First name</label>
                                            <input class="{{z(class)|upset_class()}} form-input" id="form-1-name" type="text" name="name" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-md-12">
                                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                            <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-email">E-mail</label>
                                            <input class="{{z(class)|upset_class()}} form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required">
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-sm-12">
                                        <div class="{{z(class)|upset_class()}} form-wrap form-wrap-validation">
                                            <label class="{{z(class)|upset_class()}} form-label-outside" for="form-1-message">Message</label>
                                            <textarea class="{{z(class)|upset_class()}} form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                                        </div>
                                    </div>
                                    <div class="{{z(class)|upset_class()}} col-sm-12 offset-custom-4">
                                        <div class="{{z(class)|upset_class()}} form-button">
                                            <button class="{{z(class)|upset_class()}} button button-primary button-nina" type="submit">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="{{z(class)|upset_class()}} col-xl-6">
                    <div class="{{z(class)|upset_class()}} row row-120 row-fix">
                        <div class="{{z(class)|upset_class()}} col-sm-12">
                            <h3>{{$article['title']}}</h3>
                            <div class="{{z(class)|upset_class()}} divider divider-default"></div>
                            {{$article['content']}}
                        </div>
                        {{$prevset=array()}}
                        {{$prevset['column']=id,title}}
                        {{$prevset['order']=id desc}}
                        {{$prevset['other']=`"id<".$article['id']}}
                        {{$prev=a($prevset)}}
                        {{if $prev}}
                        <a href="{{$prev['link']}}">{{$prev['title']}}</a>
                        {{/if}}
                        {{$nextset=array()}}
                        {{$nextset['column']=id,title}}
                        {{$nextset['other']=`"id>".$article['id']}}
                        {{$nextset['order']=id asc}}
                        {{$next=a($nextset)}}
                        {{if $next}}
                        <a href="{{$next['link']}}">{{$next['title']}}</a>
                        {{/if}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
{{file footer}}
</body>
</html>