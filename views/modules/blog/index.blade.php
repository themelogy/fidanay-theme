@extends('blog::layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('blog::blog.title') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('blog') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('blog.content')
    @foreach($posts as $post)
        @include('blog::_posts', [$post])
    @endforeach
@endsection

@section('blog.pagination')
    <div class="row m-bot-40">
        <div class="col-md-12">
            <nav class="clearfix">
                {!! $posts->render('blog::pagination.default') !!}
            </nav>
        </div>
    </div>
@endsection
