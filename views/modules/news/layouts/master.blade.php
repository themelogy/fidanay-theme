@extends('layouts.master')

@section('content')
    <div class="title-lines-container">
        <div class="container">
            <div class="row m-bot-40">
                <div class="col-md-9">
                    <div class="row box-with-hover">
                        @yield('news.content')
                    </div>
                </div>

                @include('news::partials.sidebar')

            </div>
            @yield('news.pagination')
        </div>
    </div>
@endsection