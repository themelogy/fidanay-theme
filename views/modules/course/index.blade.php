@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('course::courses.title.courses') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('course.index') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container section-courses">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline course-category">
                @foreach($categories as $category)
                    <li><a href="{{ $category->present()->url }}">{{ $category->title }}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="row m-bot-20">
            <div class="col-md-12">
                <div class="row">
                @foreach($courses as $course)
                    @include('course::_course')
                @endforeach
                </div>
            </div>
        </div>
        <div class="row m-bot-40">
            <div class="col-md-12">
                <nav class="clearfix">
                    {!! $courses->render('course::pagination.default') !!}
                </nav>
            </div>
        </div>
    </div>
@endsection