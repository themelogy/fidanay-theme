@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('core::core.error 500') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="current">{{ trans('core::core.error 500') }}</li>
                        </ul>
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
                <h3><i class="fa fa-warning text-red"></i> {{ trans('core::core.error 500 title') }}</h3>
                <p>{!! trans('core::core.error 500 description') !!}</p>
            </div>
        </div>
    </div>
@stop


@section('content-header')
    <h1>
        {{ trans('core::core.error 500') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="current">{{ trans('core::core.error 500') }}</li>
    </ol>
@stop


@section('content')
    <div class="error-page">
        <h2 class="headline text-red" style="line-height: 0.6; margin-top: 0;"> 500</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> {{ trans('core::core.error 500 title') }}</h3>
            <p>{!! trans('core::core.error 500 description') !!}</p>
        </div>
        <!-- /.error-content -->
    </div>
@stop