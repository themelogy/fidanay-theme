@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $course->title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('course.slug') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="title-lines-container course-detail">
    <div class="container">
        <div class="row m-bot-40">
            <div class="col-md-8">
                <div class="view view-first hovered">
                    <a href="{{ $course->present()->firstImage(null,650,"resize",80) }}" class="lightbox">
                        <img src="{{ $course->present()->firstImage(750,300,"fit",80) }}" alt="{{ $course->title }}" >
                        <div class="mask">
                            <div class="zoom info"><span aria-hidden="true" class="icon_search"></span></div>
                        </div>
                    </a>
                </div>
                <div class="blog-item-caption-container">
                    <h2>{{ $course->title }}</h2>
                </div>
                <!-- TEXT -->
                {!! $course->description !!}

            </div>

            <!-- SIDEBAR -->
            <div class="col-md-4">
                <!-- PROJECT DETAILS -->
                <div class="title-lines-sidebar m-bot-30">
                    <div class="title-block">
                        {{ trans("course::courses.title.program") }}
                    </div>
                </div>
                <ul class="list-unstyled m-bot-20 course-list">
                    <li><b>{{ trans('course::courses.title.dates') }}</b> {{ $course->start_end_at }}</li>
                    <li><b>{{ trans('course::courses.title.hours') }}</b> {{ $course->start_end_hour }}</li>
                    <li><b>{{ trans('course::courses.title.days') }}</b> {{ $course->present()->days }}</li>
                    <li><b>{{ trans('course::courses.title.duration') }}</b> {{ $course->total_week }} hafta ({{ $course->total_hour }} saat)</li>
                    <li><b>{{ trans('course::locations.title.address') }}</b> {{ $course->location->address }}</li>
                    <li><b>{{ trans('course::courses.title.capacity') }}</b> {{ $course->present()->capacity }}</li>
                    <li><b>{{ trans('course::courses.title.total_price') }}</b> {{ $course->price }} TL</li>
                    <li><b>{{ trans('course::courses.title.age') }}</b> {{ $course->age }}</li>
                </ul>

            </div>

        </div>
    </div>
</div>
@endsection

@push('css_inline')
<style>
    .course-detail .course-list {
        border-left:  1px solid #ebebeb;
        padding-left: 20px;
    }
    .course-detail .course-list li {
        margin-bottom: 10px;
        border-bottom: 1px solid #ebebeb;
    }
    .course-detail .course-list li:last-child {
        border-bottom: none;
    }
    .course-detail .course-list b {
        display: block;
        color: #468DBB;
    }
    .blog-item-caption-container h2 {
        color: #468DBB;
        border-width: 1px;
    }
</style>
@endpush