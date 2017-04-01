<div class="title-lines-container">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="title-lines m-bot-35">
                    <div class="title-block">
                        {{ trans('themes::theme.faq') }}
                    </div>
                </div>

                <!-- Accordion -->
                <div class="accordion-custom m-bot-20">

                    @foreach(app(\Modules\Faq\Repositories\FaqRepository::class)->all()->take(10) as $faq)
                    <h3><a href="{{ route('faq.index') }}">{{ $faq->title }}</a></h3>
                    <div>
                        <p>{{ Str::words(strip_tags($faq->content),30) }}</p>
                        <a class="btn btn-primary btn-xs" href="{{ route('faq.index') }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                    @endforeach

                </div><!-- End accordion -->

            </div>
            <div class="col-md-6">
                @if($page = Page::find(6))
                <div class="title-lines-2 m-bot-35">
                    <div class="title-block uppercase">
                        {{ $page->title }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                                @if(count($page)>0)
                                    @foreach($page->children()->get() as $child)
                                <div class="feature4-box col-sm-6 m-bot-10">
                                    <div class="feature4-box-icon">
                                        <span aria-hidden="true" class="icon_leadership"></span>
                                    </div>
                                    <div class="feature4-box-info">
                                        <h4 class="m-bot-5"><a href="{{ $child->url }}">{{ $child->title }}</a></h4>
										<ul class="list-inline">
											@if($child->children()->exists())
											@foreach($child->children()->get() as $sub_child)
											<li><a href="{{ $sub_child->url }}"><i class="fa fa-angle-right"></i> {{ $sub_child->title }}</a></li>
											@endforeach
											@endif
										</ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                    @endforeach
                                @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>

    </div>
</div>