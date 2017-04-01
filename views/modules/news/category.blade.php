@extends('news::layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $category->name }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('news.category') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('news.content')
    @foreach($posts as $post)
        @include('news::_posts', [$post])
    @endforeach
@endsection

@section('news.pagination')
    <div class="row m-bot-40">
        <div class="col-md-12">
            <nav class="clearfix">
                {!! $posts->render('news::pagination.default') !!}
            </nav>
        </div>
    </div>
@endsection
