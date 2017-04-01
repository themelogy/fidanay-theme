@stack('css_inline')
<!-- JS begin -->
{!! Theme::script('js/all.min.js') !!}
@stack('scripts')
@stack('js_inline')

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Open Sans::latin-ext', 'Roboto::latin-ext', 'Oswald::latin-ext'
            ]
        }
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); </script>

@if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false)
{!! $googleAnalytics !!}
@endif