@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $page->title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('page') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row m-bot-20">
            @foreach($page->children as $child)
            <div class="col-xs-12 col-sm-6 col-md-4 wow zoomIn m-bot-20">
                <!--<h4>{{ $child->title }}</h4>-->
                <div class="view view-first blog-hover hovered">
					<img class="thumbnail" src="{{ $child->present()->firstImage(463,360,'fit',50) }}" alt="{{ $child->title }}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
