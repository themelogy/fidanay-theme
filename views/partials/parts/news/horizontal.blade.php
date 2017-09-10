@if(News::latest(10)->count() > 0)
<div class="title-lines-container">
    <div class="container">

        <div class="title-lines m-bot-30">
            <div class="title-block">
                {{ trans('themes::theme.news') }}
            </div>
            <div class="view-all-container">
                <div class="customNavigation clearfix">
                    <div class="carousel-va-container">
                        <a class="button medium gray-lite" href="{{ route('news.index') }}">{{ trans('themes::theme.buttons.view all') }}</a>
                    </div>
                    <div class="customNavigation-container">
                        <a class="prev-blog"></a>
                        <a class="next-blog"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box-with-hover">
            <div id="owl-blog" class="owl-carousel">
            @foreach(News::latest(10) as $news)
                <!-- Item -->
                <div class="item">
                    <div class="view view-first blog-hover hovered">
                        <a href="{{ $news->present()->firstImage(800,null,'resize',80) }}" class="lightbox">
                            @if($file = $news->present()->firstImage(263,157,'fit',80))
                            <img src="{{ $file }}" alt="Ipsum">
                            @endif
                            <div class="blog-item-date-cont">
                                <div class="blog-item-date">{{ $news->created_at->formatLocalized('%d') }}</div>
                                <div class="blog-item-mounth uppercase">{{ $news->created_at->formatLocalized('%B') }}</div>
                            </div>
                            <div class="mask">
                                <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
                            </div>
                        </a>
                    </div>
                    <div class="blog-carousel-caption-container">
                        <a class="a-invert" href="{{ $news->url }}">{{ $news->title }}</a>
                    </div>
                    <div class="blog-carousel-text-container">
                        {!! \Str::words(strip_tags($news->intro), 10) !!}
                    </div>
                    <div class="blog-carousel-button-container">
                        <a class="button small gray-lite" href="{{ $news->url }}">{!! trans('themes::theme.buttons.read more') !!}</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </div><!-- container end -->

</div>

@push('js_inline')
<script>
    jQuery(document).ready(function () {
        $("#owl-blog").owlCarousel({

            //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1000,4], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // betweem 900px and 601px
            itemsTablet: [470,1], //2 items between 600 and 0
            itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
            // itemsDesktop : [1199,4],
            // itemsDesktopSmall : [991,1],
            // itemsTablet: [991,1],
            // itemsMobile : false,

            //Pagination
            pagination : false,
            paginationNumbers: false,

        });
        var owl = $("#owl-blog");
        owl.owlCarousel();
        // Custom Navigation Events
        $(".next-blog").click(function(){
            owl.trigger('owl.next');
        });
        $(".prev-blog").click(function(){
            owl.trigger('owl.prev');
        });
        $(".play").click(function(){
            owl.trigger('owl.play',1000);
        });
        $(".stop").click(function(){
            owl.trigger('owl.stop');
        });
    });
</script>
@endpush

@endif