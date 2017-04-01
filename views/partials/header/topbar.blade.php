<div class="c-layout-header">
<div class="c-topbar c-topbar-light">
    <div class="container">
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-left">
            <ul class="c-icons c-theme-ul">
                @if(setting('theme::twitter'))
                <li class="hidden-xs">
                    <a target="_blank" href="{{ setting('theme::twitter') }}">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                @endif
                @if(setting('theme::facebook'))
                <li class="hidden-xs">
                    <a target="_blank" href="{{ setting('theme::facebook') }}">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                @endif
                @if(setting('theme::instagram'))
                <li class="hidden-xs">
                    <a target="_blank" href="{{ setting('theme::instagram') }}">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                @endif
                @if(setting('theme::google'))
                <li class="hidden-xs">
                    <a target="_blank" href="{{ setting('theme::google') }}">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                @endif
                @if(setting('theme::linkedin'))
                <li class="hidden-xs">
                    <a target="_blank" href="{{ setting('theme::linkedin') }}">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                @endif
                @if(setting('theme::phone'))
                <li class="show-lg">
                    <span>T: {{ setting('theme::phone') }}</span>
                </li>
                @endif
            </ul>
        </nav>
        <!-- END: INLINE NAV -->
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-right">
            {!! Menu::render('topbar', Modules\Theme\Presenters\Fidanay\TopMenuPresenter::class) !!}
            <ul class="c-ext c-theme-ul">
                <li class="c-lang dropdown c-last">
                    <a href="#">{{ LaravelLocalization::getCurrentLocale() }}</a>
                    <ul class="dropdown-menu pull-right" role="menu">
					@foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
						<li @if($locale==LaravelLocalization::getCurrentLocale()) class="active" @endif>
							@php
								switch (Request::route()->getName()) {
									case 'page':
									if(isset($page))
									$url = $page->present()->url($locale);
									break;
									case 'news.slug':
									case 'blog.slug':
									if(isset($post))
									$url = $post->present()->url($locale);
									break;
									case 'news.category':
									case 'blog.category':
									if(isset($category))
									$url = $category->present()->url($locale);
									break;
									case 'store.product.slug':
									if(isset($product))
									$url = $product->present()->url($locale);
									break;
									case 'store.category.slug':
									if(isset($category))
									$url = $category->present()->url($locale);
									break;
									case 'employee.view':
									if(isset($employee))
									$url = $employee->present()->url($locale);
									break;
									default:
									$url = null;
									break;
								}
								$localizedUrl = LaravelLocalization::getLocalizedURL($locale, isset($url) ? $url : null);
							@endphp

							<a lang="{!! $locale !!}" href="{{ $localizedUrl }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "us" : $locale }}"></span> {!! $supportedLocale['native'] !!}</a>
						</li>
					@endforeach
                    </ul>
                </li>
                <li class="c-search hide">
                    <!-- BEGIN: QUICK SEARCH -->
                    <form action="#">
                        <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                        <i class="fa fa-search"></i>
                    </form>
                    <!-- END: QUICK SEARCH -->
                </li>
            </ul>
            @if($currentUser)
                {!! Html::link(route('dashboard.index'), trans('dashboard::dashboard.name'), ['target'=>'_blank', 'class'=>'m-lft-10 uppercase'])  !!}
            @endif
        </nav>
        <!-- END: INLINE NAV -->
    </div>
</div>
</div>