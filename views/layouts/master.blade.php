<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie6" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie7" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html lang="{{ LaravelLocalization::getCurrentLocale() }}"> <!--<![endif]-->
<head>
@include('partials.metadata')
</head>
<body class="fixed-header preloader-overflow normal-page bg-1">

@include('partials.parts.preloader')

<div id="wrap" class="boxed">
    <div class="grey-bg ">

        @include('partials.parts.ie-prefix')

        @include('partials.header')

        @yield('breadcrumbs')

        @yield('content')

        @include('partials.footer')

    </div>
</div>

@include('partials.scripts')

</body>
</html>