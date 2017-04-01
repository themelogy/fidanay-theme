@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('themes::faq.title') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('faq.index') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row m-bot-20">

            @include('faq::partials.sidebar')

            <div class="col-md-9">
                <div class="bs-example">
                    <div class="panel-group" id="accordion">

                        @foreach($faqs as $faq)
                            @include('faq::_faq', [$faq])
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="row m-bot-40">
            <div class="col-md-12">
                <nav class="clearfix">
                    {!! $faqs->render('faq::pagination.default') !!}
                </nav>
            </div>
        </div>
    </div>
@stop
