@extends('layouts.master')

@section('breadcrumbs')
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('themes::employee.title') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('employee.view') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- COTENT CONTAINER -->
    <div class="container">

        <div class="row m-bot-40">
            <div class="col-md-4">

                <div id="owl-1-pag-auto" class="owl-carousel owl-controls-style-2 owl-theme shadow wow zoomIn">
                    <div class="item m-0">
                        <div>
                            <img style="width: 100%;" alt="{{ $employee->fullname }}" src="{{ $employee->present()->firstImage(370,370,'fit',80) }}" />

                            <div class="social-links clearfix">
                                <?php $socials = ['facebook', 'instagram', 'twitter', 'linkedin']; ?>
                                @foreach($socials as $social)
                                    @if(isset($employee->{$social}))
                                        <a class="social-link" target="_blank" title="{{ strtoupper($social) }}" href="{{ $employee->{$social} }}">
                                            <span aria-hidden="true" class="social_{{ $social }}"></span>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">

                <div class="heading-line h2-line m-top-10-mobile">
                    <h2 class="m-0 theme-color">{{ $employee->fullname }}</h2>
                    <div class="view-all-container m-0">
                        <div class="customNavigation clearfix hidden-xs">
                            <div class="carousel-va-container">
                                <a class="button medium gray-lite" href="{{ route('employee.index') }}"> <span aria-hidden="true" class="button-icon-anim arrow_back"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="position m-bot-30">
					<h3 class="m-0 m-bot-10">{{ $employee->position }}</h3>
				</div>

                <div class="position m-bot-30">
                    <h3 class="m-0 m-bot-10"></h3>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-unstyled m-bot-30">
                            <li class="m-bot-10"><span aria-hidden="true" class="icon_phone theme-color m-r-5"></span> {{ $employee->phone }}</li>
                            <li class="m-bot-10"><i class="fa fa-fax theme-color m-r-5"></i> {{ $employee->fax }}</li>
                            <li class="m-bot-10"><span aria-hidden="true" class="icon_mail_alt theme-color m-r-5"></span> {{ HTML::email($employee->email) }}
                            </li>
                        </ul>

                    </div>

                </div>

                <hr/>

                <div class="row m-bot-40 m-top-20">
                    <div class="col-md-12 text-justify">

                        {!! $employee->biography !!}

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@push('js_inline')
<script>
    $(document).ready(function () {
        $("#owl-1-pag-auto").owlCarousel({
            autoPlay : 5000,
            items : 1,
            itemsDesktop : [1000,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,1], // betweem 900px and 601px
            itemsTablet: [470,1], //2 items between 600 and 0
            itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
            // itemsDesktop : [1199,4],
            // itemsDesktopSmall : [991,1],
            // itemsTablet: [991,1],
            // itemsMobile : false,

            //Pagination
            pagination : true,
            paginationNumbers: false

        });
    });
</script>
@endpush