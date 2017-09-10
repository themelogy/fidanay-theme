<div class="col-md-3">
    <div class="title-lines-sidebar m-bot-30">
        <div class="title-block uppercase">
            {{ trans('blog::category.title.category') }}
        </div>
    </div>
    <ul class="nav bs-sidenav blog-categories m-bot-30">
        @foreach(BlogCategory::all() as $category)
        <li @if(Request::segment(4) == $category->slug)class="current" @endif>
            <a href="{{ $category->url }}" class="uppercase">
                <span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>
                {{ $category->name }}
            </a>
        </li>
        @endforeach
    </ul>

    <div class="title-lines-sidebar m-bot-30">
        <div class="title-block">
            {{ trans('themes::blog.authors') }}
        </div>
    </div>

    <ul class="nav bs-sidenav blog-categories m-bot-30">
        @foreach(app(\Modules\User\Repositories\UserRepository::class)->all()->except(3) as $author)
            <li @if(Request::segment(4) == $author->slug)class="current" @endif>
                <a href="{{ route('blog.author', [$author->slug]) }}">
                    <span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>
                    {{ $author->fullname }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- TABS  -->
    <div class="tabs custom-tabs m-bot-30">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab1" data-toggle="tab">{{ trans('themes::blog.popular') }}</a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab">{{ trans('themes::blog.latest') }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane tab-pop-cat-container active">
                <ul class="latest-post-container">
                    @foreach(Blog::popular(3) as $popular)
                    <li class="latest-post-sidebar row clearfix">
                        <div class="lp-img-cont left col-md-5">
                            <a href="{{ $popular->url }}"><img src="{{ $popular->present()->firstImage(90,90,'fit',80) }}" alt="{{ $popular->title }}"></a>
                        </div>
                        <div class="lp-title-cont left col-md-7">
                            <p class="latest-post-sidebar-title"><a class="a-invert" href="{{ $popular->url }}">{{ $popular->title }}</a></p>
                            <p class="latest-post-sidebar-date">{{ $popular->created_at->formatLocalized('%d %B %Y') }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div id="tab2" class="tab-pane tab-pop-cat-container">
                <ul class="latest-post-container">
                    @foreach(Blog::latest(3) as $latest)
                        <li class="latest-post-sidebar row clearfix">
                            <div class="lp-img-cont col-md-5 left">
                                <a href="{{ $latest->url }}"><img src="{{ $latest->present()->firstImage(90,90,'fit',80) }}" alt="{{ $latest->title }}"></a>
                            </div>
                            <div class="lp-title-cont col-md-7 left">
                                <p class="latest-post-sidebar-title"><a class="a-invert" href="{{ $latest->url }}">{{ $latest->title }}</a></p>
                                <p class="latest-post-sidebar-date">{{ $latest->created_at->formatLocalized('%d %B %Y') }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="title-lines-sidebar m-bot-30">
        <div class="title-block">
            {{ trans('themes::theme.tags') }}
        </div>
    </div>

    <div class="tag-cloud m-top-30 m-bot-20">
        <ul class="clearfix">
            @if(Request::route()->getName() == 'blog.index')
                @foreach(Blog::latest(10) as $recent)
                    <?php $tag = $recent->tags()->first(); ?>
                    @if($tag)
                        <li><a class="button small thin" href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a></li>
                    @endif
                @endforeach
            @else
                @foreach($post->tags()->get() as $tag)
                    <li><a class="button small thin" href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a></li>
                @endforeach
            @endif
        </ul>
    </div>

</div>