@extends('layouts.master')

@section('breadcrumbs')
    <?php seo_helper()->setTitle(trans('core::core.error 404')) ?>
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('core::core.error 404').' : '.trans('core::core.error 404 title') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('404') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')



@endsection