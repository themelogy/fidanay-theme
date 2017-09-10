<footer>
    <!-- FOOTER -->
    <div class="footer-grey-bg title-lines-container">
        <div class="container">
            <div class="row">
                <!-- LOGO  -->
                <div class="col-md-4">
                    <div class="logo-container">
                        <a href="{{ url(locale()) }}">
                            <div class="logo">
                                <img src="{!! Theme::url("images/logos/logo-white.png") !!}" class="logo-img" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="social-icons-container-footer">
                        <ul class="social-icons-ul">
                            @if(setting('theme::facebook'))
                            <li>
                                <a target="_blank" href="{{ setting('theme::facebook') }}">
                                    <span aria-hidden="true" class="social_facebook main-menu-icon"></span>
                                </a>
                            </li>
                            @endif
                            @if(setting('theme::twitter'))
                            <li>
                                <a target="_blank" href="{{ setting('theme::twitter') }}">
                                    <span aria-hidden="true" class="social_twitter main-menu-icon"></span>
                                </a>
                            </li>
                            @endif
                            @if(setting('theme::linkedin'))
                            <li>
                                <a target="_blank" href="{{ setting('theme::linkedin') }}">
                                    <span aria-hidden="true" class="social_linkedin main-menu-icon"></span>
                                </a>
                            </li>
                            @endif
                            @if(setting('theme::google'))
                                <li>
                                    <a target="_blank" href="{{ setting('theme::google') }}">
                                        <span aria-hidden="true" class="social_googleplus main-menu-icon"></span>
                                    </a>
                                </li>
                            @endif
                            @if(setting('theme::instagram'))
                            <li>
                                <a target="_blank" href="{{ setting('theme::instagram') }}">
                                    <span aria-hidden="true" class="social_instagram main-menu-icon"></span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- LATEST POSTS -->
                <div class="col-md-4">
                    <h3 class="title-block footer-block">{{ trans('themes::theme.latest news') }}</h3>
                    <div class="lite-grey-bg full-col-container">
                        <ul class="latest-post-footer clearfix">
                            @foreach(News::latest(3) as $newsLatest)
                            <li class="latest-post-footer-item">
                                <a href="{{ $newsLatest->url }}">
                                    <div class="post-icon-footer">
                                        <span aria-hidden="true" class="icon_image main-menu-icon"></span>
                                    </div>
                                    <div class="post-text-footer">
                                        <h4 class="title-post-footer">{{ $newsLatest->title }}</h4>
                                        <h4 class="date-post-footer">{{ $newsLatest->created_at->formatLocalized('%d %B %Y') }}</h4>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- CONTACT INFO -->
                <div class="col-md-4">

                    <h3 class="title-block title-full-width footer-block title-bg-after">{!! trans('themes::theme.contact us') !!}</h3>
                    <div class="main-color-bg contact-bg-after">

                        <ul class="contact-list-footer">
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">{!! setting('theme::address') !!}</div>
                            </li>
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">{!! setting('theme::phone') !!}</div>
                            </li>
                            <li class="contact-list-item clearfix">
                                <div class="contact-icon-container">
                                    <span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
                                </div>
                                <div class="contact-text-container">
                                    <a class="a-mail" href="mailto:{!! HTML::email(setting('theme::email')) !!}">{!! HTML::email(setting('theme::email')) !!}</a>
                                </div>
                            </li>
                        </ul>
                        <div class="mask-main-color-bg"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT  -->
    <div class="copyright-container title-lines-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-menu-container">
                        <nav class="clearfix" id="footer-nav">
                            {!! Menu::render('footer', \Themes\Fidanay\Presenter\FooterMenuPresenter::class) !!}
                        </nav>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-copyright-container">
                        <div class="mask-footer-copyright-container"></div>
                        <div class="footer-copyright-text">
                            {!! Carbon::today()->formatLocalized('%Y') !!} © {{ trans('themes::theme.copyrights') }} - <a class="author" href="{!! url(locale()) !!}">{!! setting('theme::company-name') !!}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT -->
    <p id="back-top">
        <a href="#top" title="Back to Top"><span></span></a>
    </p>
</footer>