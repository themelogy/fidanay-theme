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
            <div class="col-md-12">
                @if(count($page->children)>0)
                    <div class="row">
                        @foreach(collect($page->children)->sortBy('position') as $child)
                            <div class="col-sm-6 col-md-4">
                                <div class="child-page thumbnail">
                                    <img class="rounded" src="{{ $child->present()->firstImage(356,150,"fit",50) }}" />
                                    <div class="caption">
                                        <h4 class="title"><a href="{{ $child->url }}">{{ $child->title }}</a></h4>
                                        <p>{{ $child->sub_title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
