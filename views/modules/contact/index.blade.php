@extends('layouts.master')

@section('content')
    <!-- PAGE TITLE 1 -->
    <div class="page-title-bg indent-header-1 page-main-content m-bot-40">
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ trans('contact::contacts.title.contacts') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Breadcrumbs::renderIfExists('contact') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT ONE PAGE FOOTER -->
    <div class="title-lines-container m-top-min-35">
        <div class="container">

            <div class="row">
                <div class="col-md-6 m-bot-50">
                    @include('contact::form')
                </div>

                <div class="col-md-6 m-bot-50">
                    <!-- TITLE -->
                    <div class="title-lines-2 m-bot-40">
                        <div class="title-block">
                            {{ trans('themes::contact.title') }}
                        </div>
                    </div>
                    <!-- CONTACT INFO -->
                    <div class="contact-info-container wow fadeInRight" data-wow-duration="1100ms" >
                        <div class="contact-info-item-container m-bot-20">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_pin_alt contact-info-icon"></span>
                            </div>
                            <!-- <div class="contact-info-title">ADDRESS</div> -->
                            <h2 class="title-20">{{ trans('themes::contact.address') }}</h2>
                            <div class="contact-info-text">{!! setting('theme::address') !!}</div>
                        </div>
                        <div class="contact-info-item-container m-bot-20">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_phone contact-info-icon"></span>
                            </div>
                            <h2 class="title-20">{{ trans('themes::contact.phone') }}</h2>
                            <div class="contact-info-text">{{ setting('theme::phone') }}<br>{{ setting('theme::mobile') }}</div>
                        </div>
                        <div class="contact-info-item-container m-bot-40">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_mail_alt contact-info-icon"></span>
                            </div>
                            <h2 class="title-20">{{ trans('themes::contact.email') }}</h2>
                            <div class="contact-info-text"><a class=" a-invert" href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Google Maps -->
    <div id="contact-link" class="google-map-container-footer" style="height: 350px;">
        @gmap('300px', '16', 'images/marker.png')
    </div>
    <!-- Google Maps / End -->
@endsection