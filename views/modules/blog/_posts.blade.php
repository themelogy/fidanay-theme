<div class="element col-md-12 m-bot-50">
    <div class="row">
		@if($post->files()->exists())
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="view view-first hovered pull-left">
                <a href="{{ $post->present()->firstImage(650,650,'resize',80) }}" class="lightbox">
                    <img src="{{ $post->present()->firstImage(300,300,'fit',80) }}" alt="{{ $post->title }}">
                    <div class="mask">
                        <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
                    </div>
                </a>
            </div>
        </div>
		@endif
        <div class="col-xs-12 col-sm-6 @if($post->files()->exists()) col-md-9 @else col-md-12 @endif">
            <div class="blog-caption-container">
                <h2><a class="a-invert" href="{{ $post->url }}">{{ $post->title }}</a></h2>
                <ul class="post-meta clearfix">
                    <li><span aria-hidden="true" class="icon_clock_alt"></span> {{ $post->created_at->formatLocalized('%d %B %Y') }}</li>
                    @if(isset($post->category))
					<li><span aria-hidden="true" class="icon_folder-alt"></span> <a href="{{ $post->category->url }}">{{ $post->category->name }}</a></li>
                    @endif
                    @if(isset($post->author))
                    <li><span aria-hidden="true" class="icon_profile"></span><a href="{{ route('blog.author', [$post->author->slug]) }}">{{ $post->author->fullname }}</a></li>
                    @endif
                    @if($post->tags()->exists())
                    <li><span aria-hidden="true" class="icon_tags_alt"></span>
                        @foreach($post->tags()->get() as $tag)
                            <a href="{{ $tag->url }}">{{ $tag->name }}</a>@if(!$loop->last), @endif
                        @endforeach
                    </li>
                    @endif
                </ul>
            </div>
            <div class="blog-carousel-text-container">
                {!! Str::words(strip_tags($post->intro),40) !!}
            </div>
            <div class="blog-carousel-button-container">
                <a class="button small gray-lite" href="{{ $post->url }}">{{ trans('global.buttons.read more') }}</a>
            </div>

        </div>
    </div>

</div>