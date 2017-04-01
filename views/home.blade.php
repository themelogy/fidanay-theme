@extends('layouts.master')

@section('content')
    @include('partials.parts.sliders.1')

    @include('partials.parts.slider-bottoms.2')

    @include('partials.parts.features.1')

    @include('partials.parts.news.horizontal')

    @if('asas'==1)

        @include('partials.parts.portfolios')

        @include('partials.parts.titles.1')

        @include('partials.parts.titles.2')

        @include('partials.parts.titles.3')

        @include('partials.parts.counters.1')

        @include('partials.parts.news.vertical')

    @endif
@endsection