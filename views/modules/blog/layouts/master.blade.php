@extends('layouts.master')

@section('content')
    <div class="title-lines-container">
        <div class="container">
            <div class="row m-bot-40">
                <div class="col-md-9">
                    <div class="row box-with-hover">
                        @yield('blog.content')
                    </div>
                </div>

                @include('blog::partials.sidebar')

            </div>
            @yield('blog.pagination')
        </div>
    </div>
@endsection