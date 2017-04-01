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
            <div class="col-md-3">
                @if($page->isParent())
                    <ul id="nav-sidebar" class="nav bs-sidenav blog-categories">
                        <li><a href="{{ $page->url }}"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span> {{ $page->title }}</a></li>
                        @foreach($page->children()->get() as $child)
                            <li @if($child->id==$page->id) class="current" @endif><a href="{{ $child->url }}">
                                    <span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>
                                    {{ $child->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h4>{{ $page->parent->title }}</h4>
                    <ul id="nav-sidebar" class="nav bs-sidenav blog-categories">
                        @foreach($page->parent->children()->get() as $child)
                            <li @if($child->id==$page->id) class="current" @endif><a href="{{ $child->url }}">
                                    <span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>
                                    {{ $child->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
            <div class="col-md-9">
				@if($page->hasImage())
				<div class="image pull-right m-lft-10 m-bot-10">
					<img class="img-responsive img-thumbnail" src="{{ $page->present()->firstImage(300,300,'resize',80) }}" alt="{{ $page->title }}" />
				</div>
				@endif
                {!! $page->body !!}
            </div>
        </div>
    </div>
@stop
