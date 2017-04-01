@extends('layouts.master')

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
                        {!! Breadcrumbs::renderIfExists('employee.category') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row m-bot-20">
            <div class="col-md-12">
                @if($category->employees()->exists())
                    @foreach($category->employees as $employee)
                        <div class="col-xs-12 col-sm-6 col-md-3 wow zoomIn">
                            <div class="m-top-30 m-bot-30 clearfix">
                                <div class="team-img-container clearfix">
                                    <a class="" href="{{ $employee->url }}">
                                        <img alt="{{ $employee->title }}" src="{{ $employee->present()->firstImage(270,270,'fit',80) }}">
                                    </a>
                                    <div class="social-links clearfix">
                                        <?php $socials = ['facebook', 'instagram', 'twitter', 'linkedin']; ?>
                                        @foreach($socials as $social)
                                            @if(isset($employee->{$social}))
                                                <a class="social-link" target="_blank" title="{{ strtoupper($social) }}" href="{{ $employee->{$social} }}">
                                                    <span aria-hidden="true" class="social_{{ $social }}"></span>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="team-item-descr">
                                    <div class="team-item-name"><a class="a-invert" href="{{ $employee->url }}">{{ $employee->fullname }}</a></div>
                                    <div class="team-item-role">{{ $employee->position }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection