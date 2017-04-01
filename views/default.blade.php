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
				@if($page->hasImage())
				<div class="image pull-right m-top-20 m-lft-10 m-bot-10">
					<img class="img-responsive img-thumbnail" src="{{ $page->present()->firstImage(300,300,'resize',80) }}" alt="{{ $page->title }}" />
				</div>
				@endif
			
                {!! $page->body !!}

				@if($page->tags()->exists())
				<div class="divider m-bot-0"><i class="fa fa-square"></i></div>
				<ul class="list-inline m-top-10">
					@foreach($page->tags()->get() as $tag)
					<li><a class="btn btn-default btn-xs" href="{{ route('page.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
					@endforeach
				</ul>
				@endif	
				
            </div>
        </div>
    </div>
@stop
